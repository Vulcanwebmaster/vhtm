%{/*************************************************************************
Compiler for the Simple language
***************************************************************************/
/*=========================================================================
C Libraries, Symbol Table, Code Generator & other C code
=========================================================================*/
#include <stdio.h> /* For I/O */
#include <stdlib.h> /* For malloc here and in symbol table */
#include <string.h> /* For strcmp in symbol table */
#include "ST.h" /* Symbol Table */
#include "SM.h" /* Stack Machine */
#include "CG.h" /* Code Generator */
#define YYDEBUG 1 /* For Debugging */
int errors; /* Error Count */
char * function_name;
/*-------------------------------------------------------------------------
The following support backpatching
-------------------------------------------------------------------------*/
struct lbs /* Labels for data, if and while */
{
	int for_goto;
	int for_jmp_false;
};

struct lbs * newlblrec() /* Allocate space for the labels */
{
	return (struct lbs *) malloc(sizeof(struct lbs));
}
/*-------------------------------------------------------------------------
Install identifier & check if previously defined.
-------------------------------------------------------------------------*/
install ( char *sym_name, char *scope )
{
	symrec *s;
	s = getsym (sym_name, scope);
	if (s == 0)
		s = putsym (sym_name, scope);
	else 
	{ 
		errors++;
		printf( "%s is already defined\n", sym_name );
	}
}
/*-------------------------------------------------------------------------
If identifier is defined, generate code
-------------------------------------------------------------------------*/
context_check( enum code_ops operation, char *sym_name, char *scope )
{ 
	symrec *identifier;
	identifier = getsym(sym_name, scope);
	if ( identifier == 0 )
		{ 
			errors++;
			printf( "%s", sym_name );
			printf( "%s\n", " is an undeclared identifier" );
		}
	else gen_code( operation, identifier->offset );
}
/*=========================================================================
SEMANTIC RECORDS
=========================================================================*/
%}
%union semrec /* The Semantic Records */
{
	int intval; /* Integer values */
	double douval;
	char *strval;
	char *bolval;
	char chrval;
	char *id; /* Identifiers */
	struct lbs *lbls; /* For backpatching */
	
	int *arrIntval;
	double *arrDouval;
	char *arrChrval;
	int *arrBolval;
}
/*=========================================================================
TOKENS
=========================================================================*/
%start program
%token <intval> NUMBER_VAL /* Simple integer */
%token <douval> NUMBERD_VAL
%token <strval> STR_VAL  /* Added */
%token <chrval> CHR_VAL /* Added */
%token <bolval> NUMBERB_VAL
%token <id> IDENTIFIER /* Simple identifier */
%token <lbls> IF WHILE /* For backpatching labels */
%token SKIP THEN ELSE FI DO END
%token INTEGER LET IN STRING DOUBLE CHAR FUNCTION BOOLEAN
%token READI READS READC READD READB
%token WRITEI WRITES WRITEC WRITED WRITEB
%token ARRAY_I ARRAY_D ARRAY_C ARRAY_B  
%token ASSGNOP 
/*=========================================================================
OPERATOR PRECEDENCE
=========================================================================*/
%left '-' '+'
%left '*' '/'
%right '^'
/*=========================================================================
GRAMMAR RULES for the Simple language
=========================================================================*/
%%
program : 
LET
{
	function_name = "main";
}
declarations
func_decls
IN 
{ 
	gen_code( DATA, data_location() - 1 );
	if (function_name != NULL) free(function_name);
	function_name = "main";
}
commands
END 
{ 
	gen_code( HALT, 0 ); 
	YYACCEPT; 
}
;

declarations : /* empty */
| declarations declaration
;

declaration : INTEGER id_seq IDENTIFIER ';' { install( $3 , function_name); }
| CHAR id_seq IDENTIFIER ';' { install( $3, function_name ); }
| DOUBLE id_seq IDENTIFIER ';' { install( $3, function_name ); }
| STRING id_seq IDENTIFIER ';' { install( $3, function_name ); }
| BOOLEAN id_seq IDENTIFIER ';' { install( $3, function_name ); }
| ARRAY_I IDENTIFIER '[' '1' '0' ']' ';' { printf("PPPP"); install ( $3, function_name ); }
| ARRAY_D id_seq IDENTIFIER '[' NUMBER_VAL ']' ';' { install ( $3, function_name ); }
| ARRAY_C id_seq IDENTIFIER '[' NUMBER_VAL ']' ';' { install ( $3, function_name ); }
| ARRAY_B id_seq IDENTIFIER '[' NUMBER_VAL ']' ';' { install ( $3, function_name ); }
;

id_seq : /* empty */
| id_seq IDENTIFIER ',' { install( $2, function_name ); }
;

func_decls : /* empty */
| func_decls func_decl
;

func_decl: FUNCTION IDENTIFIER '(' func_var_decls ')' 
{
	install( $2 , "main"); 
	if (function_name != NULL) free(function_name);
	function_name = (char *) malloc (strlen($2)+1);
	function_name = $2;
	install( function_name , function_name);
}
declarations
IN 
	commands
