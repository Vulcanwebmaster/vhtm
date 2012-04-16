
/* A Bison parser, made by GNU Bison 2.4.1.  */

/* Skeleton implementation for Bison's Yacc-like parsers in C
   
      Copyright (C) 1984, 1989, 1990, 2000, 2001, 2002, 2003, 2004, 2005, 2006
   Free Software Foundation, Inc.
   
   This program is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program.  If not, see <http://www.gnu.org/licenses/>.  */

/* As a special exception, you may create a larger work that contains
   part or all of the Bison parser skeleton and distribute that work
   under terms of your choice, so long as that work isn't itself a
   parser generator using the skeleton or a modified version thereof
   as a parser skeleton.  Alternatively, if you modify or redistribute
   the parser skeleton itself, you may (at your option) remove this
   special exception, which will cause the skeleton and the resulting
   Bison output files to be licensed under the GNU General Public
   License without this special exception.
   
   This special exception was added by the Free Software Foundation in
   version 2.2 of Bison.  */

/* C LALR(1) parser skeleton written by Richard Stallman, by
   simplifying the original so-called "semantic" parser.  */

/* All symbols defined below should begin with yy or YY, to avoid
   infringing on user name space.  This should be done even for local
   variables, as they might otherwise be expanded by user macros.
   There are some unavoidable exceptions within include files to
   define necessary library symbols; they are noted "INFRINGES ON
   USER NAME SPACE" below.  */

/* Identify Bison output.  */
#define YYBISON 1

/* Bison version.  */
#define YYBISON_VERSION "2.4.1"

/* Skeleton name.  */
#define YYSKELETON_NAME "yacc.c"

/* Pure parsers.  */
#define YYPURE 0

/* Push parsers.  */
#define YYPUSH 0

/* Pull parsers.  */
#define YYPULL 1

/* Using locations.  */
#define YYLSP_NEEDED 0



/* Copy the first part of user declarations.  */

/* Line 189 of yacc.c  */
#line 1 "parser.y"
/*************************************************************************
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
struct lbs * switch_var[20];
int switch_count = 0;
char * store_identifier;
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
		if (identifier->type == ARR_D && operation == READ_INT_ARR)  
			gen_code_variable( READ_DOU_ARR, identifier);
		else
		if (identifier->type == ARR_B && operation == READ_INT_ARR)  
			gen_code_variable( READ_BOL_ARR, identifier);
		else
		if (identifier->type == ARR_C && operation == READ_INT_ARR)  
			gen_code_variable( READ_CHR_ARR, identifier);
		else
			gen_code_variable( operation, identifier);
	}
}
/*=========================================================================
SEMANTIC RECORDS
=========================================================================*/


/* Line 189 of yacc.c  */
#line 170 "parser.tab.c"

/* Enabling traces.  */
#ifndef YYDEBUG
# define YYDEBUG 0
#endif

/* Enabling verbose error messages.  */
#ifdef YYERROR_VERBOSE
# undef YYERROR_VERBOSE
# define YYERROR_VERBOSE 1
#else
# define YYERROR_VERBOSE 0
#endif

/* Enabling the token table.  */
#ifndef YYTOKEN_TABLE
# define YYTOKEN_TABLE 0
#endif


/* Tokens.  */
#ifndef YYTOKENTYPE
# define YYTOKENTYPE
   /* Put the tokens into the symbol table, so that GDB and other debuggers
      know about them.  */
   enum yytokentype {
     NUMBER_VAL = 258,
     NUMBERD_VAL = 259,
     STR_VAL = 260,
     CHR_VAL = 261,
     NUMBERB_VAL = 262,
     ARRAY_VAL = 263,
     IDENTIFIER = 264,
     IF = 265,
     WHILE = 266,
     FOR = 267,
     THEN = 268,
     ELSE = 269,
     DO = 270,
     END = 271,
     TO = 272,
     ENDIF = 273,
     ENDFOR = 274,
     ENDWHILE = 275,
     ENDFUNCTION = 276,
     ENDSWITCH = 277,
     WAIT = 278,
     INTEGER = 279,
     CONST = 280,
     LET = 281,
     IN = 282,
     STRING = 283,
     DOUBLE = 284,
     CHAR = 285,
     FUNCTION = 286,
     BOOLEAN = 287,
     CASE = 288,
     SWITCH = 289,
     BREAK = 290,
     DEFAULT = 291,
     READ = 292,
     WRITE = 293,
     WRITELINE = 294,
     ARRAY_I = 295,
     ARRAY_C = 296,
     ARRAY_B = 297,
     ARRAY_D = 298,
     ASSGNOP = 299,
     RETURN = 300
   };
#endif



#if ! defined YYSTYPE && ! defined YYSTYPE_IS_DECLARED
typedef union 
/* Line 214 of yacc.c  */
#line 96 "parser.y"
semrec
{

/* Line 214 of yacc.c  */
#line 97 "parser.y"

	int intval; /* Integer values */
	double douval;
	char *strval;
	char *bolval;
	char chrval;
	char *id; /* Identifiers */
	struct lbs *lbls; /* For backpatching */



/* Line 214 of yacc.c  */
#line 266 "parser.tab.c"
} YYSTYPE;
# define YYSTYPE_IS_TRIVIAL 1
# define yystype YYSTYPE /* obsolescent; will be withdrawn */
# define YYSTYPE_IS_DECLARED 1
#endif


/* Copy the second part of user declarations.  */


/* Line 264 of yacc.c  */
#line 278 "parser.tab.c"

#ifdef short
# undef short
#endif

#ifdef YYTYPE_UINT8
typedef YYTYPE_UINT8 yytype_uint8;
#else
typedef unsigned char yytype_uint8;
#endif

#ifdef YYTYPE_INT8
typedef YYTYPE_INT8 yytype_int8;
#elif (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
typedef signed char yytype_int8;
#else
typedef short int yytype_int8;
#endif

#ifdef YYTYPE_UINT16
typedef YYTYPE_UINT16 yytype_uint16;
#else
typedef unsigned short int yytype_uint16;
#endif

#ifdef YYTYPE_INT16
typedef YYTYPE_INT16 yytype_int16;
#else
typedef short int yytype_int16;
#endif

#ifndef YYSIZE_T
# ifdef __SIZE_TYPE__
#  define YYSIZE_T __SIZE_TYPE__
# elif defined size_t
#  define YYSIZE_T size_t
# elif ! defined YYSIZE_T && (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
#  include <stddef.h> /* INFRINGES ON USER NAME SPACE */
#  define YYSIZE_T size_t
# else
#  define YYSIZE_T unsigned int
# endif
#endif

#define YYSIZE_MAXIMUM ((YYSIZE_T) -1)

#ifndef YY_
# if YYENABLE_NLS
#  if ENABLE_NLS
#   include <libintl.h> /* INFRINGES ON USER NAME SPACE */
#   define YY_(msgid) dgettext ("bison-runtime", msgid)
#  endif
# endif
# ifndef YY_
#  define YY_(msgid) msgid
# endif
#endif

/* Suppress unused-variable warnings by "using" E.  */
#if ! defined lint || defined __GNUC__
# define YYUSE(e) ((void) (e))
#else
# define YYUSE(e) /* empty */
#endif

/* Identity function, used to suppress warnings about constant conditions.  */
#ifndef lint
# define YYID(n) (n)
#else
#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
static int
YYID (int yyi)
#else
static int
YYID (yyi)
    int yyi;
#endif
{
  return yyi;
}
#endif

#if ! defined yyoverflow || YYERROR_VERBOSE

/* The parser invokes alloca or malloc; define the necessary symbols.  */

# ifdef YYSTACK_USE_ALLOCA
#  if YYSTACK_USE_ALLOCA
#   ifdef __GNUC__
#    define YYSTACK_ALLOC __builtin_alloca
#   elif defined __BUILTIN_VA_ARG_INCR
#    include <alloca.h> /* INFRINGES ON USER NAME SPACE */
#   elif defined _AIX
#    define YYSTACK_ALLOC __alloca
#   elif defined _MSC_VER
#    include <malloc.h> /* INFRINGES ON USER NAME SPACE */
#    define alloca _alloca
#   else
#    define YYSTACK_ALLOC alloca
#    if ! defined _ALLOCA_H && ! defined _STDLIB_H && (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
#     include <stdlib.h> /* INFRINGES ON USER NAME SPACE */
#     ifndef _STDLIB_H
#      define _STDLIB_H 1
#     endif
#    endif
#   endif
#  endif
# endif

# ifdef YYSTACK_ALLOC
   /* Pacify GCC's `empty if-body' warning.  */
#  define YYSTACK_FREE(Ptr) do { /* empty */; } while (YYID (0))
#  ifndef YYSTACK_ALLOC_MAXIMUM
    /* The OS might guarantee only one guard page at the bottom of the stack,
       and a page size can be as small as 4096 bytes.  So we cannot safely
       invoke alloca (N) if N exceeds 4096.  Use a slightly smaller number
       to allow for a few compiler-allocated temporary stack slots.  */
#   define YYSTACK_ALLOC_MAXIMUM 4032 /* reasonable circa 2006 */
#  endif
# else
#  define YYSTACK_ALLOC YYMALLOC
#  define YYSTACK_FREE YYFREE
#  ifndef YYSTACK_ALLOC_MAXIMUM
#   define YYSTACK_ALLOC_MAXIMUM YYSIZE_MAXIMUM
#  endif
#  if (defined __cplusplus && ! defined _STDLIB_H \
       && ! ((defined YYMALLOC || defined malloc) \
	     && (defined YYFREE || defined free)))
#   include <stdlib.h> /* INFRINGES ON USER NAME SPACE */
#   ifndef _STDLIB_H
#    define _STDLIB_H 1
#   endif
#  endif
#  ifndef YYMALLOC
#   define YYMALLOC malloc
#   if ! defined malloc && ! defined _STDLIB_H && (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
void *malloc (YYSIZE_T); /* INFRINGES ON USER NAME SPACE */
#   endif
#  endif
#  ifndef YYFREE
#   define YYFREE free
#   if ! defined free && ! defined _STDLIB_H && (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
void free (void *); /* INFRINGES ON USER NAME SPACE */
#   endif
#  endif
# endif
#endif /* ! defined yyoverflow || YYERROR_VERBOSE */


#if (! defined yyoverflow \
     && (! defined __cplusplus \
	 || (defined YYSTYPE_IS_TRIVIAL && YYSTYPE_IS_TRIVIAL)))

/* A type that is properly aligned for any stack member.  */
union yyalloc
{
  yytype_int16 yyss_alloc;
  YYSTYPE yyvs_alloc;
};

/* The size of the maximum gap between one aligned stack and the next.  */
# define YYSTACK_GAP_MAXIMUM (sizeof (union yyalloc) - 1)

/* The size of an array large to enough to hold all stacks, each with
   N elements.  */
# define YYSTACK_BYTES(N) \
     ((N) * (sizeof (yytype_int16) + sizeof (YYSTYPE)) \
      + YYSTACK_GAP_MAXIMUM)

/* Copy COUNT objects from FROM to TO.  The source and destination do
   not overlap.  */
# ifndef YYCOPY
#  if defined __GNUC__ && 1 < __GNUC__
#   define YYCOPY(To, From, Count) \
      __builtin_memcpy (To, From, (Count) * sizeof (*(From)))
#  else
#   define YYCOPY(To, From, Count)		\
      do					\
	{					\
	  YYSIZE_T yyi;				\
	  for (yyi = 0; yyi < (Count); yyi++)	\
	    (To)[yyi] = (From)[yyi];		\
	}					\
      while (YYID (0))
