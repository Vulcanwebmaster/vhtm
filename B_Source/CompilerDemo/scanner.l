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
STRING [[:alnum:]]+
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
let { return(LET); }
readi { return(READI); }
readd { return(READD); }
reads { return(READS); }
readc { return(READC); }
skip { return(SKIP); }
then { return(THEN); }
while { return(WHILE); }
writei { return(WRITEI); }
writed { return(WRITED); }
writes { return(WRITES); }
writec { return(WRITEC); }
{ID} { yylval.id = (char *) strdup(yytext);
return(IDENTIFIER); }
{DIGIT} { yylval.intval = atoi( yytext ); return(NUMBER_VAL); }
{DOUBLE} { yylval.douval = atof( yytext ); return(NUMBERD_VAL); } /* Added */
{STRING} { yylval.strval = yytext ; return(STR_VAL); } /* Added */
{CHAR} { yylval.chrval = *yytext ; return(CHR_VAL); } /* Added */
[ \t\n]+ /* eat up whitespace */ 
. { return(yytext[0]);}
%%
int yywrap(void){}
/************************** End Scanner File *****************************/