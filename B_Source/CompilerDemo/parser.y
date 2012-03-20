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
struct lbs * if_var;
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
install ( char *sym_name, char *scope, enum type_code type, int length )
{
	symrec *s;
	s = getsym (sym_name, scope);
	if (s == 0)
	{
		s = putsym (sym_name, scope, type, length);
	}
	else 
	{
		errors++;
		printf( "%s ", sym_name );
		yyerror("is already defined");
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
			identifier = getsym(sym_name, "global");
			if ( identifier == 0 )
			{
				errors++;
				printf( "%s", sym_name );
				yyerror(" is an undeclared identifier");
			}
		}
	if (identifier != 0)
	{
		if (identifier->type == ARR_D && operation == INT_ARR_STORE)  
			gen_code_variable( DOU_ARR_STORE, identifier);
		else 
		if (identifier->type == ARR_B && operation == INT_ARR_STORE)  
			gen_code_variable( BOL_ARR_STORE, identifier);
		else 
		if (identifier->type == ARR_C && operation == INT_ARR_STORE)  
			gen_code_variable( CHR_ARR_STORE, identifier);
		else
			gen_code_variable( operation, identifier);
	}
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
%token <arrIntval> ARRAY_VAL
%token <id> IDENTIFIER /* Simple identifier */
%token <lbls> IF WHILE FOR /* For backpatching labels */
%token SKIP THEN ELSE FI DO END TO ENDIF ENDFOR ENDWHILE ENDFUNCTION
%token INTEGER CONST LET IN STRING DOUBLE CHAR FUNCTION BOOLEAN
%token READ
%token WRITE WRITELINE
%token ARRAY_I ARRAY_C ARRAY_B ARRAY_D  
%token ASSGNOP RETURN
/*=========================================================================
OPERATOR PRECEDENCE
=========================================================================*/
%left '-' '+'
%left '*' '/'
/*=========================================================================
GRAMMAR RULES for the Simple language
=========================================================================*/
%%
program :
var
{
	function_name = "global";
}
declarations
constant 
	const_declarations { if (start_const != -1) end_const =  gen_label();}
func_decls
IN 
{ 
	gen_code( DATA, data_location() - 1 );
	if (function_name != NULL) free(function_name);
	function_name = "main";
	main_start = gen_label() - 1;
}
commands
END
{ 
	gen_code( HALT, 0 ); 
	YYACCEPT; 
}
;

constant : /* empty */
|  CONST { start_const = gen_label(); }
;

var: /* empty */
| LET
;

declarations : /* empty */
| declarations declaration
;

declaration : INTEGER id_seq_int IDENTIFIER ';' { install( $3 , function_name, INT, -1); }
| CHAR id_seq_chr IDENTIFIER ';' { install( $3, function_name, CHR, -1 ); }
| DOUBLE id_seq_dou IDENTIFIER ';' { install( $3, function_name, DOU, -1 ); }
| STRING id_seq_str IDENTIFIER ';' { install( $3, function_name, STR, -1 ); }
| BOOLEAN id_seq_bol IDENTIFIER ';' { install( $3, function_name, BOL, -1 ); }
| ARRAY_I IDENTIFIER '[' NUMBER_VAL ']' ';' {install( $2, function_name, ARR_I, $4 ); }
| ARRAY_D IDENTIFIER '[' NUMBER_VAL ']' ';' {install( $2, function_name, ARR_D, $4 ); }
| ARRAY_C IDENTIFIER '[' NUMBER_VAL ']' ';' {install( $2, function_name, ARR_C, $4 ); }
| ARRAY_B IDENTIFIER '[' NUMBER_VAL ']' ';' {install( $2, function_name, ARR_B, $4 ); }
;

id_seq_int : /* empty */
| id_seq_int IDENTIFIER ',' { install( $2, function_name, INT, -1 ); }
;

id_seq_chr : /* empty */
| id_seq_chr IDENTIFIER ',' { install( $2, function_name, CHR, -1 ); }
;

id_seq_str : /* empty */
| id_seq_str IDENTIFIER ',' { install( $2, function_name, STR, -1 ); }
;

id_seq_dou : /* empty */
| id_seq_dou IDENTIFIER ',' { install( $2, function_name, DOU, -1 ); }
;

id_seq_bol : /* empty */
| id_seq_bol IDENTIFIER ',' { install( $2, function_name, BOL, -1 ); }
;

const_declarations:
| const_declarations const_declaration
;

const_declaration : INTEGER IDENTIFIER ASSGNOP NUMBER_VAL ';' { install( $2 , "global", C_INT, -1); gen_code( LD_INT, $4 ); context_check( STORE, $2, function_name );  }
| CHAR IDENTIFIER ASSGNOP CHR_VAL ';' { install( $2, function_name, C_CHR, -1 ); gen_code_char ( LD_CHR, $4); context_check( STORE, $2, function_name );  }
| DOUBLE IDENTIFIER ASSGNOP NUMBERD_VAL ';' { install( $2, function_name, C_DOU, -1 ); gen_code_double( LD_DOU, $4 ); context_check( STORE, $2, function_name );  }
| STRING  IDENTIFIER ASSGNOP STR_VAL ';' { install( $2, function_name, C_STR, -1 ); gen_code_string ( LD_STR, $4); context_check( STORE, $2, function_name ); }
| BOOLEAN IDENTIFIER ASSGNOP NUMBERB_VAL ';' { install( $2, function_name, C_BOL, -1 );  gen_code_boolean (LD_BOL, $4); context_check( STORE, $2, function_name);}
;

func_decls : /* empty */
| func_decls func_decl
;

func_decl: FUNCTION IDENTIFIER 
{
	if (function_name != NULL) free(function_name);
	function_name = (char *) malloc (strlen($2)+1);
	function_name = $2;
	install( function_name , function_name, FUN, gen_label());
	install( function_name , "global", FUN, gen_label()); 
} '(' func_var_decls ')' 
var
	func_declarations
IN 
{
	gen_code( DATA, data_location() - 1 );
}
	commands
ENDFUNCTION ';'
{
	if (function_name != NULL) free(function_name);
	function_name = "main";
	gen_code(END_CAL, 0);
}
;

func_var_decls : /* empty */
| func_var_decls func_var_decl
;

func_var_decl : var_seq INTEGER IDENTIFIER { install( $3, function_name, INT, -1 ); gen_code( LD_INT, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| var_seq CHAR IDENTIFIER { install( $3, function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| var_seq DOUBLE IDENTIFIER { install( $3, function_name, DOU, -1 ); gen_code_double( LD_DOU, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| var_seq STRING IDENTIFIER { install( $3, function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| var_seq BOOLEAN IDENTIFIER { install( $3, function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
;

var_seq : /* empty */
| var_seq INTEGER IDENTIFIER ',' { install( $3, function_name, INT, -1 ); gen_code( LD_INT, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| var_seq CHAR IDENTIFIER ',' { install( $3, function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| var_seq DOUBLE IDENTIFIER ',' { install( $3, function_name, DOU, -1 ); gen_code_double( LD_DOU, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| var_seq STRING IDENTIFIER ',' { install( $3, function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| var_seq BOOLEAN IDENTIFIER ',' { install( $3, function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
;

func_declarations : /* empty */
| func_declarations func_declaration
;

func_declaration : 
INTEGER fun_id_seq_int IDENTIFIER ';' { install( $3 , function_name, INT, -1); gen_code( LD_INT, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| CHAR fun_id_seq_chr IDENTIFIER ';' { install( $3, function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| DOUBLE fun_id_seq_dou IDENTIFIER ';' { install( $3, function_name, DOU, -1 ); gen_code_double( LD_DOU, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| STRING fun_id_seq_str IDENTIFIER ';' { install( $3, function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| BOOLEAN fun_id_seq_bol IDENTIFIER ';' { install( $3, function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, $3, function_name ); context_check( LD_VAR, $3, function_name );}
| ARRAY_I IDENTIFIER '[' NUMBER_VAL ']' ';' {install( $2, function_name, ARR_I, $4 ); }
| ARRAY_D IDENTIFIER '[' NUMBER_VAL ']' ';' {install( $2, function_name, ARR_D, $4 ); }
| ARRAY_C IDENTIFIER '[' NUMBER_VAL ']' ';' {install( $2, function_name, ARR_C, $4 ); }
| ARRAY_B IDENTIFIER '[' NUMBER_VAL ']' ';' {install( $2, function_name, ARR_B, $4 ); }
;

fun_id_seq_int : /* empty */
| fun_id_seq_int IDENTIFIER ',' { install( $2, function_name, INT, -1 ); gen_code( LD_INT, 0 ); context_check( STORE, $2, function_name ); context_check( LD_VAR, $2, function_name );}
;

fun_id_seq_chr : /* empty */
| fun_id_seq_chr IDENTIFIER ',' { install( $2, function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, $2, function_name ); context_check( LD_VAR, $2, function_name );}
;

fun_id_seq_str : /* empty */
| fun_id_seq_str IDENTIFIER ',' { install( $2, function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, $2, function_name ); context_check( LD_VAR, $2, function_name );}
;

fun_id_seq_dou : /* empty */
| fun_id_seq_dou IDENTIFIER ',' { install( $2, function_name, DOU, -1 );  gen_code_double( LD_DOU, 0 ); context_check( STORE, $2, function_name ); context_check( LD_VAR, $2, function_name );}
;

fun_id_seq_bol : /* empty */
| fun_id_seq_bol IDENTIFIER ',' { install( $2, function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, $2, function_name ); context_check( LD_VAR, $2, function_name );}
;

commands : /* empty */
| commands command ';'
;

command : SKIP
| READ IDENTIFIER { context_check( READ_VAR, $2, function_name); }
| WRITE IDENTIFIER { context_check( WRITE_VAR, $2, function_name); }
| WRITE STR_VAL { gen_code_string ( WRITE_STR, $2 );}
| WRITE exp { gen_code ( WRITE_ALL, 0 );}
| WRITELINE { gen_code ( WRITE_LINE, 0); }
| RETURN exp { gen_code(END_CAL, 0); }
| IDENTIFIER ASSGNOP exp { context_check( STORE, $1, function_name ); }
| IDENTIFIER '[' index ']' ASSGNOP exp { context_check( INT_ARR_STORE, $1, function_name ); }
| IDENTIFIER {gen_code(BEGIN_CAL,0);} '(' values ')' { context_check(CAL, $1, "global");}
| IF exp { if_var = (struct lbs *) newlblrec(); if_var->for_jmp_false = reserve_loc(); }
THEN commands { if_var->for_goto = reserve_loc(); }
else_exp
ENDIF { back_patch( if_var->for_goto, GOTO, gen_label() ); }
| WHILE { $1 = (struct lbs *) newlblrec(); $1->for_goto = gen_label(); } exp { $1->for_jmp_false = reserve_loc(); }
DO
commands
ENDWHILE { gen_code( GOTO, $1->for_goto ); back_patch( $1->for_jmp_false, JMP_FALSE, gen_label() ); }
| FOR IDENTIFIER ASSGNOP exp 
{
	context_check( STORE, $2, function_name );
	$1 = (struct lbs *) newlblrec(); 
	$1->for_goto = gen_label();
	context_check( LD_VAR, $2, function_name ); 
	
}
TO exp
{
	gen_code( LTEQ, 0 );
	$1->for_jmp_false = reserve_loc();
}
DO 
commands
{
	context_check( LD_VAR, $2, function_name );
	gen_code( LD_INT, 1 );
	gen_code( ADD, 0 );
	context_check( STORE, $2, function_name);
}
ENDFOR { gen_code( GOTO, $1->for_goto ); back_patch( $1->for_jmp_false, JMP_FALSE, gen_label() ); }
;

else_exp: /* empty */ { back_patch( if_var->for_jmp_false,JMP_FALSE,gen_label() );} 
| ELSE { back_patch( if_var->for_jmp_false,JMP_FALSE,gen_label() ); } commands; 

arr_exp : 
	IDENTIFIER '[' index ']'  {context_check( ARR_PART, $1, function_name );} ;
	
index :	NUMBER_VAL { gen_code( LD_INT, $1 ); }
| IDENTIFIER { context_check( LD_VAR, $1, function_name ); }
;
	
exp : NUMBER_VAL { gen_code( LD_INT, $1 ); }
| NUMBERD_VAL { gen_code_double( LD_DOU, $1 ); }
| STR_VAL { gen_code_string ( LD_STR, $1); }
| CHR_VAL { gen_code_char ( LD_CHR, $1); }
| NUMBERB_VAL { gen_code_boolean (LD_BOL, $1); } 
| IDENTIFIER {gen_code(BEGIN_CAL,0);} '(' values ')' { context_check(CAL, $1, "global");}
| IDENTIFIER { context_check( LD_VAR, $1, function_name ); }
| exp '<' exp { gen_code( LT, 0 ); }
| exp '=' exp { gen_code( EQ, 0 ); }
| exp '!''=' exp { gen_code( NEQ, 0 ); }
| exp '>''=' exp { gen_code( GTEQ, 0 ); }
| exp '<''=' exp { gen_code( LTEQ, 0 ); }
| exp '>' exp { gen_code( GT, 0 ); }
| exp '+' exp { gen_code( ADD, 0 ); }
| exp '-' exp { gen_code( SUB, 0 ); }
| exp '*' exp { gen_code( MULT, 0 ); }
| exp '/' exp { gen_code( DIV, 0 ); }
| exp '&' exp { gen_code( AND, 0 ); }
| exp '|' exp { gen_code( OR, 0 ); }
| exp '%' exp { gen_code( MOD, 0 );}
| '!' exp { gen_code( NOT, 0 );}
| arr_exp
| '(' exp ')'
;

values : /* empty */
| exp value_seq
;

value_seq: /* empty */ 
| value_seq ',' exp
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
	//debug();
	if ( errors == 0 )
	{ 
		fetch_execute_cycle();
	}		
}
/**************************** End Grammar File ***************************/