/***************************************************************************
Scanner for the Simple language
***************************************************************************/
%{
/*=========================================================================
C-libraries and Token definitions
=========================================================================*/
#include <string.h> /* for strdup */
/*#include <stdlib.h> */ /* for atoi */
#include "parser.tab.h" /* for token definitions and yylval */
%}
/*=========================================================================
TOKEN Definitions
=========================================================================*/
DIGIT [0-9]+
DOUBLE [0-9]+\.[0-9]*
ID [a-zA-Z_][a-zA-Z0-9_]*
CHAR \'.\'
BOOLEAN true|false
STRING \".*\"
/*=========================================================================
REGULAR EXPRESSIONS defining the tokens for the Simple language
=========================================================================*/
%%
":=" { return(ASSGNOP); }
do { return(DO); }
else { return(ELSE); }
end { return(END); }
fi { return(FI); }
if { return(IF); }
begin { return(IN); }
integer { return(INTEGER); }
char { return (CHAR);} /* Added */
string { return(STRING);} /* Added */
double { return(DOUBLE);} /* Added */
bool {return(BOOLEAN);}   /* Added */
"array integer" {return(ARRAY_I);  } 
"array boolean" {return(ARRAY_B);  }
"array char" {return(ARRAY_C);  } 
"array double" {return(ARRAY_D);  }  
var { return(LET); }
constant { return(CONST);}
readi { return(READI); }
readd { return(READD); }
reads { return(READS); }
readc { return(READC); }
readb { return(READB); }
skip { return(SKIP); }
then { return(THEN); }
while { return(WHILE); }
writei { return(WRITEI); }
writed { return(WRITED); }
writes { return(WRITES); }
writec { return(WRITEC); }
writeb { return(WRITEB); }
function { return(FUNCTION); }
{BOOLEAN} { yylval.bolval = yytext; return(NUMBERB_VAL); } /* Added */
{ID} { yylval.id = (char *) strdup(yytext); return(IDENTIFIER); }
{DIGIT} { yylval.intval = atoi( yytext ); return(NUMBER_VAL); }
{DOUBLE} { yylval.douval = atof( yytext ); return(NUMBERD_VAL); } /* Added */
{CHAR} { char * temp = yytext; 
		 if (temp[0] == '\'') yylval.chrval = *(yytext+1); 
			else yylval.chrval = *(yytext);
		 return(CHR_VAL); } /* Added */
{STRING} { 
		char * temp = yytext;
		char * result;
		if (temp[0] == '\"') 
		{
			int i = 0;
			result = (char *) malloc (strlen(temp)+1);
			while (i < strlen(temp) - 2)
			{
				result[i] = temp[i+1];
				i ++;
			}
			result[strlen(temp) - 2] = '\0';
			yylval.strval = (char *) malloc (strlen(result)+1);
			strcpy(yylval.strval, result);
		} else {
			yylval.strval = (char *) malloc (strlen(temp)+1);
			strcpy(yylval.strval, temp);
		}
		return(STR_VAL); } /* Added */
"/*" {
	register int c;
	for ( ; ; )
	{
		while ((c = input())!= '*' && c != EOF)
		; /* eat up text of comment */
		if(c == '*' )
		{
			while((c = input()) == '*')
			;
			if (c == '/')
				break; /* found the end of comment */
		}
		if (c == EOF)
		{
			printf("EOF in comment");
			break;
		}
	}
}

"//" {
	register int c;
	for ( ; ; )
	{
		while ((c = input())!= '\n')
		; /* eat up text of comment */
		if(c == '\n' )
		{
			break; /* found the end of comment */
		}
	}
}

[ \t\n]+ /* eat up whitespace */
. { return (yytext[0]);}
%%
int yywrap(void){}
/************************** End Scanner File *****************************/