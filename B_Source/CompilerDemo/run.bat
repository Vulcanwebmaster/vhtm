bison -d parser.y
gcc -c parser.tab.c
flex scanner.l
gcc -c  lex.yy.c
gcc -o complier parser.tab.o lex.yy.o -lm