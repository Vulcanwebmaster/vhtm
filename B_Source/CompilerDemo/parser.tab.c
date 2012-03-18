
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
			identifier = getsym(sym_name, "global");
			if ( identifier == 0 )
			{
				errors++;
				printf( "%s", sym_name );
				printf( "%s\n", " is an undeclared identifier" );
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


/* Line 189 of yacc.c  */
#line 157 "parser.tab.c"

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
     SKIP = 268,
     THEN = 269,
     ELSE = 270,
     FI = 271,
     DO = 272,
     END = 273,
     TO = 274,
     INTEGER = 275,
     CONST = 276,
     LET = 277,
     IN = 278,
     STRING = 279,
     DOUBLE = 280,
     CHAR = 281,
     FUNCTION = 282,
     BOOLEAN = 283,
     READ = 284,
     WRITE = 285,
     WRITELINE = 286,
     ARRAY_I = 287,
     ARRAY_C = 288,
     ARRAY_B = 289,
     ARRAY_D = 290,
     ASSGNOP = 291,
     RETURN = 292
   };
#endif



#if ! defined YYSTYPE && ! defined YYSTYPE_IS_DECLARED
typedef union 
/* Line 214 of yacc.c  */
#line 83 "parser.y"
semrec
{

/* Line 214 of yacc.c  */
#line 84 "parser.y"

	int intval; /* Integer values */
	double douval;
	char *strval;
	char *bolval;
	char chrval;
	char *id; /* Identifiers */
	struct lbs *lbls; /* For backpatching */



/* Line 214 of yacc.c  */
#line 245 "parser.tab.c"
} YYSTYPE;
# define YYSTYPE_IS_TRIVIAL 1
# define yystype YYSTYPE /* obsolescent; will be withdrawn */
# define YYSTYPE_IS_DECLARED 1
#endif


/* Copy the second part of user declarations.  */


/* Line 264 of yacc.c  */
#line 257 "parser.tab.c"

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
#define YYLAST   313

/* YYNTOKENS -- Number of terminals.  */
#define YYNTOKENS  55
/* YYNNTS -- Number of nonterminals.  */
#define YYNNTS  40
/* YYNRULES -- Number of rules.  */
#define YYNRULES  111
/* YYNRULES -- Number of states.  */
#define YYNSTATES  229

/* YYTRANSLATE(YYLEX) -- Bison symbol number corresponding to YYLEX.  */
#define YYUNDEFTOK  2
#define YYMAXUTOK   292

#define YYTRANSLATE(YYX)						\
  ((unsigned int) (YYX) <= YYMAXUTOK ? yytranslate[YYX] : YYUNDEFTOK)

/* YYTRANSLATE[YYLEX] -- Bison symbol number corresponding to YYLEX.  */
static const yytype_uint8 yytranslate[] =
{
       0,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,    50,     2,     2,     2,    54,    52,     2,
      46,    47,    40,    39,    45,    38,     2,    41,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,    42,
      48,    49,    51,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,    43,     2,    44,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,     2,     2,     2,     2,     2,     2,
       2,     2,     2,     2,    53,     2,     2,     2,     2,     2,
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
      35,    36,    37
};

#if YYDEBUG
/* YYPRHS[YYN] -- Index of the first RHS symbol of rule number YYN in
   YYRHS.  */
static const yytype_uint16 yyprhs[] =
{
       0,     0,     3,     4,     5,     6,    18,    19,    21,    22,
      24,    25,    28,    33,    38,    43,    48,    53,    60,    67,
      74,    81,    82,    86,    87,    91,    92,    96,    97,   101,
     102,   106,   107,   110,   116,   122,   128,   134,   140,   141,
     144,   145,   157,   158,   161,   165,   169,   173,   177,   181,
     182,   187,   192,   197,   202,   207,   208,   212,   214,   217,
     220,   223,   226,   228,   231,   235,   242,   243,   249,   250,
     258,   259,   260,   269,   270,   271,   279,   280,   281,   293,
     294,   295,   299,   304,   306,   308,   310,   312,   314,   316,
     318,   320,   321,   327,   331,   335,   340,   345,   350,   354,
     358,   362,   366,   370,   374,   378,   382,   385,   387,   391,
     392,   395
};