#  endif
# endif

/* Relocate STACK from its old location to the new one.  The
   local variables YYSIZE and YYSTACKSIZE give the old and new number of
   elements in the stack, and YYPTR gives the new location of the
   stack.  Advance YYPTR to a properly aligned location for the next
   stack.  */
# define YYSTACK_RELOCATE(Stack_alloc, Stack)				\
    do									\
      {									\
	YYSIZE_T yynewbytes;						\
	YYCOPY (&yyptr->Stack_alloc, Stack, yysize);			\
	Stack = &yyptr->Stack_alloc;					\
	yynewbytes = yystacksize * sizeof (*Stack) + YYSTACK_GAP_MAXIMUM; \
	yyptr += yynewbytes / sizeof (*yyptr);				\
      }									\
    while (YYID (0))

#endif

/* YYFINAL -- State number of the termination state.  */
#define YYFINAL  4
/* YYLAST -- Last index in YYTABLE.  */
#define YYLAST   369

/* YYNTOKENS -- Number of terminals.  */
#define YYNTOKENS  65
/* YYNNTS -- Number of nonterminals.  */
#define YYNNTS  62
/* YYNRULES -- Number of rules.  */
#define YYNRULES  153
/* YYNRULES -- Number of states.  */
#define YYNSTATES  326

/* YYTRANSLATE(YYLEX) -- Bison symbol number corresponding to YYLEX.  */
#define YYUNDEFTOK  2
#define YYMAXUTOK   300

#define YYTRANSLATE(YYX)						\
  ((unsigned int) (YYX) <= YYMAXUTOK ? yytranslate[YYX] : YYUNDEFTOK)

/* YYTRANSLATE[YYLEX] -- Bison symbol number corresponding to YYLEX.  */
static const yytype_uint8 yytranslate[] =
{
       0,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,    60,     2,     2,     2,    64,    62,     2,
      55,    56,    48,    47,    54,    46,    50,    49,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,    57,    51,
      58,    59,    61,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,    52,     2,    53,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,    63,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     1,     2,     3,     4,
       5,     6,     7,     8,     9,    10,    11,    12,    13,    14,
      15,    16,    17,    18,    19,    20,    21,    22,    23,    24,
      25,    26,    27,    28,    29,    30,    31,    32,    33,    34,
      35,    36,    37,    38,    39,    40,    41,    42,    43,    44,
      45
};

#if YYDEBUG
/* YYPRHS[YYN] -- Index of the first RHS symbol of rule number YYN in
   YYRHS.  */
static const yytype_uint16 yyprhs[] =
{
       0,     0,     3,     4,     5,     6,    19,    20,    22,    23,
      25,    26,    29,    34,    39,    44,    49,    54,    61,    68,
      75,    82,    83,    87,    88,    92,    93,    97,    98,   102,
     103,   107,   108,   111,   117,   123,   129,   135,   141,   142,
     145,   146,   147,   161,   162,   165,   169,   173,   177,   181,
     185,   186,   191,   196,   201,   206,   211,   212,   215,   220,
     225,   230,   235,   240,   247,   254,   261,   268,   269,   273,
     274,   278,   279,   283,   284,   288,   289,   293,   294,   298,
     299,   303,   304,   311,   312,   317,   319,   320,   328,   331,
     334,   337,   339,   342,   346,   353,   354,   360,   361,   362,
     371,   372,   373,   381,   382,   383,   384,   397,   398,   399,
     400,   417,   418,   419,   420,   430,   431,   434,   435,   436,
     443,   444,   445,   449,   454,   456,   458,   460,   462,   464,
     466,   468,   469,   475,   477,   481,   485,   490,   495,   500,
     504,   508,   512,   516,   520,   524,   528,   532,   535,   537,
     541,   542,   545,   546
};

/* YYRHS -- A `-1'-separated list of the rules' RHS.  */
static const yytype_int8 yyrhs[] =
{
      66,     0,    -1,    -1,    -1,    -1,    71,    67,    72,    70,
      79,    68,    81,    27,    69,    95,    16,    50,    -1,    -1,
      25,    -1,    -1,    26,    -1,    -1,    72,    73,    -1,    24,
      74,     9,    51,    -1,    30,    75,     9,    51,    -1,    29,
      77,     9,    51,    -1,    28,    76,     9,    51,    -1,    32,
      78,     9,    51,    -1,    40,     9,    52,     3,    53,    51,
      -1,    43,     9,    52,     3,    53,    51,    -1,    41,     9,
      52,     3,    53,    51,    -1,    42,     9,    52,     3,    53,
      51,    -1,    -1,    74,     9,    54,    -1,    -1,    75,     9,
      54,    -1,    -1,    76,     9,    54,    -1,    -1,    77,     9,
      54,    -1,    -1,    78,     9,    54,    -1,    -1,    79,    80,
      -1,    24,     9,    44,     3,    51,    -1,    30,     9,    44,
       6,    51,    -1,    29,     9,    44,     4,    51,    -1,    28,
       9,    44,     5,    51,    -1,    32,     9,    44,     7,    51,
      -1,    -1,    81,    82,    -1,    -1,    -1,    31,     9,    83,
      55,    85,    56,    71,    88,    27,    84,    95,    21,    51,
      -1,    -1,    85,    86,    -1,    87,    24,     9,    -1,    87,
      30,     9,    -1,    87,    29,     9,    -1,    87,    28,     9,
      -1,    87,    32,     9,    -1,    -1,    87,    24,     9,    54,
      -1,    87,    30,     9,    54,    -1,    87,    29,     9,    54,
      -1,    87,    28,     9,    54,    -1,    87,    32,     9,    54,
      -1,    -1,    88,    89,    -1,    24,    90,     9,    51,    -1,
      30,    91,     9,    51,    -1,    29,    93,     9,    51,    -1,
      28,    92,     9,    51,    -1,    32,    94,     9,    51,    -1,
      40,     9,    52,     3,    53,    51,    -1,    43,     9,    52,
       3,    53,    51,    -1,    41,     9,    52,     3,    53,    51,
      -1,    42,     9,    52,     3,    53,    51,    -1,    -1,    90,
       9,    54,    -1,    -1,    91,     9,    54,    -1,    -1,    92,
       9,    54,    -1,    -1,    93,     9,    54,    -1,    -1,    94,
       9,    54,    -1,    -1,    95,    98,    51,    -1,    -1,    96,
      54,     9,    -1,    -1,    97,    54,     9,    52,   122,    53,
      -1,    -1,    37,     9,    99,    96,    -1,    23,    -1,    -1,
      37,     9,    52,   122,    53,   100,    97,    -1,    38,     9,
      -1,    38,     5,    -1,    38,   123,    -1,    39,    -1,    45,
     123,    -1,     9,    44,   123,    -1,     9,    52,   122,    53,
      44,   123,    -1,    -1,     9,   101,    55,   125,    56,    -1,
      -1,    -1,    10,   123,   102,    13,    95,   103,   119,    18,
      -1,    -1,    -1,    11,   104,   123,   105,    15,    95,    20,
      -1,    -1,    -1,    -1,    12,     9,    44,   123,   106,    17,
     123,   107,    15,    95,   108,    19,    -1,    -1,    -1,    -1,
      34,    55,     9,    56,    33,     3,    57,   109,    95,   110,
      35,    51,   116,   117,   111,    22,    -1,    -1,    -1,    -1,
      33,     3,   113,    57,   114,    95,   115,    35,    51,    -1,
      -1,   116,   112,    -1,    -1,    -1,    36,   118,    57,    95,
      35,    51,    -1,    -1,    -1,    14,   120,    95,    -1,     9,
      52,   122,    53,    -1,     3,    -1,     9,    -1,     3,    -1,
       4,    -1,     5,    -1,     6,    -1,     7,    -1,    -1,     9,
     124,    55,   125,    56,    -1,     9,    -1,   123,    58,   123,
      -1,   123,    59,   123,    -1,   123,    60,    59,   123,    -1,
     123,    61,    59,   123,    -1,   123,    58,    59,   123,    -1,
     123,    61,   123,    -1,   123,    47,   123,    -1,   123,    46,
     123,    -1,   123,    48,   123,    -1,   123,    49,   123,    -1,
     123,    62,   123,    -1,   123,    63,   123,    -1,   123,    64,
     123,    -1,    60,   123,    -1,   121,    -1,    55,   123,    56,
      -1,    -1,   123,   126,    -1,    -1,   126,    54,   123,    -1
};

/* YYRLINE[YYN] -- source line where rule number YYN was defined.  */
static const yytype_uint16 yyrline[] =
{
       0,   135,   135,   140,   143,   134,   157,   158,   161,   162,
     165,   166,   169,   170,   171,   172,   173,   174,   175,   176,
     177,   180,   181,   184,   185,   188,   189,   192,   193,   196,
     197,   200,   201,   204,   205,   206,   207,   208,   211,   212,
     216,   226,   215,   238,   239,   242,   243,   244,   245,   246,
     249,   250,   251,   252,   253,   254,   257,   258,   262,   263,
     264,   265,   266,   267,   268,   269,   270,   273,   274,   277,
     278,   281,   282,   285,   286,   289,   290,   293,   294,   297,
     298,   301,   302,   305,   305,   306,   307,   307,   308,   309,
     310,   311,   312,   313,   314,   315,   315,   316,   317,   316,
     320,   320,   320,   325,   332,   338,   324,   346,   356,   360,
     345,   370,   370,   377,   370,   380,   381,   384,   385,   385,
     388,   389,   389,   392,   394,   395,   398,   399,   400,   401,
     402,   403,   403,   404,   405,   406,   407,   408,   409,   410,
     411,   412,   413,   414,   415,   416,   417,   418,   419,   420,
     423,   424,   427,   428
};
#endif

#if YYDEBUG || YYERROR_VERBOSE || YYTOKEN_TABLE
/* YYTNAME[SYMBOL-NUM] -- String name of the symbol SYMBOL-NUM.
   First, the terminals, then, starting at YYNTOKENS, nonterminals.  */
static const char *const yytname[] =
{
  "$end", "error", "$undefined", "NUMBER_VAL", "NUMBERD_VAL", "STR_VAL",
  "CHR_VAL", "NUMBERB_VAL", "ARRAY_VAL", "IDENTIFIER", "IF", "WHILE",
  "FOR", "THEN", "ELSE", "DO", "END", "TO", "ENDIF", "ENDFOR", "ENDWHILE",
  "ENDFUNCTION", "ENDSWITCH", "WAIT", "INTEGER", "CONST", "LET", "IN",
  "STRING", "DOUBLE", "CHAR", "FUNCTION", "BOOLEAN", "CASE", "SWITCH",
  "BREAK", "DEFAULT", "READ", "WRITE", "WRITELINE", "ARRAY_I", "ARRAY_C",
  "ARRAY_B", "ARRAY_D", "ASSGNOP", "RETURN", "'-'", "'+'", "'*'", "'/'",
  "'.'", "';'", "'['", "']'", "','", "'('", "')'", "':'", "'<'", "'='",
  "'!'", "'>'", "'&'", "'|'", "'%'", "$accept", "program", "$@1", "$@2",
  "$@3", "constant", "var", "declarations", "declaration", "id_seq_int",
  "id_seq_chr", "id_seq_str", "id_seq_dou", "id_seq_bol",
  "const_declarations", "const_declaration", "func_decls", "func_decl",
  "$@4", "$@5", "func_var_decls", "func_var_decl", "var_seq",
  "func_declarations", "func_declaration", "fun_id_seq_int",
  "fun_id_seq_chr", "fun_id_seq_str", "fun_id_seq_dou", "fun_id_seq_bol",
  "commands", "read_exp", "read_array_exp", "command", "$@6", "$@7", "$@8",
  "$@9", "$@10", "$@11", "$@12", "$@13", "$@14", "$@15", "$@16", "$@17",
  "$@18", "switch_exp", "$@19", "$@20", "$@21", "switch_exps",
  "default_exp", "$@22", "else_exp", "$@23", "arr_exp", "index", "exp",
  "$@24", "values", "value_seq", 0
};
#endif

