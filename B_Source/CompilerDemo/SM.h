/***************************************************************************
Stack Machine
***************************************************************************/
/*=========================================================================
DECLARATIONS
=========================================================================*/
/* OPERATIONS: Internal Representation */
enum code_ops { HALT, STORE, JMP_FALSE, GOTO,
	DATA, LD_INT, LD_VAR, LD_DOU, LD_STR, LD_CHR, LD_BOL,
	READ_INT, WRITE_INT,
	READ_DOU, WRITE_DOU,
	READ_STR, WRITE_STR,
	READ_CHR, WRITE_CHR,
	READ_BOL, WRITE_BOL,
	LT, EQ, GT, ADD, SUB, MULT, DIV, PWR };
/* OPERATIONS: External Representation */
char *op_name[] = {"halt", "store", "jmp_false", "goto",
	"data", "ld_int", "ld_var", "ld_dou", "ld_str", "ld_chr", "ld_bol",
	"in_int", "out_int",
	"in_dou", "out_dou",
	"in_str", "out_str",
	"in_chr", "out_chr",
	"in_bol", "out_bol",
	"lt", "eq", "gt", "add", "sub", "mult", "div", "pwr" };

enum type_code{ INT , DOU, STR, CHR, BOL};
struct mystack
{
	enum type_code type; 
	int int_val;
	double dou_val;
	char chr_val;
	char str_val[256];
	int bol_val;
};


struct instruction
{
	enum code_ops op;
	struct mystack arg;
};

/* CODE Array */
struct instruction code[999];
/* RUN-TIME Stack */
//double stack[999];

struct mystack stack[999];

/*-------------------------------------------------------------------------
Registers
-------------------------------------------------------------------------*/
int pc = 0;
struct instruction ir;
int ar = 0;
int top = 0;
char ch;
/*=========================================================================
Fetch Execute Cycle
=========================================================================*/
void fetch_execute_cycle()
{ 
	do 
	{ 
		/*printf( "PC = %3d IR.arg = %8d AR = %3d Top = %3d,%8d\n",
		pc, ir.arg, ar, top, stack[top]); */
		/* Fetch */
		ir = code[pc++];
		/* Execute */
		switch (ir.op) 
		{
			case HALT : break;
			case READ_INT : printf( "Input Integer: " );
				fflush(stdout);
				fflush(stdin);
				int temp;
				scanf("%ld",&temp);
				stack[ar+ir.arg.int_val].type = INT;
				stack[ar+ir.arg.int_val].int_val = temp;
				stack[ar+ir.arg.int_val].dou_val = temp; 
				break;
			case READ_DOU : printf( "Input Double: " );
				double temp1;
				fflush(stdout);
				fflush(stdin);
				scanf("%lf",&temp1);
				stack[ar+ir.arg.int_val].type = DOU;
				stack[ar+ir.arg.int_val].dou_val = temp1; 
				stack[ar+ir.arg.int_val].int_val = (int)temp1; 
				//printf("Con veo Tung %f",stack[ar+ir.arg].dou_val);
				break;
			case READ_STR : printf( "Input String: " );
				char temp2[256];
				fflush(stdout);
				fflush(stdin);
				scanf("%[^\n]%*[^\n]",temp2);
				stack[ar+ir.arg.int_val].type = STR;
				strcpy(stack[ar+ir.arg.int_val].str_val,temp2); 
				break;
			case READ_CHR : printf( "Input Character: " );
				char temp3;
				fflush(stdout);
				fflush(stdin);
				scanf("%c",&temp3);
				stack[ar+ir.arg.int_val].type = CHR;
				stack[ar+ir.arg.int_val].chr_val = temp3; 
				break;
			case READ_BOL : printf( "Input Boolean: " );
				fflush(stdout);
				fflush(stdin);
				char temp4[10];
				scanf("%s",temp4);
				stack[ar+ir.arg.int_val].type = BOL;
				if (strcmp(temp4,"true")) stack[ar+ir.arg.int_val].bol_val = 1;
					else 
					if (strcmp(temp4,"false")) stack[ar+ir.arg.int_val].bol_val = 0;
						printf("Loi input kieu boolean sai");
				break;
			case WRITE_INT : printf ("Output Integer: %ld", stack[top--].int_val); break;
			case WRITE_DOU : printf ("Output Double: %f", stack[top--].dou_val); break;
			case WRITE_STR : printf ("Output String: %s", stack[top--].str_val); break;
			case WRITE_CHR : printf ("Output Character: %c", stack[top--].chr_val); break;
			case WRITE_BOL : 
				printf ("Output Boolean: ");
				int temp5 = 1;
				temp5 = stack[top--].bol_val;
				if (temp5 == 1) printf ("true");
					else printf ("false");
				break;
			case STORE : stack[ir.arg.int_val] = stack[top--]; break;
			case JMP_FALSE : 
				if ( stack[top--].int_val == 0 )
					pc = ir.arg.int_val;
				break;
			case GOTO : pc = ir.arg.int_val; break;
			case DATA : top = top + ir.arg.int_val; break;
			case LD_INT : 
				stack[++top].int_val = ir.arg.int_val;
				stack[top].dou_val = ir.arg.int_val; 
				break;
			case LD_DOU : 
				stack[++top].int_val = (int)(ir.arg.dou_val);
				stack[top].dou_val = ir.arg.dou_val; 
				break;
			case LD_STR : 
				strcpy(stack[++top].str_val,ir.arg.str_val);
				break;
			case LD_CHR : 
				stack[++top].chr_val = ir.arg.chr_val;
				break;
			case LD_BOL : 
				stack[++top].bol_val = ir.arg.bol_val;
				break;
			case LD_VAR : stack[++top] = stack[ar+ir.arg.int_val]; break;
			case LT : 
				if ( stack[top-1].dou_val < stack[top].dou_val )
					stack[--top].int_val = 1;
				else stack[--top].int_val = 0;
				break;
			case EQ : 
				if ( stack[top-1].dou_val == stack[top].dou_val )
					stack[--top].int_val = 1;
				else stack[--top].int_val = 0;
				break;
			case GT : 
				if ( stack[top-1].dou_val > stack[top].dou_val )
					stack[--top].int_val = 1;
				else stack[--top].int_val = 0;
				break;
			case ADD : 
				stack[top-1].dou_val = stack[top-1].dou_val + stack[top].dou_val;
				stack[top-1].int_val = (int)(stack[top-1].dou_val); 
				top--;
				break;
			case SUB : 
				stack[top-1].dou_val = stack[top-1].dou_val - stack[top].dou_val;
				stack[top-1].int_val = (int)(stack[top-1].dou_val); 
				top--;
				break;
			case MULT : 
				stack[top-1].dou_val = stack[top-1].dou_val * stack[top].dou_val;
				stack[top-1].int_val = (int)(stack[top-1].dou_val); 
				top--;
				break;
			case DIV : 
				if ((stack[top].type == INT && stack[top].int_val == 0) || (stack[top].type == DOU && stack[top].dou_val == 0))
					 printf("Loi vi chia cho zero\n");
				else {	
					stack[top-1].dou_val = stack[top-1].dou_val / stack[top].dou_val;
					stack[top-1].int_val = (int)(stack[top-1].dou_val); 
					top--; }
				break;
			default : printf( "%sInternal Error: Memory Dump\n" );
			break;
		}
	} while (ir.op != HALT);
}
/*************************** End Stack Machine **************************/