END 
{
	if (function_name != NULL) free(function_name);
	function_name = "main";
}
;

func_var_decls : /* empty */
| func_var_decls func_var_decl
;

func_var_decl : var_seq INTEGER IDENTIFIER { install( $3, function_name ); }
| var_seq CHAR IDENTIFIER { install( $3, function_name ); }
| var_seq DOUBLE IDENTIFIER { install( $3, function_name ); }
| var_seq STRING IDENTIFIER { install( $3, function_name ); }
| var_seq BOOLEAN IDENTIFIER { install( $3, function_name ); }
;

var_seq : /* empty */
| var_seq INTEGER IDENTIFIER ',' { install( $3, function_name ); }
| var_seq CHAR IDENTIFIER ',' { install( $3, function_name ); }
| var_seq DOUBLE IDENTIFIER ',' { install( $3, function_name ); }
| var_seq STRING IDENTIFIER ',' { install( $3, function_name ); }
| var_seq BOOLEAN IDENTIFIER ',' { install( $3, function_name ); }
;

commands : /* empty */
| commands command ';'
;

command : SKIP
| READI IDENTIFIER { context_check( READ_INT, $2, function_name); }
| READD IDENTIFIER { context_check( READ_DOU, $2, function_name ); }
| READS IDENTIFIER { context_check( READ_STR, $2, function_name ); }
| READC IDENTIFIER { context_check( READ_CHR, $2, function_name ); }
| READB IDENTIFIER { context_check( READ_BOL, $2, function_name ); }
| WRITEI exp { gen_code( WRITE_INT, 0 ); }
| WRITED exp { gen_code( WRITE_DOU, 0 ); }
| WRITES exp { gen_code( WRITE_STR, 0 ); }
| WRITEC exp { gen_code( WRITE_CHR, 0 ); }
| WRITEB exp { gen_code( WRITE_BOL, 0 ); }
| IDENTIFIER ASSGNOP exp { context_check( STORE, $1, function_name ); }
| IDENTIFIER '(' values ');' {}
| IDENTIFIER exparr 
| IF exp { $1 = (struct lbs *) newlblrec(); $1->for_jmp_false = reserve_loc(); }
THEN commands { $1->for_goto = reserve_loc(); }
ELSE { back_patch( $1->for_jmp_false,JMP_FALSE,gen_label() ); } commands
FI { back_patch( $1->for_goto, GOTO, gen_label() ); }
| WHILE { $1 = (struct lbs *) newlblrec(); $1->for_goto = gen_label(); } exp { $1->for_jmp_false = reserve_loc(); }
DO
commands
END { gen_code( GOTO, $1->for_goto ); back_patch( $1->for_jmp_false, JMP_FALSE, gen_label() ); }
;

exparr : '[' NUMBER_VAL ']' ASSGNOP NUMBER_VAL { gen_code_arr_int( LD_INT, $2 , $5 ); }

exp : NUMBER_VAL { gen_code( LD_INT, $1 ); }
| NUMBERD_VAL { gen_code_double( LD_DOU, $1 ); }
| STR_VAL { gen_code_string ( LD_STR, $1); }
| CHR_VAL { gen_code_char ( LD_CHR, $1); }
| NUMBERB_VAL { gen_code_boolean (LD_BOL, $1); } 
| IDENTIFIER { context_check( LD_VAR, $1, function_name ); }
| exp '<' exp { gen_code( LT, 0 ); }
| exp '=' exp { gen_code( EQ, 0 ); }
| exp '>' exp { gen_code( GT, 0 ); }
| exp '+' exp { gen_code( ADD, 0 ); }
| exp '-' exp { gen_code( SUB, 0 ); }
| exp '*' exp { gen_code( MULT, 0 ); }
| exp '/' exp { gen_code( DIV, 0 ); }
| exp '^' exp { gen_code( PWR, 0 ); }
| '(' exp ')'
;

values : /* empty */
| values value
;

value : val_seq NUMBER_VAL
| val_seq NUMBERD_VAL
| val_seq STR_VAL
| val_seq CHR_VAL
| val_seq NUMBERB_VAL
| val_seq IDENTIFIER
;

val_seq : /* empty */
| val_seq NUMBER_VAL ','
| val_seq NUMBERD_VAL ','
| val_seq NUMBERB_VAL ','
| val_seq STR_VAL ','
| val_seq CHR_VAL ','
| val_seq IDENTIFIER ','
;
%%
/*=========================================================================
MAIN
=========================================================================*/
main( int argc, char *argv[] )
{ 
	extern FILE *yyin;
	++argv; --argc;
	yyin = fopen( argv[0], "r" );
	/*yydebug = 1;*/
	errors = 0;
	yyparse ();
	printf ("Parse Completed\n");
	if ( errors == 0 )
	{ 
		//print_code ();
		fetch_execute_cycle();
	}
		
}
/*=========================================================================
YYERROR
=========================================================================*/
yyerror ( char *s ) /* Called by yyparse on error */
{
	errors++;
	printf ("%s\n", s);
}
/**************************** End Grammar File ***************************/