/* YYRHS -- A `-1'-separated list of the rules' RHS.  */
static const yytype_int8 yyrhs[] =
{
      56,     0,    -1,    -1,    -1,    -1,    61,    57,    62,    60,
      69,    58,    71,    23,    59,    77,    18,    -1,    -1,    21,
      -1,    -1,    22,    -1,    -1,    62,    63,    -1,    20,    64,
       9,    42,    -1,    26,    65,     9,    42,    -1,    25,    67,
       9,    42,    -1,    24,    66,     9,    42,    -1,    28,    68,
       9,    42,    -1,    32,     9,    43,     3,    44,    42,    -1,
      35,     9,    43,     3,    44,    42,    -1,    33,     9,    43,
       3,    44,    42,    -1,    34,     9,    43,     3,    44,    42,
      -1,    -1,    64,     9,    45,    -1,    -1,    65,     9,    45,
      -1,    -1,    66,     9,    45,    -1,    -1,    67,     9,    45,
      -1,    -1,    68,     9,    45,    -1,    -1,    69,    70,    -1,
      20,     9,    36,     3,    42,    -1,    26,     9,    36,     6,
      42,    -1,    25,     9,    36,     4,    42,    -1,    24,     9,
      36,     5,    42,    -1,    28,     9,    36,     7,    42,    -1,
      -1,    71,    72,    -1,    -1,    27,     9,    73,    46,    74,
      47,    61,    62,    23,    77,    18,    -1,    -1,    74,    75,
      -1,    76,    20,     9,    -1,    76,    26,     9,    -1,    76,
      25,     9,    -1,    76,    24,     9,    -1,    76,    28,     9,
      -1,    -1,    76,    20,     9,    45,    -1,    76,    26,     9,
      45,    -1,    76,    25,     9,    45,    -1,    76,    24,     9,
      45,    -1,    76,    28,     9,    45,    -1,    -1,    77,    78,
      42,    -1,    13,    -1,    29,     9,    -1,    30,     9,    -1,
      30,     5,    -1,    30,    91,    -1,    31,    -1,    37,    91,
      -1,     9,    36,    91,    -1,     9,    43,    90,    44,    36,
      91,    -1,    -1,     9,    79,    46,    93,    47,    -1,    -1,
       9,    36,     9,    80,    46,    93,    47,    -1,    -1,    -1,
      10,    91,    81,    14,    77,    82,    87,    18,    -1,    -1,
      -1,    11,    83,    91,    84,    17,    77,    18,    -1,    -1,
      -1,    12,     9,    36,     3,    19,     3,    85,    17,    77,
      86,    18,    -1,    -1,    -1,    15,    88,    77,    -1,     9,
      43,    90,    44,    -1,     3,    -1,     9,    -1,     3,    -1,
       4,    -1,     5,    -1,     6,    -1,     7,    -1,     9,    -1,
      -1,     9,    92,    46,    93,    47,    -1,    91,    48,    91,
      -1,    91,    49,    91,    -1,    91,    50,    49,    91,    -1,
      91,    51,    49,    91,    -1,    91,    48,    49,    91,    -1,
      91,    51,    91,    -1,    91,    39,    91,    -1,    91,    38,
      91,    -1,    91,    40,    91,    -1,    91,    41,    91,    -1,
      91,    52,    91,    -1,    91,    53,    91,    -1,    91,    54,
      91,    -1,    50,    91,    -1,    89,    -1,    46,    91,    47,
      -1,    -1,    93,    94,    -1,    91,    -1
};

/* YYRLINE[YYN] -- source line where rule number YYN was defined.  */
static const yytype_uint16 yyrline[] =
{
       0,   122,   122,   127,   130,   121,   144,   145,   148,   149,
     152,   153,   156,   157,   158,   159,   160,   161,   162,   163,
     164,   167,   168,   171,   172,   175,   176,   179,   180,   183,
     184,   187,   188,   191,   192,   193,   194,   195,   198,   199,
     203,   202,   222,   223,   226,   227,   228,   229,   230,   233,
     234,   235,   236,   237,   238,   241,   242,   245,   246,   247,
     248,   249,   250,   251,   252,   253,   254,   254,   255,   255,
     256,   257,   256,   260,   260,   260,   265,   277,   264,   286,
     287,   287,   290,   292,   293,   296,   297,   298,   299,   300,
     301,   302,   302,   303,   304,   305,   306,   307,   308,   309,
     310,   311,   312,   313,   314,   315,   316,   317,   318,   321,
     322,   325
};
#endif

#if YYDEBUG || YYERROR_VERBOSE || YYTOKEN_TABLE
/* YYTNAME[SYMBOL-NUM] -- String name of the symbol SYMBOL-NUM.
   First, the terminals, then, starting at YYNTOKENS, nonterminals.  */
static const char *const yytname[] =
{
  "$end", "error", "$undefined", "NUMBER_VAL", "NUMBERD_VAL", "STR_VAL",
  "CHR_VAL", "NUMBERB_VAL", "ARRAY_VAL", "IDENTIFIER", "IF", "WHILE",
  "FOR", "SKIP", "THEN", "ELSE", "FI", "DO", "END", "TO", "INTEGER",
  "CONST", "LET", "IN", "STRING", "DOUBLE", "CHAR", "FUNCTION", "BOOLEAN",
  "READ", "WRITE", "WRITELINE", "ARRAY_I", "ARRAY_C", "ARRAY_B", "ARRAY_D",
  "ASSGNOP", "RETURN", "'-'", "'+'", "'*'", "'/'", "';'", "'['", "']'",
  "','", "'('", "')'", "'<'", "'='", "'!'", "'>'", "'&'", "'|'", "'%'",
  "$accept", "program", "$@1", "$@2", "$@3", "constant", "var",
  "declarations", "declaration", "id_seq_int", "id_seq_chr", "id_seq_str",
  "id_seq_dou", "id_seq_bol", "const_declarations", "const_declaration",
  "func_decls", "func_decl", "$@4", "func_var_decls", "func_var_decl",
  "var_seq", "commands", "command", "$@5", "$@6", "$@7", "$@8", "$@9",
  "$@10", "$@11", "$@12", "else_exp", "$@13", "arr_exp", "index", "exp",
  "$@14", "values", "value", 0
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
     285,   286,   287,   288,   289,   290,   291,   292,    45,    43,
      42,    47,    59,    91,    93,    44,    40,    41,    60,    61,
      33,    62,    38,   124,    37
};
# endif