# ifdef YYPRINT
/* YYTOKNUM[YYLEX-NUM] -- Internal token number corresponding to
   token YYLEX-NUM.  */
static const yytype_uint16 yytoknum[] =
{
       0,   256,   257,   258,   259,   260,   261,   262,   263,   264,
     265,   266,   267,   268,   269,   270,   271,   272,   273,   274,
     275,   276,   277,   278,   279,   280,   281,   282,   283,   284,
     285,   286,   287,   288,   289,   290,   291,   292,   293,   294,
     295,   296,   297,   298,   299,   300,    45,    43,    42,    47,
      46,    59,    91,    93,    44,    40,    41,    58,    60,    61,
      33,    62,    38,   124,    37
};
# endif

/* YYR1[YYN] -- Symbol number of symbol that rule YYN derives.  */
static const yytype_uint8 yyr1[] =
{
       0,    65,    67,    68,    69,    66,    70,    70,    71,    71,
      72,    72,    73,    73,    73,    73,    73,    73,    73,    73,
      73,    74,    74,    75,    75,    76,    76,    77,    77,    78,
      78,    79,    79,    80,    80,    80,    80,    80,    81,    81,
      83,    84,    82,    85,    85,    86,    86,    86,    86,    86,
      87,    87,    87,    87,    87,    87,    88,    88,    89,    89,
      89,    89,    89,    89,    89,    89,    89,    90,    90,    91,
      91,    92,    92,    93,    93,    94,    94,    95,    95,    96,
      96,    97,    97,    99,    98,    98,   100,    98,    98,    98,
      98,    98,    98,    98,    98,   101,    98,   102,   103,    98,
     104,   105,    98,   106,   107,   108,    98,   109,   110,   111,
      98,   113,   114,   115,   112,   116,   116,   117,   118,   117,
     119,   120,   119,   121,   122,   122,   123,   123,   123,   123,
     123,   124,   123,   123,   123,   123,   123,   123,   123,   123,
     123,   123,   123,   123,   123,   123,   123,   123,   123,   123,
     125,   125,   126,   126
};

/* YYR2[YYN] -- Number of symbols composing right hand side of rule YYN.  */
static const yytype_uint8 yyr2[] =
{
       0,     2,     0,     0,     0,    12,     0,     1,     0,     1,
       0,     2,     4,     4,     4,     4,     4,     6,     6,     6,
       6,     0,     3,     0,     3,     0,     3,     0,     3,     0,
       3,     0,     2,     5,     5,     5,     5,     5,     0,     2,
       0,     0,    13,     0,     2,     3,     3,     3,     3,     3,
       0,     4,     4,     4,     4,     4,     0,     2,     4,     4,
       4,     4,     4,     6,     6,     6,     6,     0,     3,     0,
       3,     0,     3,     0,     3,     0,     3,     0,     3,     0,
       3,     0,     6,     0,     4,     1,     0,     7,     2,     2,
       2,     1,     2,     3,     6,     0,     5,     0,     0,     8,
       0,     0,     7,     0,     0,     0,    12,     0,     0,     0,
      16,     0,     0,     0,     9,     0,     2,     0,     0,     6,
       0,     0,     3,     4,     1,     1,     1,     1,     1,     1,
       1,     0,     5,     1,     3,     3,     4,     4,     4,     3,
       3,     3,     3,     3,     3,     3,     3,     2,     1,     3,
       0,     2,     0,     3
};

/* YYDEFACT[STATE-NAME] -- Default rule to reduce with in state
   STATE-NUM when YYTABLE doesn't specify something else to do.  Zero
   means the default is an error.  */
static const yytype_uint8 yydefact[] =
{
       8,     9,     0,     2,     1,    10,     6,    21,     7,    25,
      27,    23,    29,     0,     0,     0,     0,    31,    11,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     3,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,    38,    32,    12,    22,    15,    26,    14,
      28,    13,    24,    16,    30,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,     0,     4,     0,    39,    17,    19,    20,
      18,     0,     0,     0,     0,     0,    77,    40,    33,    36,
      35,    34,    37,     0,     0,    95,     0,   100,     0,     0,
      85,     0,     0,     0,    91,     0,     0,    43,     0,     0,
       0,   126,   127,   128,   129,   130,   133,     0,     0,   148,
      97,     0,     0,     5,     0,    83,   128,   133,    90,    92,
      78,    50,    93,   124,   125,     0,   150,     0,     0,     0,
     147,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,     0,     0,   101,     0,     0,     0,    79,     8,    44,
       0,     0,   152,     0,     0,   150,   149,   141,   140,   142,
     143,     0,   134,   135,     0,     0,   139,   144,   145,   146,
      77,     0,   103,     0,     0,    84,    56,     0,     0,     0,
       0,     0,     0,   151,    96,   123,     0,   138,   136,   137,
      98,    77,     0,     0,    86,     0,     0,    45,    48,    47,
      46,    49,    94,     0,   132,   120,     0,     0,     0,    81,
      80,    67,    41,    71,    73,    69,    75,     0,     0,     0,
       0,    57,    51,    54,    53,    52,    55,   153,   121,     0,
     102,   104,   107,    87,     0,    77,     0,     0,     0,     0,
       0,     0,     0,     0,    77,    99,     0,    77,     0,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,   122,
      77,   108,     0,    58,    68,     0,    61,    72,    60,    74,
      59,    70,    62,    76,     0,     0,     0,     0,   105,     0,
       0,    42,     0,     0,     0,     0,     0,     0,     0,    63,
      65,    66,    64,   106,   115,    82,   117,     0,   118,   116,
     109,   111,     0,     0,     0,    77,   110,   112,     0,    77,
       0,   113,   119,     0,     0,   114
};

/* YYDEFGOTO[NTERM-NUM].  */
static const yytype_int16 yydefgoto[] =
{
      -1,     2,     5,    43,    86,    17,     3,     6,    18,    19,
      22,    20,    21,    23,    28,    44,    64,    76,    94,   245,
     131,   159,   160,   206,   231,   244,   248,   246,   247,   249,
      93,   185,   243,   106,   157,   219,   110,   152,   215,   121,
     181,   202,   256,   296,   257,   289,   313,   309,   314,   319,
     323,   306,   310,   312,   239,   254,   119,   135,   162,   138,
     163,   193
};

/* YYPACT[STATE-NUM] -- Index in YYTABLE of the portion describing
   STATE-NUM.  */
#define YYPACT_NINF -180
static const yytype_int16 yypact[] =
{
     -20,  -180,     8,  -180,  -180,  -180,   209,  -180,  -180,  -180,
    -180,  -180,  -180,     6,    12,    19,    26,  -180,  -180,    35,
      37,    44,    49,    50,    31,    32,    38,    53,   -12,    -9,
      22,    41,    45,    46,    76,   104,   106,   113,   108,   118,
     119,   141,   142,  -180,  -180,  -180,  -180,  -180,  -180,  -180,
    -180,  -180,  -180,  -180,  -180,    69,   101,   102,   103,   114,
     115,   125,   126,   127,   -24,   121,   122,   128,   133,   164,
     169,   172,   179,   180,  -180,   177,  -180,  -180,  -180,  -180,
    -180,   138,   139,   144,   145,   146,  -180,  -180,  -180,  -180,
    -180,  -180,  -180,    92,   143,   -39,    58,  -180,   195,   157,
    -180,   156,   203,    65,  -180,    58,   162,  -180,    58,     1,
     160,  -180,  -180,  -180,  -180,  -180,    33,    58,    58,  -180,
     233,    58,   134,  -180,   215,   174,   176,   -26,   233,   233,
    -180,   175,   233,  -180,  -180,   182,    58,     1,   187,   214,
     233,    58,    58,    58,    58,    27,    58,   173,    34,    58,
      58,    58,   234,   233,    58,   197,     1,  -180,   -20,  -180,
      82,   210,   233,   199,   211,    58,  -180,   240,   240,   159,
     159,    58,   233,   233,    58,    58,   233,   233,   233,   233,
    -180,   250,   233,   235,   213,   217,  -180,   258,   260,   274,
     275,   276,    58,   232,  -180,  -180,   231,   233,   233,   233,
     191,  -180,   273,   302,  -180,   297,   216,   253,   254,   255,
     256,   257,   233,    58,  -180,   298,   123,    58,   259,  -180,
    -180,  -180,  -180,  -180,  -180,  -180,  -180,   304,   305,   306,
     308,  -180,  -180,  -180,  -180,  -180,  -180,   233,  -180,   300,
    -180,   233,  -180,   265,   311,  -180,   312,   313,   314,   315,
     277,   278,   279,   280,  -180,  -180,   310,  -180,   317,    70,
     154,    87,    88,    93,    94,   324,   325,   330,   331,   191,
    -180,   191,   283,  -180,  -180,   285,  -180,  -180,  -180,  -180,
    -180,  -180,  -180,  -180,   284,   286,   287,   288,   191,   303,
       1,  -180,   291,   292,   293,   294,   327,   296,   295,  -180,
    -180,  -180,  -180,  -180,  -180,  -180,   116,   346,  -180,  -180,
    -180,  -180,   299,   328,   301,  -180,  -180,  -180,   171,  -180,
     309,   191,  -180,   316,   318,  -180
};

/* YYPGOTO[NTERM-NUM].  */
static const yytype_int16 yypgoto[] =
{
    -180,  -180,  -180,  -180,  -180,  -180,   194,  -180,  -180,  -180,
    -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,
    -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,
    -179,  -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,
    -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,  -180,
    -180,  -180,  -180,  -180,  -180,  -180,  -180,  -137,   -94,  -180,
     188,  -180
};

/* YYTABLE[YYPACT[STATE-NUM]].  What to do in state STATE-NUM.  If
   positive, shift that token.  If negative, reduce the rule which
   number is the opposite.  If zero, do what YYDEFACT says.
   If YYTABLE_NINF, syntax error.  */
