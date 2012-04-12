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
int check = 0;
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
do { check = 1; return(DO); }
else { check = 1; return(ELSE); }
end { check = 1; return(END); }
endif { check = 1; return(ENDIF); }
endwhile { check = 1; return(ENDWHILE); }
endfor { check = 1; return(ENDFOR); }
endfunction { check = 1; return(ENDFUNCTION); }
endswitch {check = 1; return(ENDSWITCH); }
if { check = 1; return(IF); }
begin { check = 1; return(IN); }
integer { check = 1; return(INTEGER); }
char { check = 1; return (CHAR);} /* Added */
string { check = 1; return(STRING);} /* Added */
double { check = 1; return(DOUBLE);} /* Added */
bool {check = 1; return(BOOLEAN);}   /* Added */
const { check = 1; return(CONST);}
"array integer" {check = 1; return(ARRAY_I);  } 
"array bool" {check = 1; return(ARRAY_B);  }
"array char" {check = 1; return(ARRAY_C);  } 
"array double" {check = 1; return(ARRAY_D);  }  
return { check = 1; return(RETURN); }
var { check = 1; return(LET); }
read { check = 1; return(READ); }
then { check = 1; return(THEN); }
while { check = 1; return(WHILE); }
write { check = 1; return(WRITE); }
writeline { check = 1; return(WRITELINE); }
function { check = 1; return(FUNCTION); }
for { check = 1; return(FOR); }
to { check = 1; return(TO); }
switch {check = 1; return(SWITCH); }
case {check = 1; return(CASE); }
break {check = 1; return(BREAK); }
default {check = 1; return(DEFAULT); }
wait { check = 1; return (WAIT); } 
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

[ \t\n]+ /* eat up whitespace */ { check = 0; linebuf = yytext[0];}
. { return (yytext[0]);}
%%
int yywrap(void){}
void yyerror(char *s)
{
	char * file_name;
	int final = -1;
	if (linebuf == '\n')
	{
		FILE * f_temp;
		file_name = (char *) malloc (250);
		f_temp = fopen("temp.txt", "r");
		char c;
		int i = 0;
		while (!feof(f_temp)) 
		{
			fscanf(f_temp,"%c",&c);
			file_name[i] = c;
			i++;
		}
		file_name[i - 1] = '\0';
		fclose(f_temp);
		remove("temp.txt");
		FILE * fp;
		fp = fopen(file_name, "r");
		char cur_c;
		char pre_c;
		int count = 1;
		int store = -1;
		while (!feof(fp)) 
		{
			fscanf(fp,"%c",&cur_c);
			if (cur_c == '\n') 
			{
				count++;
				if (pre_c == '\n' && store == -1)
				{
					store = count - 2;
				}
				else
				{
					pre_c = cur_c;
				}
			} else
			{
				pre_c = cur_c;
				store = -1;
			}
			if (count == yylineno) break;
		}
		fclose(fp);
		fp = fopen(file_name, "r");
		if (store == -1) store = count - 1;
		count = 1;
		while (!feof(fp)) 
		{
			fscanf(fp,"%c",&cur_c);
			if (cur_c == '\n') 
			{
				count++;
			}
			if (count == store) break;
		}
		char * str_buffer;
		str_buffer = (char *) malloc (250);
		int str_len = 0;
		while (!feof(fp)) 
		{
			fscanf(fp,"%c",&cur_c);
			if (cur_c == '\n') break;
			else
			if (cur_c == ' ' || cur_c == '\t')  str_len = 0;
			else 
			{
				str_buffer[str_len] = cur_c;
				str_len++;
			}
		}
		str_buffer[str_len] = '\0';
		if (str_buffer[str_len - 1] == '(')
			final = store;
		else
		if (strcmp(str_buffer,"endfunction") == 0)
			final = store;
		else
		if (strcmp(str_buffer,"endfor") == 0)
			final = store;
		else
		if (strcmp(str_buffer,"endif") == 0)
			final = store;
		else
		if (strcmp(str_buffer,"endwhile") == 0)
			final = store;
		else
		if (strcmp(str_buffer,"end") == 0)
			final = store;
		else
		if (strcmp(str_buffer,"break") == 0)
			final = store;
		else
		if (strcmp(str_buffer,"endswitch") == 0)
			final = store;
		else 
		if (str_buffer[strlen(str_buffer)-1] != ';') 
				final = store;
		else final = yylineno;
		printf("%s at line % d!\n", s, final);
		fclose(fp);
	}
	else 
	{
		printf("%s at line % d!\n", s, yylineno);
	}
	remove("temp.txt");
	fflush(stdout);
	fflush(stdin);
	char end;
	scanf("%c",&end);
	exit(0);
}
/************************** End Scanner File *****************************/