/* YYR1[YYN] -- Symbol number of symbol that rule YYN derives.  */
static const yytype_uint8 yyr1[] =
{
       0,    55,    57,    58,    59,    56,    60,    60,    61,    61,
      62,    62,    63,    63,    63,    63,    63,    63,    63,    63,
      63,    64,    64,    65,    65,    66,    66,    67,    67,    68,
      68,    69,    69,    70,    70,    70,    70,    70,    71,    71,
      73,    72,    74,    74,    75,    75,    75,    75,    75,    76,
      76,    76,    76,    76,    76,    77,    77,    78,    78,    78,
      78,    78,    78,    78,    78,    78,    79,    78,    80,    78,
      81,    82,    78,    83,    84,    78,    85,    86,    78,    87,
      88,    87,    89,    90,    90,    91,    91,    91,    91,    91,
      91,    92,    91,    91,    91,    91,    91,    91,    91,    91,
      91,    91,    91,    91,    91,    91,    91,    91,    91,    93,
      93,    94
};

/* YYR2[YYN] -- Number of symbols composing right hand side of rule YYN.  */
static const yytype_uint8 yyr2[] =
{
       0,     2,     0,     0,     0,    11,     0,     1,     0,     1,
       0,     2,     4,     4,     4,     4,     4,     6,     6,     6,
       6,     0,     3,     0,     3,     0,     3,     0,     3,     0,
       3,     0,     2,     5,     5,     5,     5,     5,     0,     2,
       0,    11,     0,     2,     3,     3,     3,     3,     3,     0,
       4,     4,     4,     4,     4,     0,     3,     1,     2,     2,
       2,     2,     1,     2,     3,     6,     0,     5,     0,     7,
       0,     0,     8,     0,     0,     7,     0,     0,    11,     0,
       0,     3,     4,     1,     1,     1,     1,     1,     1,     1,
       1,     0,     5,     3,     3,     4,     4,     4,     3,     3,
       3,     3,     3,     3,     3,     3,     2,     1,     3,     0,
       2,     1
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
      18,     0,     0,     0,     0,     0,    55,    40,    33,    36,
      35,    34,    37,     0,     0,    66,     0,    73,     0,    57,
       5,     0,     0,    62,     0,     0,    42,     0,     0,     0,
      85,    86,    87,    88,    89,    90,     0,     0,   107,    70,
       0,     0,    58,    87,    90,    61,    63,    56,    49,    90,
      64,    83,    84,     0,   109,     0,     0,     0,   106,     0,
       0,     0,     0,     0,     0,     0,     0,     0,     0,     0,
       0,    74,     0,     8,    43,     0,     0,     0,     0,     0,
     109,   108,   100,    99,   101,   102,     0,    93,    94,     0,
       0,    98,   103,   104,   105,    55,     0,     0,    10,     0,
       0,     0,     0,     0,   109,     0,    67,   111,   110,    82,
       0,    97,    95,    96,    71,    55,     0,     0,    44,    47,
      46,    45,    48,     0,    65,    92,    79,     0,    76,    55,
      50,    53,    52,    51,    54,    69,    80,     0,    75,     0,
       0,    55,    72,    55,    41,    81,    77,     0,    78
};

/* YYDEFGOTO[NTERM-NUM].  */
static const yytype_int16 yydefgoto[] =
{
      -1,     2,     5,    43,    86,    17,     3,     6,    18,    19,
      22,    20,    21,    23,    28,    44,    64,    76,    94,   128,
     154,   155,    93,   105,   109,   156,   150,   206,   120,   176,
     219,   227,   217,   221,   118,   133,   187,   136,   158,   188
};

/* YYPACT[STATE-NUM] -- Index in YYTABLE of the portion describing
   STATE-NUM.  */