#define YYTABLE_NINF -132
static const yytype_int16 yytable[] =
{
     164,   200,   120,    74,   133,   108,     1,    75,     4,   128,
     134,   129,    38,   109,   132,    24,    39,    40,    41,   184,
      42,    25,   216,   139,   140,   -88,   137,   153,    26,  -131,
     111,   112,   113,   114,   115,    27,   116,   111,   112,   113,
     114,   115,    45,   116,    29,    46,    30,   167,   168,   169,
     170,   172,   173,    31,   176,   177,   178,   179,    32,    33,
     182,   111,   112,   113,   114,   115,   260,   116,   111,   112,
     126,   114,   115,    47,   127,   269,    48,   197,   271,    55,
     198,   199,   117,    34,    35,   137,   171,   118,  -131,   117,
      36,   288,    49,   175,   118,    50,    51,    53,   212,    52,
      54,    95,    96,    97,    98,    37,   187,    56,    99,    57,
     188,   189,   190,   117,   191,   100,    58,    59,   118,   237,
     117,   273,    65,   241,   274,   118,   101,    60,    61,   102,
     103,   104,    95,    96,    97,    98,   318,   105,   276,   278,
     321,   277,   279,   240,   280,   282,   100,   281,   283,   307,
      62,    63,   308,   298,    66,    67,    68,   101,    69,    70,
     102,   103,   104,    95,    96,    97,    98,    81,   105,    71,
      72,    73,    77,    78,    82,   275,    83,   100,   154,    79,
      95,    96,    97,    98,    80,    84,    87,    85,   101,    88,
      89,   102,   103,   104,   100,    90,    91,    92,   107,   105,
      95,    96,    97,    98,   122,   101,   320,   123,   102,   103,
     104,   124,   125,   130,   100,   136,   105,   145,   146,   147,
     148,   149,   150,   151,   155,   101,   156,   -89,   102,   103,
     104,   158,   174,     7,     8,   161,   105,     9,    10,    11,
     221,    12,   165,   222,   223,   224,   225,   180,   226,    13,
      14,    15,    16,   183,   192,   194,   227,   228,   229,   230,
     141,   142,   143,   144,   195,   201,   204,   207,   203,   208,
     166,   205,   145,   146,   147,   148,   149,   150,   151,   141,
     142,   143,   144,   209,   210,   211,   213,   214,   143,   144,
     217,   145,   146,   147,   148,   149,   150,   151,   145,   146,
     147,   148,   149,   150,   151,   218,   220,   232,   233,   234,
     235,   236,   238,   250,   251,   252,   242,   253,   255,   258,
     259,   261,   262,   263,   264,   270,   272,   284,   285,   265,
     266,   267,   268,   286,   287,   290,   291,   292,   297,   293,
     294,   295,   299,   300,   301,   302,   303,   304,   305,   311,
     316,   324,   186,   196,     0,     0,   315,     0,   317,     0,
     322,     0,     0,     0,     0,     0,     0,     0,     0,   325
};

static const yytype_int16 yycheck[] =
{
     137,   180,    96,    27,     3,    44,    26,    31,     0,   103,
       9,   105,    24,    52,   108,     9,    28,    29,    30,   156,
      32,     9,   201,   117,   118,    51,    52,   121,     9,    55,
       3,     4,     5,     6,     7,     9,     9,     3,     4,     5,
       6,     7,    51,     9,     9,    54,     9,   141,   142,   143,
     144,   145,   146,     9,   148,   149,   150,   151,     9,     9,
     154,     3,     4,     5,     6,     7,   245,     9,     3,     4,
       5,     6,     7,    51,     9,   254,    54,   171,   257,     3,
     174,   175,    55,    52,    52,    52,    59,    60,    55,    55,
      52,   270,    51,    59,    60,    54,    51,    51,   192,    54,
      54,     9,    10,    11,    12,    52,    24,     3,    16,     3,
      28,    29,    30,    55,    32,    23,     3,     9,    60,   213,
      55,    51,    53,   217,    54,    60,    34,     9,     9,    37,
      38,    39,     9,    10,    11,    12,   315,    45,    51,    51,
     319,    54,    54,    20,    51,    51,    23,    54,    54,    33,
       9,     9,    36,   290,    53,    53,    53,    34,    44,    44,
      37,    38,    39,     9,    10,    11,    12,     3,    45,    44,
      44,    44,    51,    51,     5,    21,     4,    23,    44,    51,
       9,    10,    11,    12,    51,     6,     9,     7,    34,    51,
      51,    37,    38,    39,    23,    51,    51,    51,    55,    45,
       9,    10,    11,    12,     9,    34,    35,    50,    37,    38,
      39,    55,     9,    51,    23,    55,    45,    58,    59,    60,
      61,    62,    63,    64,     9,    34,    52,    51,    37,    38,
      39,    56,    59,    24,    25,    53,    45,    28,    29,    30,
      24,    32,    55,    27,    28,    29,    30,    13,    32,    40,
      41,    42,    43,    56,    44,    56,    40,    41,    42,    43,
      46,    47,    48,    49,    53,    15,    53,     9,    33,     9,
      56,    54,    58,    59,    60,    61,    62,    63,    64,    46,
      47,    48,    49,     9,     9,     9,    54,    56,    48,    49,
      17,    58,    59,    60,    61,    62,    63,    64,    58,    59,
      60,    61,    62,    63,    64,     3,     9,    54,    54,    54,
      54,    54,    14,     9,     9,     9,    57,     9,    18,    54,
       9,     9,     9,     9,     9,    15,     9,     3,     3,    52,
      52,    52,    52,     3,     3,    52,    51,    53,    35,    53,
      53,    53,    51,    51,    51,    51,    19,    51,    53,     3,
      22,    35,   158,   165,    -1,    -1,    57,    -1,    57,    -1,
      51,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    -1,    51
};

/* YYSTOS[STATE-NUM] -- The (internal number of the) accessing
   symbol of state STATE-NUM.  */
static const yytype_uint8 yystos[] =
{
       0,    26,    66,    71,     0,    67,    72,    24,    25,    28,
      29,    30,    32,    40,    41,    42,    43,    70,    73,    74,
      76,    77,    75,    78,     9,     9,     9,     9,    79,     9,
       9,     9,     9,     9,    52,    52,    52,    52,    24,    28,
      29,    30,    32,    68,    80,    51,    54,    51,    54,    51,
      54,    51,    54,    51,    54,     3,     3,     3,     3,     9,
       9,     9,     9,     9,    81,    53,    53,    53,    53,    44,
      44,    44,    44,    44,    27,    31,    82,    51,    51,    51,
      51,     3,     5,     4,     6,     7,    69,     9,    51,    51,
      51,    51,    51,    95,    83,     9,    10,    11,    12,    16,
      23,    34,    37,    38,    39,    45,    98,    55,    44,    52,
     101,     3,     4,     5,     6,     7,     9,    55,    60,   121,
     123,   104,     9,    50,    55,     9,     5,     9,   123,   123,
      51,    85,   123,     3,     9,   122,    55,    52,   124,   123,
     123,    46,    47,    48,    49,    58,    59,    60,    61,    62,
      63,    64,   102,   123,    44,     9,    52,    99,    56,    86,
      87,    53,   123,   125,   122,    55,    56,   123,   123,   123,
     123,    59,   123,   123,    59,    59,   123,   123,   123,   123,
      13,   105,   123,    56,   122,    96,    71,    24,    28,    29,
      30,    32,    44,   126,    56,    53,   125,   123,   123,   123,
      95,    15,   106,    33,    53,    54,    88,     9,     9,     9,
       9,     9,   123,    54,    56,   103,    95,    17,     3,   100,
       9,    24,    27,    28,    29,    30,    32,    40,    41,    42,
      43,    89,    54,    54,    54,    54,    54,   123,    14,   119,
      20,   123,    57,    97,    90,    84,    92,    93,    91,    94,
       9,     9,     9,     9,   120,    18,   107,   109,    54,     9,
      95,     9,     9,     9,     9,    52,    52,    52,    52,    95,
      15,    95,     9,    51,    54,    21,    51,    54,    51,    54,
      51,    54,    51,    54,     3,     3,     3,     3,    95,   110,
      52,    51,    53,    53,    53,    53,   108,    35,   122,    51,
      51,    51,    51,    19,    51,    53,   116,    33,    36,   112,
     117,     3,   118,   111,   113,    57,    22,    57,    95,   114,
      35,    95,    51,   115,    35,    51
};

#define yyerrok		(yyerrstatus = 0)
#define yyclearin	(yychar = YYEMPTY)
#define YYEMPTY		(-2)
#define YYEOF		0

#define YYACCEPT	goto yyacceptlab
#define YYABORT		goto yyabortlab
#define YYERROR		goto yyerrorlab


/* Like YYERROR except do call yyerror.  This remains here temporarily
   to ease the transition to the new meaning of YYERROR, for GCC.
   Once GCC version 2 has supplanted version 1, this can go.  */

#define YYFAIL		goto yyerrlab

#define YYRECOVERING()  (!!yyerrstatus)

#define YYBACKUP(Token, Value)					\
do								\
  if (yychar == YYEMPTY && yylen == 1)				\
    {								\
      yychar = (Token);						\
      yylval = (Value);						\
      yytoken = YYTRANSLATE (yychar);				\
      YYPOPSTACK (1);						\
      goto yybackup;						\
    }								\
  else								\
    {								\
      yyerror (YY_("syntax error: cannot back up")); \
      YYERROR;							\
    }								\
while (YYID (0))


#define YYTERROR	1
#define YYERRCODE	256


/* YYLLOC_DEFAULT -- Set CURRENT to span from RHS[1] to RHS[N].
   If N is 0, then set CURRENT to the empty location which ends
   the previous symbol: RHS[0] (always defined).  */

#define YYRHSLOC(Rhs, K) ((Rhs)[K])
#ifndef YYLLOC_DEFAULT
# define YYLLOC_DEFAULT(Current, Rhs, N)				\
    do									\
      if (YYID (N))                                                    \
	{								\
	  (Current).first_line   = YYRHSLOC (Rhs, 1).first_line;	\
	  (Current).first_column = YYRHSLOC (Rhs, 1).first_column;	\
	  (Current).last_line    = YYRHSLOC (Rhs, N).last_line;		\
	  (Current).last_column  = YYRHSLOC (Rhs, N).last_column;	\
	}								\
      else								\
	{								\
	  (Current).first_line   = (Current).last_line   =		\
	    YYRHSLOC (Rhs, 0).last_line;				\
	  (Current).first_column = (Current).last_column =		\
	    YYRHSLOC (Rhs, 0).last_column;				\
	}								\
    while (YYID (0))
#endif


/* YY_LOCATION_PRINT -- Print the location on the stream.
   This macro was not mandated originally: define only if we know
   we won't break user code: when these are the locations we know.  */

#ifndef YY_LOCATION_PRINT
# if YYLTYPE_IS_TRIVIAL
#  define YY_LOCATION_PRINT(File, Loc)			\
     fprintf (File, "%d.%d-%d.%d",			\
	      (Loc).first_line, (Loc).first_column,	\
	      (Loc).last_line,  (Loc).last_column)
# else
#  define YY_LOCATION_PRINT(File, Loc) ((void) 0)
# endif
#endif


/* YYLEX -- calling `yylex' with the right arguments.  */

#ifdef YYLEX_PARAM
# define YYLEX yylex (YYLEX_PARAM)
#else
# define YYLEX yylex ()
#endif

/* Enable debugging if requested.  */
#if YYDEBUG

# ifndef YYFPRINTF
#  include <stdio.h> /* INFRINGES ON USER NAME SPACE */
#  define YYFPRINTF fprintf
# endif

# define YYDPRINTF(Args)			\
do {						\
  if (yydebug)					\
    YYFPRINTF Args;				\
} while (YYID (0))

# define YY_SYMBOL_PRINT(Title, Type, Value, Location)			  \
do {									  \
  if (yydebug)								  \
    {									  \
      YYFPRINTF (stderr, "%s ", Title);					  \
      yy_symbol_print (stderr,						  \
		  Type, Value); \
      YYFPRINTF (stderr, "\n");						  \
    }									  \
} while (YYID (0))


/*--------------------------------.
| Print this symbol on YYOUTPUT.  |
`--------------------------------*/

/*ARGSUSED*/
#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
static void
yy_symbol_value_print (FILE *yyoutput, int yytype, YYSTYPE const * const yyvaluep)
#else
static void
yy_symbol_value_print (yyoutput, yytype, yyvaluep)
    FILE *yyoutput;
    int yytype;
    YYSTYPE const * const yyvaluep;
