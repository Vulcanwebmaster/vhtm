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
char linebuf;
%}
/*=========================================================================
TOKEN Definitions
=========================================================================*/
DIGIT [0-9]+|\-[0-9]+
DOUBLE [0-9]+\.[0-9]*|\-[0-9]+\.[0-9]*
ID [a-zA-Z_][a-zA-Z0-9_]*
CHAR \'.\'
BOOLEAN true|false
STRING \".*\"
%option yylineno
/*=========================================================================
REGULAR EXPRESSIONS defining the tokens for the Simple language
=========================================================================*/
%%
":=" { return(ASSGNOP); }
do { return(DO); }
else { return(ELSE); }
end { return(END); }
endif { return(ENDIF); }
endwhile { return(ENDWHILE); }
endfor { return(ENDFOR); }
endfunction { return(ENDFUNCTION); }
fi { return(FI); }
if { return(IF); }
begin { return(IN); }
integer { return(INTEGER); }
char { return (CHAR);} /* Added */
string { return(STRING);} /* Added */
double { return(DOUBLE);} /* Added */
bool {return(BOOLEAN);}   /* Added */
const { return(CONST);}
"array integer" {return(ARRAY_I);  } 
"array boolean" {return(ARRAY_B);  }
"array char" {return(ARRAY_C);  } 
"array double" {return(ARRAY_D);  }  
return { return(RETURN); }
var { return(LET); }
read { return(READ); }
skip { return(SKIP); }
then { return(THEN); }
while { return(WHILE); }
write { return(WRITE); }
writeline { return(WRITELINE); }
function { return(FUNCTION); }
for { return(FOR); }
to { return(TO); }
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

[ \t\n]+ /* eat up whitespace */ { linebuf = yytext[0];}
. { return (yytext[0]);}
%%
int yywrap(void){}
void yyerror(char *s)
{
	if (linebuf == '\n')
		printf("%s at line % d!\n", s, yylineno - 1);
		else 
			printf("%s at line % d!\n", s, yylineno);
	exit(0);
}
/************************** End Scanner File *****************************/