#define YYPACT_NINF -161
static const yytype_int16 yypact[] =
{
     -18,  -161,    23,  -161,  -161,  -161,   247,  -161,  -161,  -161,
    -161,  -161,  -161,     8,    25,    32,    56,  -161,  -161,    66,
      67,    69,    72,    82,   -13,   -11,    49,    50,   152,   -40,
     -23,    17,    24,    35,    91,    92,    93,    96,    98,   105,
     112,   114,   115,  -161,  -161,  -161,  -161,  -161,  -161,  -161,
    -161,  -161,  -161,  -161,  -161,    85,    86,    95,    97,    64,
      89,    90,   101,   104,    -9,   100,   102,   108,   109,   140,
     142,   144,   147,   148,  -161,   145,  -161,  -161,  -161,  -161,
    -161,   116,   118,   119,   120,   127,  -161,  -161,  -161,  -161,
    -161,  -161,  -161,   155,   111,   -33,   106,  -161,   161,  -161,
    -161,   162,   113,  -161,   106,   132,  -161,   129,    -2,   135,
    -161,  -161,  -161,  -161,  -161,   139,   106,   106,  -161,   212,
     106,   157,  -161,   141,   -30,   212,   212,  -161,   156,    21,
     212,  -161,  -161,   150,  -161,    -2,   149,   195,   212,   106,
     106,   106,   106,    22,   106,   153,    33,   106,   106,   106,
     190,   212,   202,   -18,  -161,   196,   177,   191,    51,   182,
    -161,  -161,   252,   252,   259,   259,   106,   212,   212,   106,
     106,   212,   212,   212,   212,  -161,   211,   210,  -161,   228,
     230,   231,   232,   245,  -161,   106,  -161,   212,  -161,  -161,
      81,   212,   212,   212,   201,  -161,   253,   263,   213,   214,
     224,   225,   229,    99,   212,  -161,   240,   178,  -161,  -161,
    -161,  -161,  -161,  -161,  -161,  -161,  -161,   239,  -161,   260,
     188,  -161,  -161,  -161,  -161,   201,   201,   258,  -161
};

/* YYPGOTO[NTERM-NUM].  */
static const yytype_int16 yypgoto[] =
{
    -161,  -161,  -161,  -161,  -161,  -161,   125,   107,  -161,  -161,
    -161,  -161,  -161,  -161,  -161,  -161,  -161,  -161,  -161,  -161,
    -161,  -161,  -160,  -161,  -161,  -161,  -161,  -161,  -161,  -161,
    -161,  -161,  -161,  -161,  -161,   159,   -96,  -161,  -151,  -161
};

/* YYTABLE[YYPACT[STATE-NUM]].  What to do in state STATE-NUM.  If
   positive, shift that token.  If negative, reduce the rule which
   number is the opposite.  If zero, do what YYDEFACT says.
   If YYTABLE_NINF, syntax error.  */
#define YYTABLE_NINF -92
static const yytype_int16 yytable[] =
{
     119,   131,    45,   107,     1,    46,   125,   132,   126,   190,
     108,   130,   -59,   135,    74,   194,   -91,    24,    75,    47,
     137,   138,    48,     4,   151,   110,   111,   112,   113,   114,
      34,   115,    35,   203,    25,   207,   110,   111,   112,   113,
     114,    26,   115,   162,   163,   164,   165,   167,   168,   220,
     171,   172,   173,   174,   110,   111,   112,   113,   114,    49,
     115,   225,    50,   226,   135,    27,    51,   -68,   116,    52,
     191,   166,   117,   192,   193,    29,    30,    53,    31,   116,
      54,    32,   170,   117,   110,   111,   112,   113,   114,   204,
     115,    33,    36,    37,    55,    56,    57,   116,   186,    58,
      69,   117,   110,   111,   112,   113,   114,    59,   115,   110,
     111,   112,   113,   114,    60,   115,   110,   111,   123,   113,
     114,    61,   124,    62,    63,    70,    71,   116,   205,    65,
      66,   117,   110,   111,   112,   113,   114,    72,   129,    67,
      73,    68,    77,    81,    78,   116,   215,    82,    83,   117,
      79,    80,   116,    84,    87,    85,   117,   106,    88,   116,
      89,    90,    91,   117,    95,    96,    97,    98,    99,    92,
     121,   122,    38,   100,   127,   116,    39,    40,    41,   117,
      42,   134,   135,   -60,   101,   102,   103,    95,    96,    97,
      98,    99,   104,   152,   157,   160,   218,    95,    96,    97,
      98,    99,   169,   153,   175,   177,   224,   101,   102,   103,
      95,    96,    97,    98,    99,   104,   179,   101,   102,   103,
     180,   181,   182,   184,   183,   104,   189,   185,   195,   196,
     101,   102,   103,   139,   140,   141,   142,   198,   104,   199,
     200,   201,   161,   143,   144,   145,   146,   147,   148,   149,
     139,   140,   141,   142,   202,   216,   208,   222,   210,   211,
     143,   144,   145,   146,   147,   148,   149,     7,     8,   212,
     213,     9,    10,    11,   214,    12,   228,   223,   178,    13,
      14,    15,    16,     7,     0,   197,   209,     9,    10,    11,
       0,    12,   141,   142,   159,    13,    14,    15,    16,     0,
     143,   144,   145,   146,   147,   148,   149,   143,   144,   145,
     146,   147,   148,   149
};