#endif
{
  if (!yyvaluep)
    return;
# ifdef YYPRINT
  if (yytype < YYNTOKENS)
    YYPRINT (yyoutput, yytoknum[yytype], *yyvaluep);
# else
  YYUSE (yyoutput);
# endif
  switch (yytype)
    {
      default:
	break;
    }
}


/*--------------------------------.
| Print this symbol on YYOUTPUT.  |
`--------------------------------*/

#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
static void
yy_symbol_print (FILE *yyoutput, int yytype, YYSTYPE const * const yyvaluep)
#else
static void
yy_symbol_print (yyoutput, yytype, yyvaluep)
    FILE *yyoutput;
    int yytype;
    YYSTYPE const * const yyvaluep;
#endif
{
  if (yytype < YYNTOKENS)
    YYFPRINTF (yyoutput, "token %s (", yytname[yytype]);
  else
    YYFPRINTF (yyoutput, "nterm %s (", yytname[yytype]);

  yy_symbol_value_print (yyoutput, yytype, yyvaluep);
  YYFPRINTF (yyoutput, ")");
}

/*------------------------------------------------------------------.
| yy_stack_print -- Print the state stack from its BOTTOM up to its |
| TOP (included).                                                   |
`------------------------------------------------------------------*/

#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
static void
yy_stack_print (yytype_int16 *yybottom, yytype_int16 *yytop)
#else
static void
yy_stack_print (yybottom, yytop)
    yytype_int16 *yybottom;
    yytype_int16 *yytop;
#endif
{
  YYFPRINTF (stderr, "Stack now");
  for (; yybottom <= yytop; yybottom++)
    {
      int yybot = *yybottom;
      YYFPRINTF (stderr, " %d", yybot);
    }
  YYFPRINTF (stderr, "\n");
}

# define YY_STACK_PRINT(Bottom, Top)				\
do {								\
  if (yydebug)							\
    yy_stack_print ((Bottom), (Top));				\
} while (YYID (0))


/*------------------------------------------------.
| Report that the YYRULE is going to be reduced.  |
`------------------------------------------------*/

#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
static void
yy_reduce_print (YYSTYPE *yyvsp, int yyrule)
#else
static void
yy_reduce_print (yyvsp, yyrule)
    YYSTYPE *yyvsp;
    int yyrule;
#endif
{
  int yynrhs = yyr2[yyrule];
  int yyi;
  unsigned long int yylno = yyrline[yyrule];
  YYFPRINTF (stderr, "Reducing stack by rule %d (line %lu):\n",
	     yyrule - 1, yylno);
  /* The symbols being reduced.  */
  for (yyi = 0; yyi < yynrhs; yyi++)
    {
      YYFPRINTF (stderr, "   $%d = ", yyi + 1);
      yy_symbol_print (stderr, yyrhs[yyprhs[yyrule] + yyi],
		       &(yyvsp[(yyi + 1) - (yynrhs)])
		       		       );
      YYFPRINTF (stderr, "\n");
    }
}

# define YY_REDUCE_PRINT(Rule)		\
do {					\
  if (yydebug)				\
    yy_reduce_print (yyvsp, Rule); \
} while (YYID (0))

/* Nonzero means print parse trace.  It is left uninitialized so that
   multiple parsers can coexist.  */
int yydebug;
#else /* !YYDEBUG */
# define YYDPRINTF(Args)
# define YY_SYMBOL_PRINT(Title, Type, Value, Location)
# define YY_STACK_PRINT(Bottom, Top)
# define YY_REDUCE_PRINT(Rule)
#endif /* !YYDEBUG */


/* YYINITDEPTH -- initial size of the parser's stacks.  */
#ifndef	YYINITDEPTH
# define YYINITDEPTH 200
#endif

/* YYMAXDEPTH -- maximum size the stacks can grow to (effective only
   if the built-in stack extension method is used).

   Do not make this value too large; the results are undefined if
   YYSTACK_ALLOC_MAXIMUM < YYSTACK_BYTES (YYMAXDEPTH)
   evaluated with infinite-precision integer arithmetic.  */

#ifndef YYMAXDEPTH
# define YYMAXDEPTH 10000
#endif



#if YYERROR_VERBOSE

# ifndef yystrlen
#  if defined __GLIBC__ && defined _STRING_H
#   define yystrlen strlen
#  else
/* Return the length of YYSTR.  */
#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
static YYSIZE_T
yystrlen (const char *yystr)
#else
static YYSIZE_T
yystrlen (yystr)
    const char *yystr;
#endif
{
  YYSIZE_T yylen;
  for (yylen = 0; yystr[yylen]; yylen++)
    continue;
  return yylen;
}
#  endif
# endif

# ifndef yystpcpy
#  if defined __GLIBC__ && defined _STRING_H && defined _GNU_SOURCE
#   define yystpcpy stpcpy
#  else
/* Copy YYSRC to YYDEST, returning the address of the terminating '\0' in
   YYDEST.  */
#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
static char *
yystpcpy (char *yydest, const char *yysrc)
#else
static char *
yystpcpy (yydest, yysrc)
    char *yydest;
    const char *yysrc;
#endif
{
  char *yyd = yydest;
  const char *yys = yysrc;

  while ((*yyd++ = *yys++) != '\0')
    continue;

  return yyd - 1;
}
#  endif
# endif

# ifndef yytnamerr
/* Copy to YYRES the contents of YYSTR after stripping away unnecessary
   quotes and backslashes, so that it's suitable for yyerror.  The
   heuristic is that double-quoting is unnecessary unless the string
   contains an apostrophe, a comma, or backslash (other than
   backslash-backslash).  YYSTR is taken from yytname.  If YYRES is
   null, do not copy; instead, return the length of what the result
   would have been.  */
static YYSIZE_T
yytnamerr (char *yyres, const char *yystr)
{
  if (*yystr == '"')
    {
      YYSIZE_T yyn = 0;
      char const *yyp = yystr;

      for (;;)
	switch (*++yyp)
	  {
	  case '\'':
	  case ',':
	    goto do_not_strip_quotes;

	  case '\\':
	    if (*++yyp != '\\')
	      goto do_not_strip_quotes;
	    /* Fall through.  */
	  default:
	    if (yyres)
	      yyres[yyn] = *yyp;
	    yyn++;
	    break;

	  case '"':
	    if (yyres)
	      yyres[yyn] = '\0';
	    return yyn;
	  }
    do_not_strip_quotes: ;
    }

  if (! yyres)
    return yystrlen (yystr);

  return yystpcpy (yyres, yystr) - yyres;
}
# endif

/* Copy into YYRESULT an error message about the unexpected token
   YYCHAR while in state YYSTATE.  Return the number of bytes copied,
   including the terminating null byte.  If YYRESULT is null, do not
   copy anything; just return the number of bytes that would be
   copied.  As a special case, return 0 if an ordinary "syntax error"
   message will do.  Return YYSIZE_MAXIMUM if overflow occurs during
   size calculation.  */
static YYSIZE_T
yysyntax_error (char *yyresult, int yystate, int yychar)
{
  int yyn = yypact[yystate];

  if (! (YYPACT_NINF < yyn && yyn <= YYLAST))
    return 0;
  else
    {
      int yytype = YYTRANSLATE (yychar);
      YYSIZE_T yysize0 = yytnamerr (0, yytname[yytype]);
      YYSIZE_T yysize = yysize0;
      YYSIZE_T yysize1;
      int yysize_overflow = 0;
      enum { YYERROR_VERBOSE_ARGS_MAXIMUM = 5 };
      char const *yyarg[YYERROR_VERBOSE_ARGS_MAXIMUM];
      int yyx;

# if 0
      /* This is so xgettext sees the translatable formats that are
	 constructed on the fly.  */
      YY_("syntax error, unexpected %s");
      YY_("syntax error, unexpected %s, expecting %s");
      YY_("syntax error, unexpected %s, expecting %s or %s");
      YY_("syntax error, unexpected %s, expecting %s or %s or %s");
      YY_("syntax error, unexpected %s, expecting %s or %s or %s or %s");
# endif
      char *yyfmt;
      char const *yyf;
      static char const yyunexpected[] = "syntax error, unexpected %s";
      static char const yyexpecting[] = ", expecting %s";
      static char const yyor[] = " or %s";
      char yyformat[sizeof yyunexpected
		    + sizeof yyexpecting - 1
		    + ((YYERROR_VERBOSE_ARGS_MAXIMUM - 2)
		       * (sizeof yyor - 1))];
      char const *yyprefix = yyexpecting;

      /* Start YYX at -YYN if negative to avoid negative indexes in
	 YYCHECK.  */
      int yyxbegin = yyn < 0 ? -yyn : 0;

      /* Stay within bounds of both yycheck and yytname.  */
      int yychecklim = YYLAST - yyn + 1;
      int yyxend = yychecklim < YYNTOKENS ? yychecklim : YYNTOKENS;
      int yycount = 1;

      yyarg[0] = yytname[yytype];
      yyfmt = yystpcpy (yyformat, yyunexpected);

      for (yyx = yyxbegin; yyx < yyxend; ++yyx)
	if (yycheck[yyx + yyn] == yyx && yyx != YYTERROR)
	  {
	    if (yycount == YYERROR_VERBOSE_ARGS_MAXIMUM)
	      {
		yycount = 1;
		yysize = yysize0;
		yyformat[sizeof yyunexpected - 1] = '\0';
		break;
	      }
	    yyarg[yycount++] = yytname[yyx];
	    yysize1 = yysize + yytnamerr (0, yytname[yyx]);
	    yysize_overflow |= (yysize1 < yysize);
	    yysize = yysize1;
	    yyfmt = yystpcpy (yyfmt, yyprefix);
	    yyprefix = yyor;
	  }

      yyf = YY_(yyformat);
      yysize1 = yysize + yystrlen (yyf);
      yysize_overflow |= (yysize1 < yysize);
      yysize = yysize1;

      if (yysize_overflow)
	return YYSIZE_MAXIMUM;

      if (yyresult)
	{
	  /* Avoid sprintf, as that infringes on the user's name space.
	     Don't have undefined behavior even if the translation
	     produced a string with the wrong number of "%s"s.  */
	  char *yyp = yyresult;
	  int yyi = 0;
	  while ((*yyp = *yyf) != '\0')
	    {
	      if (*yyp == '%' && yyf[1] == 's' && yyi < yycount)
		{
		  yyp += yytnamerr (yyp, yyarg[yyi++]);
		  yyf += 2;
		}
	      else
		{
		  yyp++;
		  yyf++;
		}
	    }
	}
      return yysize;
    }
}
#endif /* YYERROR_VERBOSE */


/*-----------------------------------------------.
| Release the memory associated to this symbol.  |
`-----------------------------------------------*/

/*ARGSUSED*/
#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
static void
yydestruct (const char *yymsg, int yytype, YYSTYPE *yyvaluep)
#else
static void
yydestruct (yymsg, yytype, yyvaluep)
    const char *yymsg;
    int yytype;
    YYSTYPE *yyvaluep;
#endif
{
  YYUSE (yyvaluep);

  if (!yymsg)
    yymsg = "Deleting";
  YY_SYMBOL_PRINT (yymsg, yytype, yyvaluep, yylocationp);

  switch (yytype)
    {

      default:
	break;
    }
}

/* Prevent warnings from -Wmissing-prototypes.  */
#ifdef YYPARSE_PARAM
#if defined __STDC__ || defined __cplusplus
int yyparse (void *YYPARSE_PARAM);
#else
int yyparse ();
#endif
#else /* ! YYPARSE_PARAM */
#if defined __STDC__ || defined __cplusplus
int yyparse (void);
#else
int yyparse ();
#endif
#endif /* ! YYPARSE_PARAM */


