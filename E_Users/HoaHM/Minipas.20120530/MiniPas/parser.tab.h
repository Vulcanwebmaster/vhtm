
/* A Bison parser, made by GNU Bison 2.4.1.  */

/* Skeleton interface for Bison's Yacc-like parsers in C
   
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
/* Line 1676 of yacc.c  */
#line 96 "parser.y"
semrec
{

/* Line 1676 of yacc.c  */
#line 97 "parser.y"

	int intval; /* Integer values */
	double douval;
	char *strval;
	char *bolval;
	char chrval;
	char *id; /* Identifiers */
	struct lbs *lbls; /* For backpatching */



/* Line 1676 of yacc.c  */
#line 112 "parser.tab.h"
} YYSTYPE;
# define YYSTYPE_IS_TRIVIAL 1
# define yystype YYSTYPE /* obsolescent; will be withdrawn */
# define YYSTYPE_IS_DECLARED 1
#endif

extern YYSTYPE yylval;