static const yytype_int16 yycheck[] =
{
      96,     3,    42,    36,    22,    45,   102,     9,   104,   160,
      43,   107,    42,    43,    23,   175,    46,     9,    27,    42,
     116,   117,    45,     0,   120,     3,     4,     5,     6,     7,
      43,     9,    43,   184,     9,   195,     3,     4,     5,     6,
       7,     9,     9,   139,   140,   141,   142,   143,   144,   209,
     146,   147,   148,   149,     3,     4,     5,     6,     7,    42,
       9,   221,    45,   223,    43,     9,    42,    46,    46,    45,
     166,    49,    50,   169,   170,     9,     9,    42,     9,    46,
      45,     9,    49,    50,     3,     4,     5,     6,     7,   185,
       9,     9,    43,    43,     3,     3,     3,    46,    47,     3,
      36,    50,     3,     4,     5,     6,     7,     9,     9,     3,
       4,     5,     6,     7,     9,     9,     3,     4,     5,     6,
       7,     9,     9,     9,     9,    36,    36,    46,    47,    44,
      44,    50,     3,     4,     5,     6,     7,    36,     9,    44,
      36,    44,    42,     3,    42,    46,    47,     5,     4,    50,
      42,    42,    46,     6,     9,     7,    50,    46,    42,    46,
      42,    42,    42,    50,     9,    10,    11,    12,    13,    42,
       9,     9,    20,    18,    42,    46,    24,    25,    26,    50,
      28,    46,    43,    42,    29,    30,    31,     9,    10,    11,
      12,    13,    37,    36,    44,    46,    18,     9,    10,    11,
      12,    13,    49,    47,    14,     3,    18,    29,    30,    31,
       9,    10,    11,    12,    13,    37,    20,    29,    30,    31,
      24,    25,    26,    46,    28,    37,    44,    36,    17,    19,
      29,    30,    31,    38,    39,    40,    41,     9,    37,     9,
       9,     9,    47,    48,    49,    50,    51,    52,    53,    54,
      38,    39,    40,    41,     9,    15,     3,    18,    45,    45,
      48,    49,    50,    51,    52,    53,    54,    20,    21,    45,
      45,    24,    25,    26,    45,    28,    18,    17,   153,    32,
      33,    34,    35,    20,    -1,   178,    23,    24,    25,    26,
      -1,    28,    40,    41,   135,    32,    33,    34,    35,    -1,
      48,    49,    50,    51,    52,    53,    54,    48,    49,    50,
      51,    52,    53,    54
};

/* YYSTOS[STATE-NUM] -- The (internal number of the) accessing
   symbol of state STATE-NUM.  */