/* The lookahead symbol.  */
int yychar;

/* The semantic value of the lookahead symbol.  */
YYSTYPE yylval;

/* Number of syntax errors so far.  */
int yynerrs;



/*-------------------------.
| yyparse or yypush_parse.  |
`-------------------------*/

#ifdef YYPARSE_PARAM
#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
int
yyparse (void *YYPARSE_PARAM)
#else
int
yyparse (YYPARSE_PARAM)
    void *YYPARSE_PARAM;
#endif
#else /* ! YYPARSE_PARAM */
#if (defined __STDC__ || defined __C99__FUNC__ \
     || defined __cplusplus || defined _MSC_VER)
int
yyparse (void)
#else
int
yyparse ()

#endif
#endif
{


    int yystate;
    /* Number of tokens to shift before error messages enabled.  */
    int yyerrstatus;

    /* The stacks and their tools:
       `yyss': related to states.
       `yyvs': related to semantic values.

       Refer to the stacks thru separate pointers, to allow yyoverflow
       to reallocate them elsewhere.  */

    /* The state stack.  */
    yytype_int16 yyssa[YYINITDEPTH];
    yytype_int16 *yyss;
    yytype_int16 *yyssp;

    /* The semantic value stack.  */
    YYSTYPE yyvsa[YYINITDEPTH];
    YYSTYPE *yyvs;
    YYSTYPE *yyvsp;

    YYSIZE_T yystacksize;

  int yyn;
  int yyresult;
  /* Lookahead token as an internal (translated) token number.  */
  int yytoken;
  /* The variables used to return semantic value and location from the
     action routines.  */
  YYSTYPE yyval;

#if YYERROR_VERBOSE
  /* Buffer for error messages, and its allocated size.  */
  char yymsgbuf[128];
  char *yymsg = yymsgbuf;
  YYSIZE_T yymsg_alloc = sizeof yymsgbuf;
#endif

#define YYPOPSTACK(N)   (yyvsp -= (N), yyssp -= (N))

  /* The number of symbols on the RHS of the reduced rule.
     Keep to zero when no symbol should be popped.  */
  int yylen = 0;

  yytoken = 0;
  yyss = yyssa;
  yyvs = yyvsa;
  yystacksize = YYINITDEPTH;

  YYDPRINTF ((stderr, "Starting parse\n"));

  yystate = 0;
  yyerrstatus = 0;
  yynerrs = 0;
  yychar = YYEMPTY; /* Cause a token to be read.  */

  /* Initialize stack pointers.
     Waste one element of value and location stack
     so that they stay on the same level as the state stack.
     The wasted elements are never initialized.  */
  yyssp = yyss;
  yyvsp = yyvs;

  goto yysetstate;

/*------------------------------------------------------------.
| yynewstate -- Push a new state, which is found in yystate.  |
`------------------------------------------------------------*/
 yynewstate:
  /* In all cases, when you get here, the value and location stacks
     have just been pushed.  So pushing a state here evens the stacks.  */
  yyssp++;

 yysetstate:
  *yyssp = yystate;

  if (yyss + yystacksize - 1 <= yyssp)
    {
      /* Get the current used size of the three stacks, in elements.  */
      YYSIZE_T yysize = yyssp - yyss + 1;

#ifdef yyoverflow
      {
	/* Give user a chance to reallocate the stack.  Use copies of
	   these so that the &'s don't force the real ones into
	   memory.  */
	YYSTYPE *yyvs1 = yyvs;
	yytype_int16 *yyss1 = yyss;

	/* Each stack pointer address is followed by the size of the
	   data in use in that stack, in bytes.  This used to be a
	   conditional around just the two extra args, but that might
	   be undefined if yyoverflow is a macro.  */
	yyoverflow (YY_("memory exhausted"),
		    &yyss1, yysize * sizeof (*yyssp),
		    &yyvs1, yysize * sizeof (*yyvsp),
		    &yystacksize);

	yyss = yyss1;
	yyvs = yyvs1;
      }
#else /* no yyoverflow */
# ifndef YYSTACK_RELOCATE
      goto yyexhaustedlab;
# else
      /* Extend the stack our own way.  */
      if (YYMAXDEPTH <= yystacksize)
	goto yyexhaustedlab;
      yystacksize *= 2;
      if (YYMAXDEPTH < yystacksize)
	yystacksize = YYMAXDEPTH;

      {
	yytype_int16 *yyss1 = yyss;
	union yyalloc *yyptr =
	  (union yyalloc *) YYSTACK_ALLOC (YYSTACK_BYTES (yystacksize));
	if (! yyptr)
	  goto yyexhaustedlab;
	YYSTACK_RELOCATE (yyss_alloc, yyss);
	YYSTACK_RELOCATE (yyvs_alloc, yyvs);
#  undef YYSTACK_RELOCATE
	if (yyss1 != yyssa)
	  YYSTACK_FREE (yyss1);
      }
# endif
#endif /* no yyoverflow */

      yyssp = yyss + yysize - 1;
      yyvsp = yyvs + yysize - 1;

      YYDPRINTF ((stderr, "Stack size increased to %lu\n",
		  (unsigned long int) yystacksize));

      if (yyss + yystacksize - 1 <= yyssp)
	YYABORT;
    }

  YYDPRINTF ((stderr, "Entering state %d\n", yystate));

  if (yystate == YYFINAL)
    YYACCEPT;

  goto yybackup;

/*-----------.
| yybackup.  |
`-----------*/
yybackup:

  /* Do appropriate processing given the current state.  Read a
     lookahead token if we need one and don't already have one.  */

  /* First try to decide what to do without reference to lookahead token.  */
  yyn = yypact[yystate];
  if (yyn == YYPACT_NINF)
    goto yydefault;

  /* Not known => get a lookahead token if don't already have one.  */

  /* YYCHAR is either YYEMPTY or YYEOF or a valid lookahead symbol.  */
  if (yychar == YYEMPTY)
    {
      YYDPRINTF ((stderr, "Reading a token: "));
      yychar = YYLEX;
    }

  if (yychar <= YYEOF)
    {
      yychar = yytoken = YYEOF;
      YYDPRINTF ((stderr, "Now at end of input.\n"));
    }
  else
    {
      yytoken = YYTRANSLATE (yychar);
      YY_SYMBOL_PRINT ("Next token is", yytoken, &yylval, &yylloc);
    }

  /* If the proper action on seeing token YYTOKEN is to reduce or to
     detect an error, take that action.  */
  yyn += yytoken;
  if (yyn < 0 || YYLAST < yyn || yycheck[yyn] != yytoken)
    goto yydefault;
  yyn = yytable[yyn];
  if (yyn <= 0)
    {
      if (yyn == 0 || yyn == YYTABLE_NINF)
	goto yyerrlab;
      yyn = -yyn;
      goto yyreduce;
    }

  /* Count tokens shifted since error; after three, turn off error
     status.  */
  if (yyerrstatus)
    yyerrstatus--;

  /* Shift the lookahead token.  */
  YY_SYMBOL_PRINT ("Shifting", yytoken, &yylval, &yylloc);

  /* Discard the shifted token.  */
  yychar = YYEMPTY;

  yystate = yyn;
  *++yyvsp = yylval;

  goto yynewstate;


/*-----------------------------------------------------------.
| yydefault -- do the default action for the current state.  |
`-----------------------------------------------------------*/
yydefault:
  yyn = yydefact[yystate];
  if (yyn == 0)
    goto yyerrlab;
  goto yyreduce;


/*-----------------------------.
| yyreduce -- Do a reduction.  |
`-----------------------------*/
yyreduce:
  /* yyn is the number of a rule to reduce with.  */
  yylen = yyr2[yyn];

  /* If YYLEN is nonzero, implement the default value of the action:
     `$$ = $1'.

     Otherwise, the following line sets YYVAL to garbage.
     This behavior is undocumented and Bison
     users should not rely upon it.  Assigning to YYVAL
     unconditionally makes the parser a bit smaller, and it avoids a
     GCC warning that YYVAL may be used uninitialized.  */
  yyval = yyvsp[1-yylen];


  YY_REDUCE_PRINT (yyn);
  switch (yyn)
    {
        case 2:

/* Line 1455 of yacc.c  */
#line 135 "parser.y"
    {
	function_name = "global";
;}
    break;

  case 3:

/* Line 1455 of yacc.c  */
#line 140 "parser.y"
    { if (start_const != -1) end_const =  gen_label();;}
    break;

  case 4:

/* Line 1455 of yacc.c  */
#line 143 "parser.y"
    { 
	gen_code( DATA, data_location() - 1 );
	if (function_name != NULL) free(function_name);
	function_name = "main";
	main_start = gen_label() - 1;
;}
    break;

  case 5:

/* Line 1455 of yacc.c  */
#line 151 "parser.y"
    { 
	gen_code( HALT, 0 ); 
	YYACCEPT; 
;}
    break;

  case 7:

/* Line 1455 of yacc.c  */
#line 158 "parser.y"
    { start_const = gen_label(); ;}
    break;

  case 12:

/* Line 1455 of yacc.c  */
#line 169 "parser.y"
    { install( (yyvsp[(3) - (4)].id) , function_name, INT, -1); ;}
    break;

  case 13:

/* Line 1455 of yacc.c  */
#line 170 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, CHR, -1 ); ;}
    break;

  case 14:

/* Line 1455 of yacc.c  */
#line 171 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, DOU, -1 ); ;}
    break;

  case 15:

/* Line 1455 of yacc.c  */
#line 172 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, STR, -1 ); ;}
    break;

  case 16:

/* Line 1455 of yacc.c  */
#line 173 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, BOL, -1 ); ;}
    break;

  case 17:

/* Line 1455 of yacc.c  */
#line 174 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_I, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 18:

/* Line 1455 of yacc.c  */
#line 175 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_D, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 19:

/* Line 1455 of yacc.c  */
#line 176 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_C, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 20:

/* Line 1455 of yacc.c  */
#line 177 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_B, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 22:

/* Line 1455 of yacc.c  */
#line 181 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, INT, -1 ); ;}
    break;

  case 24:

/* Line 1455 of yacc.c  */
#line 185 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, CHR, -1 ); ;}
    break;

  case 26:

/* Line 1455 of yacc.c  */
#line 189 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, STR, -1 ); ;}
    break;

  case 28:

/* Line 1455 of yacc.c  */
#line 193 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, DOU, -1 ); ;}
    break;

  case 30:

/* Line 1455 of yacc.c  */
#line 197 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, BOL, -1 ); ;}
    break;

  case 33:

/* Line 1455 of yacc.c  */
#line 204 "parser.y"
    { install( (yyvsp[(2) - (5)].id) , "global", C_INT, -1); gen_code( LD_INT, (yyvsp[(4) - (5)].intval) ); context_check( STORE, (yyvsp[(2) - (5)].id), function_name );  ;}
    break;

  case 34:

/* Line 1455 of yacc.c  */
#line 205 "parser.y"
    { install( (yyvsp[(2) - (5)].id), function_name, C_CHR, -1 ); gen_code_char ( LD_CHR, (yyvsp[(4) - (5)].chrval)); context_check( STORE, (yyvsp[(2) - (5)].id), function_name );  ;}
    break;

  case 35:

/* Line 1455 of yacc.c  */
#line 206 "parser.y"
    { install( (yyvsp[(2) - (5)].id), function_name, C_DOU, -1 ); gen_code_double( LD_DOU, (yyvsp[(4) - (5)].douval) ); context_check( STORE, (yyvsp[(2) - (5)].id), function_name );  ;}
    break;

  case 36:

/* Line 1455 of yacc.c  */
#line 207 "parser.y"
    { install( (yyvsp[(2) - (5)].id), function_name, C_STR, -1 ); gen_code_string ( LD_STR, (yyvsp[(4) - (5)].strval)); context_check( STORE, (yyvsp[(2) - (5)].id), function_name ); ;}
    break;

  case 37:

/* Line 1455 of yacc.c  */
#line 208 "parser.y"
    { install( (yyvsp[(2) - (5)].id), function_name, C_BOL, -1 );  gen_code_boolean (LD_BOL, (yyvsp[(4) - (5)].bolval)); context_check( STORE, (yyvsp[(2) - (5)].id), function_name);;}
    break;

  case 40:

/* Line 1455 of yacc.c  */
#line 216 "parser.y"
    {
	if (function_name != NULL) free(function_name);
	function_name = (char *) malloc (strlen((yyvsp[(2) - (2)].id))+1);
	function_name = (yyvsp[(2) - (2)].id);
	install( function_name , function_name, FUN, gen_label());
	install( function_name , "global", FUN, gen_label()); 
;}
    break;

  case 41:

/* Line 1455 of yacc.c  */
#line 226 "parser.y"
    {
	gen_code( DATA, data_location() - 1 );
;}
    break;

  case 42:

/* Line 1455 of yacc.c  */
#line 231 "parser.y"
    {
	if (function_name != NULL) free(function_name);
	function_name = "main";
	gen_code(END_CAL, 0);
;}
    break;

  case 45:

/* Line 1455 of yacc.c  */
#line 242 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, INT, -1 ); gen_code( LD_INT, 0 ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 46:

/* Line 1455 of yacc.c  */
#line 243 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 47:

/* Line 1455 of yacc.c  */
#line 244 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, DOU, -1 ); gen_code_double( LD_DOU, 0 ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 48:

/* Line 1455 of yacc.c  */
#line 245 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 49:

/* Line 1455 of yacc.c  */
#line 246 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 51:

/* Line 1455 of yacc.c  */
#line 250 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, INT, -1 ); gen_code( LD_INT, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 52:

/* Line 1455 of yacc.c  */
#line 251 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 53:

/* Line 1455 of yacc.c  */
#line 252 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, DOU, -1 ); gen_code_double( LD_DOU, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 54:

/* Line 1455 of yacc.c  */
#line 253 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 55:

/* Line 1455 of yacc.c  */
#line 254 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 58:

/* Line 1455 of yacc.c  */
#line 262 "parser.y"
    { install( (yyvsp[(3) - (4)].id) , function_name, INT, -1); gen_code( LD_INT, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 59:

/* Line 1455 of yacc.c  */
#line 263 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 60:

/* Line 1455 of yacc.c  */
#line 264 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, DOU, -1 ); gen_code_double( LD_DOU, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 61:

/* Line 1455 of yacc.c  */
#line 265 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 62:

/* Line 1455 of yacc.c  */
#line 266 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name ); context_check( LD_VAR, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 63:

/* Line 1455 of yacc.c  */
#line 267 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_I, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 64:

/* Line 1455 of yacc.c  */
#line 268 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_D, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 65:

/* Line 1455 of yacc.c  */
#line 269 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_C, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 66:

/* Line 1455 of yacc.c  */
#line 270 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_B, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 68:

/* Line 1455 of yacc.c  */
#line 274 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, INT, -1 ); gen_code( LD_INT, 0 ); context_check( STORE, (yyvsp[(2) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(2) - (3)].id), function_name );;}
    break;

  case 70:

/* Line 1455 of yacc.c  */
#line 278 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, (yyvsp[(2) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(2) - (3)].id), function_name );;}
    break;

  case 72:

/* Line 1455 of yacc.c  */
#line 282 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, (yyvsp[(2) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(2) - (3)].id), function_name );;}
    break;

  case 74:

/* Line 1455 of yacc.c  */
#line 286 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, DOU, -1 );  gen_code_double( LD_DOU, 0 ); context_check( STORE, (yyvsp[(2) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(2) - (3)].id), function_name );;}
    break;

  case 76:

/* Line 1455 of yacc.c  */
#line 290 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, (yyvsp[(2) - (3)].id), function_name ); context_check( LD_VAR, (yyvsp[(2) - (3)].id), function_name );;}
    break;

  case 80:

/* Line 1455 of yacc.c  */
#line 298 "parser.y"
    { context_check( READ_VAR, (yyvsp[(3) - (3)].id), function_name); ;}
    break;

  case 82:

/* Line 1455 of yacc.c  */
#line 302 "parser.y"
    { context_check( READ_INT_ARR, (yyvsp[(3) - (6)].id), function_name); ;}
    break;

  case 83:

/* Line 1455 of yacc.c  */
#line 305 "parser.y"
    { context_check( READ_VAR, (yyvsp[(2) - (2)].id), function_name); ;}
    break;

  case 85:

/* Line 1455 of yacc.c  */
#line 306 "parser.y"
    { gen_code(WAIT_CALL, 0 ); ;}
    break;

  case 86:

/* Line 1455 of yacc.c  */
#line 307 "parser.y"
    { context_check( READ_INT_ARR, (yyvsp[(2) - (5)].id), function_name); ;}
    break;

  case 88:

/* Line 1455 of yacc.c  */
#line 308 "parser.y"
    { context_check( WRITE_VAR, (yyvsp[(2) - (2)].id), function_name); ;}
    break;

  case 89:

/* Line 1455 of yacc.c  */
#line 309 "parser.y"
    { gen_code_string ( WRITE_STR, (yyvsp[(2) - (2)].strval) );;}
    break;

  case 90:

/* Line 1455 of yacc.c  */
#line 310 "parser.y"
    { gen_code ( WRITE_ALL, 0 );;}
    break;

  case 91:

/* Line 1455 of yacc.c  */
#line 311 "parser.y"
    { gen_code ( WRITE_LINE, 0); ;}
    break;

  case 92:

/* Line 1455 of yacc.c  */
#line 312 "parser.y"
    { gen_code(END_CAL, 0); ;}
    break;

  case 93:

/* Line 1455 of yacc.c  */
#line 313 "parser.y"
    { context_check( STORE, (yyvsp[(1) - (3)].id), function_name ); ;}
    break;

  case 94:

/* Line 1455 of yacc.c  */
#line 314 "parser.y"
    { context_check( INT_ARR_STORE, (yyvsp[(1) - (6)].id), function_name ); ;}
    break;

  case 95:

/* Line 1455 of yacc.c  */
#line 315 "parser.y"
    {gen_code(BEGIN_CAL,0);;}
    break;

  case 96:

/* Line 1455 of yacc.c  */
#line 315 "parser.y"
    { context_check(CAL, (yyvsp[(1) - (5)].id), "global");;}
    break;

  case 97:

/* Line 1455 of yacc.c  */
#line 316 "parser.y"
    { if_var = (struct lbs *) newlblrec(); if_var->for_jmp_false = reserve_loc(); ;}
    break;

  case 98:

/* Line 1455 of yacc.c  */
#line 317 "parser.y"
    { if_var->for_goto = reserve_loc(); ;}
    break;

  case 99:

/* Line 1455 of yacc.c  */
#line 319 "parser.y"
    { back_patch( if_var->for_goto, GOTO, gen_label() ); ;}
    break;

  case 100:

/* Line 1455 of yacc.c  */
#line 320 "parser.y"
    { (yyvsp[(1) - (1)].lbls) = (struct lbs *) newlblrec(); (yyvsp[(1) - (1)].lbls)->for_goto = gen_label(); ;}
    break;

  case 101:

/* Line 1455 of yacc.c  */
#line 320 "parser.y"
    { (yyvsp[(1) - (3)].lbls)->for_jmp_false = reserve_loc(); ;}
    break;

  case 102:

/* Line 1455 of yacc.c  */
#line 323 "parser.y"
    { gen_code( GOTO, (yyvsp[(1) - (7)].lbls)->for_goto ); back_patch( (yyvsp[(1) - (7)].lbls)->for_jmp_false, JMP_FALSE, gen_label() ); ;}
    break;

  case 103:

/* Line 1455 of yacc.c  */
#line 325 "parser.y"
    {
	context_check( STORE, (yyvsp[(2) - (4)].id), function_name );
	(yyvsp[(1) - (4)].lbls) = (struct lbs *) newlblrec(); 
	(yyvsp[(1) - (4)].lbls)->for_goto = gen_label();
	context_check( LD_VAR, (yyvsp[(2) - (4)].id), function_name );
;}
    break;

  case 104:

/* Line 1455 of yacc.c  */
#line 332 "parser.y"
    {
	gen_code( LTEQ, 0 );
	(yyvsp[(1) - (7)].lbls)->for_jmp_false = reserve_loc();
;}
    break;

  case 105:

/* Line 1455 of yacc.c  */
#line 338 "parser.y"
    {
	context_check( LD_VAR, (yyvsp[(2) - (10)].id), function_name );
	gen_code( LD_INT, 1 );
	gen_code( ADD, 0 );
	context_check( STORE, (yyvsp[(2) - (10)].id), function_name);
;}
    break;

  case 106:

/* Line 1455 of yacc.c  */
#line 344 "parser.y"
    { gen_code( GOTO, (yyvsp[(1) - (12)].lbls)->for_goto ); back_patch( (yyvsp[(1) - (12)].lbls)->for_jmp_false, JMP_FALSE, gen_label() ); ;}
    break;

  case 107:

/* Line 1455 of yacc.c  */
#line 346 "parser.y"
    {
	if (store_identifier != NULL) free(store_identifier);
	store_identifier = (char *) malloc (strlen((yyvsp[(3) - (7)].id))+1);
	store_identifier = (yyvsp[(3) - (7)].id);
	context_check( LD_VAR, (yyvsp[(3) - (7)].id), function_name);
	gen_code (LD_INT, (yyvsp[(6) - (7)].intval));
	gen_code( EQ, 0 );
	switch_var[switch_count] = (struct lbs *) newlblrec(); 
	switch_var[switch_count]->for_jmp_false = reserve_loc();
;}
    break;

  case 108:

/* Line 1455 of yacc.c  */
#line 356 "parser.y"
    { switch_var[switch_count]->for_goto = reserve_loc(); ;}
    break;

  case 109:

/* Line 1455 of yacc.c  */
#line 360 "parser.y"
    {
	int temp_count = switch_count;
	while (temp_count >= 0) {
		back_patch( switch_var[temp_count]->for_goto, GOTO, gen_label() );
		temp_count --;
	}
;}
    break;

  case 111:

/* Line 1455 of yacc.c  */
#line 370 "parser.y"
    { back_patch( switch_var[switch_count]->for_jmp_false,JMP_FALSE,gen_label());;}
    break;

  case 112:

/* Line 1455 of yacc.c  */
#line 370 "parser.y"
    {
	switch_count++;
	context_check( LD_VAR, store_identifier, function_name);
	gen_code (LD_INT, (yyvsp[(2) - (4)].intval));
	gen_code( EQ, 0 );
	switch_var[switch_count] = (struct lbs *) newlblrec(); 
	switch_var[switch_count]->for_jmp_false = reserve_loc();
;}
    break;

  case 113:

/* Line 1455 of yacc.c  */
#line 377 "parser.y"
    { switch_var[switch_count]->for_goto = reserve_loc(); ;}
    break;

  case 117:

/* Line 1455 of yacc.c  */
#line 384 "parser.y"
    { back_patch( switch_var[switch_count]->for_jmp_false,JMP_FALSE,gen_label() );;}
    break;

  case 118:

/* Line 1455 of yacc.c  */
#line 385 "parser.y"
    { back_patch( switch_var[switch_count]->for_jmp_false,JMP_FALSE,gen_label() ); ;}
    break;

  case 120:

/* Line 1455 of yacc.c  */
#line 388 "parser.y"
    { back_patch( if_var->for_jmp_false,JMP_FALSE,gen_label() );;}
    break;

  case 121:

/* Line 1455 of yacc.c  */
#line 389 "parser.y"
    { back_patch( if_var->for_jmp_false,JMP_FALSE,gen_label() ); ;}
    break;

  case 123:

/* Line 1455 of yacc.c  */
#line 392 "parser.y"
    {context_check( ARR_PART, (yyvsp[(1) - (4)].id), function_name );;}
    break;

  case 124:

/* Line 1455 of yacc.c  */
#line 394 "parser.y"
    { gen_code( LD_INT, (yyvsp[(1) - (1)].intval) ); ;}
    break;

  case 125:

/* Line 1455 of yacc.c  */
#line 395 "parser.y"
    { context_check( LD_VAR, (yyvsp[(1) - (1)].id), function_name ); ;}
    break;

  case 126:

/* Line 1455 of yacc.c  */
#line 398 "parser.y"
    { gen_code( LD_INT, (yyvsp[(1) - (1)].intval) ); ;}
    break;

  case 127:

/* Line 1455 of yacc.c  */
#line 399 "parser.y"
    { gen_code_double( LD_DOU, (yyvsp[(1) - (1)].douval) ); ;}
    break;

  case 128:

/* Line 1455 of yacc.c  */
#line 400 "parser.y"
    { gen_code_string ( LD_STR, (yyvsp[(1) - (1)].strval)); ;}
    break;

  case 129:

/* Line 1455 of yacc.c  */
#line 401 "parser.y"
    { gen_code_char ( LD_CHR, (yyvsp[(1) - (1)].chrval)); ;}
    break;

  case 130:

/* Line 1455 of yacc.c  */
#line 402 "parser.y"
    { gen_code_boolean (LD_BOL, (yyvsp[(1) - (1)].bolval)); ;}
    break;

  case 131:

/* Line 1455 of yacc.c  */
#line 403 "parser.y"
    {gen_code(BEGIN_CAL,0);;}
    break;

  case 132:

/* Line 1455 of yacc.c  */
#line 403 "parser.y"
    { context_check(CAL, (yyvsp[(1) - (5)].id), "global");;}
    break;

  case 133:

/* Line 1455 of yacc.c  */
#line 404 "parser.y"
    { context_check( LD_VAR, (yyvsp[(1) - (1)].id), function_name ); ;}
    break;

  case 134:

/* Line 1455 of yacc.c  */
#line 405 "parser.y"
    { gen_code( LT, 0 ); ;}
    break;

  case 135:

/* Line 1455 of yacc.c  */
#line 406 "parser.y"
    { gen_code( EQ, 0 ); ;}
    break;

  case 136:

/* Line 1455 of yacc.c  */
#line 407 "parser.y"
    { gen_code( NEQ, 0 ); ;}
    break;

  case 137:

/* Line 1455 of yacc.c  */
#line 408 "parser.y"
    { gen_code( GTEQ, 0 ); ;}
    break;

  case 138:

/* Line 1455 of yacc.c  */
#line 409 "parser.y"
    { gen_code( LTEQ, 0 ); ;}
    break;

  case 139:

/* Line 1455 of yacc.c  */
#line 410 "parser.y"
    { gen_code( GT, 0 ); ;}
    break;

  case 140:

/* Line 1455 of yacc.c  */
#line 411 "parser.y"
    { gen_code( ADD, 0 ); ;}
    break;

  case 141:

/* Line 1455 of yacc.c  */
#line 412 "parser.y"
    { gen_code( SUB, 0 ); ;}
    break;

  case 142:

/* Line 1455 of yacc.c  */
#line 413 "parser.y"
    { gen_code( MULT, 0 ); ;}
    break;

  case 143:

/* Line 1455 of yacc.c  */
#line 414 "parser.y"
    { gen_code( DIV, 0 ); ;}
    break;

  case 144:

/* Line 1455 of yacc.c  */
#line 415 "parser.y"
    { gen_code( AND, 0 ); ;}
    break;

  case 145:

/* Line 1455 of yacc.c  */
#line 416 "parser.y"
    { gen_code( OR, 0 ); ;}
    break;

  case 146:

/* Line 1455 of yacc.c  */
#line 417 "parser.y"
    { gen_code( MOD, 0 );;}
    break;

  case 147:

/* Line 1455 of yacc.c  */
#line 418 "parser.y"
    { gen_code( NOT, 0 );;}
    break;



/* Line 1455 of yacc.c  */
#line 2605 "parser.tab.c"
      default: break;
    }
  YY_SYMBOL_PRINT ("-> $$ =", yyr1[yyn], &yyval, &yyloc);

  YYPOPSTACK (yylen);
  yylen = 0;
  YY_STACK_PRINT (yyss, yyssp);

  *++yyvsp = yyval;

  /* Now `shift' the result of the reduction.  Determine what state
     that goes to, based on the state we popped back to and the rule
     number reduced by.  */

  yyn = yyr1[yyn];

  yystate = yypgoto[yyn - YYNTOKENS] + *yyssp;
  if (0 <= yystate && yystate <= YYLAST && yycheck[yystate] == *yyssp)
    yystate = yytable[yystate];
  else
    yystate = yydefgoto[yyn - YYNTOKENS];

  goto yynewstate;


/*------------------------------------.
| yyerrlab -- here on detecting error |
`------------------------------------*/
yyerrlab:
  /* If not already recovering from an error, report this error.  */
  if (!yyerrstatus)
    {
      ++yynerrs;
#if ! YYERROR_VERBOSE
      yyerror (YY_("syntax error"));
#else
      {
	YYSIZE_T yysize = yysyntax_error (0, yystate, yychar);
	if (yymsg_alloc < yysize && yymsg_alloc < YYSTACK_ALLOC_MAXIMUM)
	  {
	    YYSIZE_T yyalloc = 2 * yysize;
	    if (! (yysize <= yyalloc && yyalloc <= YYSTACK_ALLOC_MAXIMUM))
	      yyalloc = YYSTACK_ALLOC_MAXIMUM;
	    if (yymsg != yymsgbuf)
	      YYSTACK_FREE (yymsg);
	    yymsg = (char *) YYSTACK_ALLOC (yyalloc);
	    if (yymsg)
	      yymsg_alloc = yyalloc;
	    else
	      {
		yymsg = yymsgbuf;
		yymsg_alloc = sizeof yymsgbuf;
	      }
	  }

	if (0 < yysize && yysize <= yymsg_alloc)
	  {
	    (void) yysyntax_error (yymsg, yystate, yychar);
	    yyerror (yymsg);
	  }
	else
	  {
	    yyerror (YY_("syntax error"));
	    if (yysize != 0)
	      goto yyexhaustedlab;
	  }
      }
#endif
    }



  if (yyerrstatus == 3)
    {
      /* If just tried and failed to reuse lookahead token after an
	 error, discard it.  */

      if (yychar <= YYEOF)
	{
	  /* Return failure if at end of input.  */
	  if (yychar == YYEOF)
	    YYABORT;
	}
      else
	{
	  yydestruct ("Error: discarding",
		      yytoken, &yylval);
	  yychar = YYEMPTY;
	}
    }

  /* Else will try to reuse lookahead token after shifting the error
     token.  */
  goto yyerrlab1;


/*---------------------------------------------------.
| yyerrorlab -- error raised explicitly by YYERROR.  |
`---------------------------------------------------*/
yyerrorlab:

  /* Pacify compilers like GCC when the user code never invokes
     YYERROR and the label yyerrorlab therefore never appears in user
     code.  */
  if (/*CONSTCOND*/ 0)
     goto yyerrorlab;

  /* Do not reclaim the symbols of the rule which action triggered
     this YYERROR.  */
  YYPOPSTACK (yylen);
  yylen = 0;
  YY_STACK_PRINT (yyss, yyssp);
  yystate = *yyssp;
  goto yyerrlab1;


/*-------------------------------------------------------------.
| yyerrlab1 -- common code for both syntax error and YYERROR.  |
`-------------------------------------------------------------*/
yyerrlab1:
  yyerrstatus = 3;	/* Each real token shifted decrements this.  */

  for (;;)
    {
      yyn = yypact[yystate];
      if (yyn != YYPACT_NINF)
	{
	  yyn += YYTERROR;
	  if (0 <= yyn && yyn <= YYLAST && yycheck[yyn] == YYTERROR)
	    {
	      yyn = yytable[yyn];
	      if (0 < yyn)
		break;
	    }
	}

      /* Pop the current state because it cannot handle the error token.  */
      if (yyssp == yyss)
	YYABORT;


      yydestruct ("Error: popping",
		  yystos[yystate], yyvsp);
      YYPOPSTACK (1);
      yystate = *yyssp;
      YY_STACK_PRINT (yyss, yyssp);
    }

  *++yyvsp = yylval;


  /* Shift the error token.  */
  YY_SYMBOL_PRINT ("Shifting", yystos[yyn], yyvsp, yylsp);

  yystate = yyn;
  goto yynewstate;


/*-------------------------------------.
| yyacceptlab -- YYACCEPT comes here.  |
`-------------------------------------*/
yyacceptlab:
  yyresult = 0;
  goto yyreturn;

/*-----------------------------------.
| yyabortlab -- YYABORT comes here.  |
`-----------------------------------*/
yyabortlab:
  yyresult = 1;
  goto yyreturn;

#if !defined(yyoverflow) || YYERROR_VERBOSE
/*-------------------------------------------------.
| yyexhaustedlab -- memory exhaustion comes here.  |
`-------------------------------------------------*/
yyexhaustedlab:
  yyerror (YY_("memory exhausted"));
  yyresult = 2;
  /* Fall through.  */
#endif

yyreturn:
  if (yychar != YYEMPTY)
     yydestruct ("Cleanup: discarding lookahead",
		 yytoken, &yylval);
  /* Do not reclaim the symbols of the rule which action triggered
     this YYABORT or YYACCEPT.  */
  YYPOPSTACK (yylen);
  YY_STACK_PRINT (yyss, yyssp);
  while (yyssp != yyss)
    {
      yydestruct ("Cleanup: popping",
		  yystos[*yyssp], yyvsp);
      YYPOPSTACK (1);
    }
#ifndef yyoverflow
  if (yyss != yyssa)
    YYSTACK_FREE (yyss);
#endif
#if YYERROR_VERBOSE
  if (yymsg != yymsgbuf)
    YYSTACK_FREE (yymsg);
#endif
  /* Make sure YYID is used.  */
  return YYID (yyresult);
}



/* Line 1675 of yacc.c  */
#line 431 "parser.y"

/*=========================================================================
MAIN
=========================================================================*/
main( int argc, char *argv[] )
{ 
	extern FILE *yyin;
	++argv; --argc;
	FILE * f_temp;
	f_temp = fopen("temp.txt", "w");
	fprintf(f_temp, argv[0]);
	fclose(f_temp);
	yyin = fopen( argv[0], "r" );	
	/*yydebug = 1;*/
	errors = 0;
	yyparse ();
	//debug();
	if ( errors == 0 )
	{ 
		fetch_execute_cycle();
	}		
	remove("temp.txt");
}
/**************************** End Grammar File ***************************/