static const yytype_uint8 yystos[] =
{
       0,    22,    56,    61,     0,    57,    62,    20,    21,    24,
      25,    26,    28,    32,    33,    34,    35,    60,    63,    64,
      66,    67,    65,    68,     9,     9,     9,     9,    69,     9,
       9,     9,     9,     9,    43,    43,    43,    43,    20,    24,
      25,    26,    28,    58,    70,    42,    45,    42,    45,    42,
      45,    42,    45,    42,    45,     3,     3,     3,     3,     9,
       9,     9,     9,     9,    71,    44,    44,    44,    44,    36,
      36,    36,    36,    36,    23,    27,    72,    42,    42,    42,
      42,     3,     5,     4,     6,     7,    59,     9,    42,    42,
      42,    42,    42,    77,    73,     9,    10,    11,    12,    13,
      18,    29,    30,    31,    37,    78,    46,    36,    43,    79,
       3,     4,     5,     6,     7,     9,    46,    50,    89,    91,
      83,     9,     9,     5,     9,    91,    91,    42,    74,     9,
      91,     3,     9,    90,    46,    43,    92,    91,    91,    38,
      39,    40,    41,    48,    49,    50,    51,    52,    53,    54,
      81,    91,    36,    47,    75,    76,    80,    44,    93,    90,
      46,    47,    91,    91,    91,    91,    49,    91,    91,    49,
      49,    91,    91,    91,    91,    14,    84,     3,    61,    20,
      24,    25,    26,    28,    46,    36,    47,    91,    94,    44,
      93,    91,    91,    91,    77,    17,    19,    62,     9,     9,
       9,     9,     9,    93,    91,    47,    82,    77,     3,    23,
      45,    45,    45,    45,    45,    47,    15,    87,    18,    85,
      77,    88,    18,    17,    18,    77,    77,    86,    18
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
#line 122 "parser.y"
    {
	function_name = "global";
;}
    break;

  case 3:

/* Line 1455 of yacc.c  */
#line 127 "parser.y"
    { if (start_const != -1) end_const =  gen_label();;}
    break;

  case 4:

/* Line 1455 of yacc.c  */
#line 130 "parser.y"
    { 
	gen_code( DATA, data_location() - 1 );
	if (function_name != NULL) free(function_name);
	function_name = "main";
	main_start = gen_label() - 1;
;}
    break;

  case 5:

/* Line 1455 of yacc.c  */
#line 138 "parser.y"
    { 
	gen_code( HALT, 0 ); 
	YYACCEPT; 
;}
    break;

  case 7:

/* Line 1455 of yacc.c  */
#line 145 "parser.y"
    { start_const = gen_label(); ;}
    break;

  case 12:

/* Line 1455 of yacc.c  */
#line 156 "parser.y"
    { install( (yyvsp[(3) - (4)].id) , function_name, INT, -1); ;}
    break;

  case 13:

/* Line 1455 of yacc.c  */
#line 157 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, CHR, -1 ); ;}
    break;

  case 14:

/* Line 1455 of yacc.c  */
#line 158 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, DOU, -1 ); ;}
    break;

  case 15:

/* Line 1455 of yacc.c  */
#line 159 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, STR, -1 ); ;}
    break;

  case 16:

/* Line 1455 of yacc.c  */
#line 160 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, BOL, -1 ); ;}
    break;

  case 17:

/* Line 1455 of yacc.c  */
#line 161 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_I, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 18:

/* Line 1455 of yacc.c  */
#line 162 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_D, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 19:

/* Line 1455 of yacc.c  */
#line 163 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_C, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 20:

/* Line 1455 of yacc.c  */
#line 164 "parser.y"
    {install( (yyvsp[(2) - (6)].id), function_name, ARR_B, (yyvsp[(4) - (6)].intval) ); ;}
    break;

  case 22:

/* Line 1455 of yacc.c  */
#line 168 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, INT, -1 ); ;}
    break;

  case 24:

/* Line 1455 of yacc.c  */
#line 172 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, CHR, -1 ); ;}
    break;

  case 26:

/* Line 1455 of yacc.c  */
#line 176 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, STR, -1 ); ;}
    break;

  case 28:

/* Line 1455 of yacc.c  */
#line 180 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, DOU, -1 ); ;}
    break;

  case 30:

/* Line 1455 of yacc.c  */
#line 184 "parser.y"
    { install( (yyvsp[(2) - (3)].id), function_name, BOL, -1 ); ;}
    break;

  case 33:

/* Line 1455 of yacc.c  */
#line 191 "parser.y"
    { install( (yyvsp[(2) - (5)].id) , "global", C_INT, -1); gen_code( LD_INT, (yyvsp[(4) - (5)].intval) ); context_check( STORE, (yyvsp[(2) - (5)].id), function_name );  ;}
    break;

  case 34:

/* Line 1455 of yacc.c  */
#line 192 "parser.y"
    { install( (yyvsp[(2) - (5)].id), function_name, C_CHR, -1 ); gen_code_char ( LD_CHR, (yyvsp[(4) - (5)].chrval)); context_check( STORE, (yyvsp[(2) - (5)].id), function_name );  ;}
    break;

  case 35:

/* Line 1455 of yacc.c  */
#line 193 "parser.y"
    { install( (yyvsp[(2) - (5)].id), function_name, C_DOU, -1 ); gen_code_double( LD_DOU, (yyvsp[(4) - (5)].douval) ); context_check( STORE, (yyvsp[(2) - (5)].id), function_name );  ;}
    break;

  case 36:

/* Line 1455 of yacc.c  */
#line 194 "parser.y"
    { install( (yyvsp[(2) - (5)].id), function_name, C_STR, -1 ); gen_code_string ( LD_STR, (yyvsp[(4) - (5)].strval)); context_check( STORE, (yyvsp[(2) - (5)].id), function_name ); ;}
    break;

  case 37:

/* Line 1455 of yacc.c  */
#line 195 "parser.y"
    { install( (yyvsp[(2) - (5)].id), function_name, C_BOL, -1 );  gen_code_boolean (LD_BOL, (yyvsp[(4) - (5)].bolval)); context_check( STORE, (yyvsp[(2) - (5)].id), function_name);;}
    break;

  case 40:

/* Line 1455 of yacc.c  */
#line 203 "parser.y"
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
#line 215 "parser.y"
    {
	if (function_name != NULL) free(function_name);
	function_name = "main";
	gen_code(END_CAL, 0);
;}
    break;

  case 44:

/* Line 1455 of yacc.c  */
#line 226 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, INT, -1 ); gen_code( LD_INT, 0 ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 45:

/* Line 1455 of yacc.c  */
#line 227 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 46:

/* Line 1455 of yacc.c  */
#line 228 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, DOU, -1 ); gen_code_double( LD_DOU, 0 ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 47:

/* Line 1455 of yacc.c  */
#line 229 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 48:

/* Line 1455 of yacc.c  */
#line 230 "parser.y"
    { install( (yyvsp[(3) - (3)].id), function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, (yyvsp[(3) - (3)].id), function_name );;}
    break;

  case 50:

/* Line 1455 of yacc.c  */
#line 234 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, INT, -1 ); gen_code( LD_INT, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 51:

/* Line 1455 of yacc.c  */
#line 235 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, CHR, -1 ); gen_code_char( LD_CHR, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 52:

/* Line 1455 of yacc.c  */
#line 236 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, DOU, -1 ); gen_code_double( LD_DOU, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 53:

/* Line 1455 of yacc.c  */
#line 237 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, STR, -1 ); gen_code_string( LD_STR, "" ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 54:

/* Line 1455 of yacc.c  */
#line 238 "parser.y"
    { install( (yyvsp[(3) - (4)].id), function_name, BOL, -1 ); gen_code_boolean( LD_BOL, 0 ); context_check( STORE, (yyvsp[(3) - (4)].id), function_name );;}
    break;

  case 58:

/* Line 1455 of yacc.c  */
#line 246 "parser.y"
    { context_check( READ_VAR, (yyvsp[(2) - (2)].id), function_name); ;}
    break;

  case 59:

/* Line 1455 of yacc.c  */
#line 247 "parser.y"
    { context_check( WRITE_VAR, (yyvsp[(2) - (2)].id), function_name); ;}
    break;

  case 60:

/* Line 1455 of yacc.c  */
#line 248 "parser.y"
    { gen_code_string ( WRITE_STR, (yyvsp[(2) - (2)].strval) );;}
    break;

  case 61:

/* Line 1455 of yacc.c  */
#line 249 "parser.y"
    { gen_code ( WRITE_ALL, 0 );;}
    break;

  case 62:

/* Line 1455 of yacc.c  */
#line 250 "parser.y"
    { gen_code ( WRITE_LINE, 0); ;}
    break;

  case 63:

/* Line 1455 of yacc.c  */
#line 251 "parser.y"
    { gen_code(END_CAL, 0); ;}
    break;

  case 64:

/* Line 1455 of yacc.c  */
#line 252 "parser.y"
    { context_check( STORE, (yyvsp[(1) - (3)].id), function_name ); ;}
    break;

  case 65:

/* Line 1455 of yacc.c  */
#line 253 "parser.y"
    { context_check( INT_ARR_STORE, (yyvsp[(1) - (6)].id), function_name ); ;}
    break;

  case 66:

/* Line 1455 of yacc.c  */
#line 254 "parser.y"
    {gen_code(BEGIN_CAL,0);;}
    break;

  case 67:

/* Line 1455 of yacc.c  */
#line 254 "parser.y"
    { context_check(CAL, (yyvsp[(1) - (5)].id), "global");;}
    break;

  case 68:

/* Line 1455 of yacc.c  */
#line 255 "parser.y"
    {gen_code(BEGIN_CAL,0);;}
    break;

  case 69:

/* Line 1455 of yacc.c  */
#line 255 "parser.y"
    { context_check(CAL, (yyvsp[(3) - (7)].id), "global"); context_check( STORE, (yyvsp[(1) - (7)].id), function_name ); ;}
    break;

  case 70:

/* Line 1455 of yacc.c  */
#line 256 "parser.y"
    { if_var = (struct lbs *) newlblrec(); if_var->for_jmp_false = reserve_loc(); ;}
    break;

  case 71:

/* Line 1455 of yacc.c  */
#line 257 "parser.y"
    { if_var->for_goto = reserve_loc(); ;}
    break;

  case 72:

/* Line 1455 of yacc.c  */
#line 259 "parser.y"
    { back_patch( if_var->for_goto, GOTO, gen_label() ); ;}
    break;

  case 73:

/* Line 1455 of yacc.c  */
#line 260 "parser.y"
    { (yyvsp[(1) - (1)].lbls) = (struct lbs *) newlblrec(); (yyvsp[(1) - (1)].lbls)->for_goto = gen_label(); ;}
    break;

  case 74:

/* Line 1455 of yacc.c  */
#line 260 "parser.y"
    { (yyvsp[(1) - (3)].lbls)->for_jmp_false = reserve_loc(); ;}
    break;

  case 75:

/* Line 1455 of yacc.c  */
#line 263 "parser.y"
    { gen_code( GOTO, (yyvsp[(1) - (7)].lbls)->for_goto ); back_patch( (yyvsp[(1) - (7)].lbls)->for_jmp_false, JMP_FALSE, gen_label() ); ;}
    break;

  case 76:

/* Line 1455 of yacc.c  */
#line 265 "parser.y"
    {
	gen_code( LD_INT, (yyvsp[(4) - (6)].intval) ); 
	context_check( STORE, (yyvsp[(2) - (6)].id), function_name );
	(yyvsp[(1) - (6)].lbls) = (struct lbs *) newlblrec(); 
	(yyvsp[(1) - (6)].lbls)->for_goto = gen_label();
	context_check( LD_VAR, (yyvsp[(2) - (6)].id), function_name ); 
	gen_code( LD_INT, (yyvsp[(6) - (6)].intval) );
	gen_code( LTEQ, 0 );
	(yyvsp[(1) - (6)].lbls)->for_jmp_false = reserve_loc();
;}
    break;

  case 77:

/* Line 1455 of yacc.c  */
#line 277 "parser.y"
    {
	context_check( LD_VAR, (yyvsp[(2) - (9)].id), function_name );
	gen_code( LD_INT, 1 );
	gen_code( ADD, 0 );
	context_check( STORE, (yyvsp[(2) - (9)].id), function_name);
;}
    break;

  case 78:

/* Line 1455 of yacc.c  */
#line 283 "parser.y"
    { gen_code( GOTO, (yyvsp[(1) - (11)].lbls)->for_goto ); back_patch( (yyvsp[(1) - (11)].lbls)->for_jmp_false, JMP_FALSE, gen_label() ); ;}
    break;

  case 79:

/* Line 1455 of yacc.c  */
#line 286 "parser.y"
    { back_patch( if_var->for_jmp_false,JMP_FALSE,gen_label() );;}
    break;

  case 80:

/* Line 1455 of yacc.c  */
#line 287 "parser.y"
    { back_patch( if_var->for_jmp_false,JMP_FALSE,gen_label() ); ;}
    break;

  case 82:

/* Line 1455 of yacc.c  */
#line 290 "parser.y"
    {context_check( ARR_PART, (yyvsp[(1) - (4)].id), function_name );;}
    break;

  case 83:

/* Line 1455 of yacc.c  */
#line 292 "parser.y"
    { gen_code( LD_INT, (yyvsp[(1) - (1)].intval) ); ;}
    break;

  case 84:

/* Line 1455 of yacc.c  */
#line 293 "parser.y"
    { context_check( LD_VAR, (yyvsp[(1) - (1)].id), function_name ); ;}
    break;

  case 85:

/* Line 1455 of yacc.c  */
#line 296 "parser.y"
    { gen_code( LD_INT, (yyvsp[(1) - (1)].intval) ); ;}
    break;

  case 86:

/* Line 1455 of yacc.c  */
#line 297 "parser.y"
    { gen_code_double( LD_DOU, (yyvsp[(1) - (1)].douval) ); ;}
    break;

  case 87:

/* Line 1455 of yacc.c  */
#line 298 "parser.y"
    { gen_code_string ( LD_STR, (yyvsp[(1) - (1)].strval)); ;}
    break;

  case 88:

/* Line 1455 of yacc.c  */
#line 299 "parser.y"
    { gen_code_char ( LD_CHR, (yyvsp[(1) - (1)].chrval)); ;}
    break;

  case 89:

/* Line 1455 of yacc.c  */
#line 300 "parser.y"
    { gen_code_boolean (LD_BOL, (yyvsp[(1) - (1)].bolval)); ;}
    break;

  case 90:

/* Line 1455 of yacc.c  */
#line 301 "parser.y"
    { context_check( LD_VAR, (yyvsp[(1) - (1)].id), function_name ); ;}
    break;

  case 91:

/* Line 1455 of yacc.c  */
#line 302 "parser.y"
    {gen_code(BEGIN_CAL,0);;}
    break;

  case 92:

/* Line 1455 of yacc.c  */
#line 302 "parser.y"
    { context_check(CAL, (yyvsp[(1) - (5)].id), "global");;}
    break;

  case 93:

/* Line 1455 of yacc.c  */
#line 303 "parser.y"
    { gen_code( LT, 0 ); ;}
    break;

  case 94:

/* Line 1455 of yacc.c  */
#line 304 "parser.y"
    { gen_code( EQ, 0 ); ;}
    break;

  case 95:

/* Line 1455 of yacc.c  */
#line 305 "parser.y"
    { gen_code( NEQ, 0 ); ;}
    break;

  case 96:

/* Line 1455 of yacc.c  */
#line 306 "parser.y"
    { gen_code( GTEQ, 0 ); ;}
    break;

  case 97:

/* Line 1455 of yacc.c  */
#line 307 "parser.y"
    { gen_code( LTEQ, 0 ); ;}
    break;

  case 98:

/* Line 1455 of yacc.c  */
#line 308 "parser.y"
    { gen_code( GT, 0 ); ;}
    break;

  case 99:

/* Line 1455 of yacc.c  */
#line 309 "parser.y"
    { gen_code( ADD, 0 ); ;}
    break;

  case 100:

/* Line 1455 of yacc.c  */
#line 310 "parser.y"
    { gen_code( SUB, 0 ); ;}
    break;

  case 101:

/* Line 1455 of yacc.c  */
#line 311 "parser.y"
    { gen_code( MULT, 0 ); ;}
    break;

  case 102:

/* Line 1455 of yacc.c  */
#line 312 "parser.y"
    { gen_code( DIV, 0 ); ;}
    break;

  case 103:

/* Line 1455 of yacc.c  */
#line 313 "parser.y"
    { gen_code( AND, 0 ); ;}
    break;

  case 104:

/* Line 1455 of yacc.c  */
#line 314 "parser.y"
    { gen_code( OR, 0 ); ;}
    break;

  case 105:

/* Line 1455 of yacc.c  */
#line 315 "parser.y"
    { gen_code( MOD, 0 );;}
    break;

  case 106:

/* Line 1455 of yacc.c  */
#line 316 "parser.y"
    { gen_code( NOT, 0 );;}
    break;



/* Line 1455 of yacc.c  */
#line 2294 "parser.tab.c"
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
#line 328 "parser.y"

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
	if ( errors == 0 )
	{ 
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
