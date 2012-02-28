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
	READ_BOL, WRITE_BOL, WRITE_LINE,
	LT, EQ, NEQ, GT, ADD, SUB, MULT, DIV, AND, OR, ARR_PART, INT_ARR_STORE, DOU_ARR_STORE, CHR_ARR_STORE, BOL_ARR_STORE, CAL, END_CAL, RET,
	BOL_COMP, BOL_ONLY };

struct mystack
{
	enum type_code type; 
	int int_val;
	double dou_val;
	char chr_val;
	char str_val[256];
	int bol_val;
	int *arr_int_val;
	double *arr_dou_val;
	char *arr_chr_val;
	int *arr_bol_val;
	int length;
};

struct instruction
{
	enum code_ops op;
	struct mystack arg;
};

/* CODE Array */
struct instruction code[5000];
/* RUN-TIME Stack */
struct mystack stack[5000];

/*-------------------------------------------------------------------------
Registers
-------------------------------------------------------------------------*/
int pc = 0;
struct instruction ir;
int ar = 0;
int top = 0;
int stack_call[1000];
int top_call = 0;
int start_const = -1;
int end_const = -1;
int main_start = 0;

/*=========================================================================
Fetch Execute Cycle
=========================================================================*/
void fetch_execute_cycle()
{
	if (start_const >= 0) 
		pc = start_const;
		else pc = main_start;
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
			case READ_INT :
				fflush(stdout);
				fflush(stdin);
				int temp;
				scanf("%ld",&temp);
				stack[ar+ir.arg.int_val].type = INT;
				stack[ar+ir.arg.int_val].int_val = temp;
				stack[ar+ir.arg.int_val].dou_val = temp; 
				break;
			case READ_DOU :
				fflush(stdout);
				fflush(stdin);
				double temp1;
				scanf("%lf",&temp1);
				stack[ar+ir.arg.int_val].type = DOU;
				stack[ar+ir.arg.int_val].dou_val = temp1; 
				stack[ar+ir.arg.int_val].int_val = (int)temp1; 
				break;
			case READ_STR :
				fflush(stdout);
				fflush(stdin);
				char temp2[256];
				scanf("%[^\n]%*[^\n]",temp2);
				stack[ar+ir.arg.int_val].type = STR;
				strcpy(stack[ar+ir.arg.int_val].str_val,temp2); 
				break;
			case READ_CHR :
				fflush(stdout);
				fflush(stdin);
				char temp3;
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
			case WRITE_INT : printf ("%ld", stack[top--].int_val); break;
			case WRITE_DOU : printf ("%f", stack[top--].dou_val); break;
			case WRITE_STR : printf ("%s", stack[top--].str_val); break;
			case WRITE_CHR : printf ("%c", stack[top--].chr_val); break;
			case WRITE_BOL : 
				if (stack[top--].bol_val == 1) 
					printf ("true");
				else 
					printf ("false");
				break;
			case WRITE_LINE :
				printf("\n");
				break;
			case STORE : stack[ir.arg.int_val] = stack[top--]; 
				if (stack[ir.arg.int_val].type == INT) 
					stack[ir.arg.int_val].dou_val = stack[ir.arg.int_val].int_val; 
				break;
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
				//printf("last top: %d ",top);
				//printf("%f ",stack[top - 2].dou_val);
				//printf("%f ",stack[top - 1].dou_val);
				//printf("%f ",stack[top].dou_val);
				if ( stack[top-1].dou_val < stack[top].dou_val )
				{
					stack[--top].int_val = 1;
					stack[top].bol_val = 1;
				}
				else
				{	
					stack[--top].int_val = 0;
					stack[top].bol_val = 0;
				}
				break;
			case EQ : 
				if ( stack[top-1].dou_val == stack[top].dou_val )
				{
					stack[--top].int_val = 1;
					stack[top].bol_val = 1;
				}
				else
				{	
					stack[--top].int_val = 0;
					stack[top].bol_val = 0;
				}
				break;
			case NEQ : 
				if ( stack[top-1].dou_val != stack[top].dou_val )
				{
					stack[--top].int_val = 1;
					stack[top].bol_val = 1;
				}
				else
				{	
					stack[--top].int_val = 0;
					stack[top].bol_val = 0;
				}
				break;
			case GT : 
				if ( stack[top-1].dou_val > stack[top].dou_val )
				{
					stack[--top].int_val = 1;
					stack[top].bol_val = 1;
				}
				else
				{	
					stack[--top].int_val = 0;
					stack[top].bol_val = 0;
				}
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
				else 
				{	
					stack[top-1].dou_val = stack[top-1].dou_val / stack[top].dou_val;
					stack[top-1].int_val = (int)(stack[top-1].dou_val); 
					top--; 
				}
				break;
			case AND :
				if ( stack[top-1].bol_val * stack[top].bol_val == 1 ) 
				{
					stack[--top].int_val = 1;
					stack[top].bol_val = 1;
				}
				else
				{
					stack[--top].int_val = 0;
					stack[top].bol_val = 0;
				}
				break;
			case OR :
				if ( stack[top-1].bol_val + stack[top].bol_val >= 1 )
				{
					stack[--top].int_val = 1;
					stack[top].bol_val = 1;
				}
				else
				{
					stack[--top].int_val = 0;
					stack[top].bol_val = 0;
				}
				break;
			case ARR_PART :
				//printf("top: %d ",top);
				//printf("%d ",stack[top - 2].int_val);
				//printf("%d ",stack[top - 1].int_val);
				//printf("%d ",stack[top].int_val);
				if (ir.arg.type == ARR_I) 
				{
					if (stack[ir.arg.int_val].arr_int_val == NULL) {
						stack[ir.arg.int_val].arr_int_val = (int *) malloc(stack[ir.arg.int_val].length);
					}
					stack[top].int_val = stack[ir.arg.int_val].arr_int_val[stack[top].int_val];
					stack[top].dou_val = stack[top].int_val;
				} else 
				if (ir.arg.type == ARR_D) 
				{
					if (stack[ir.arg.int_val].arr_dou_val == NULL) {
						stack[ir.arg.int_val].arr_dou_val = (double *) malloc(stack[ir.arg.int_val].length);
					}
					stack[top].dou_val = stack[ir.arg.int_val].arr_dou_val[stack[top].int_val];
					stack[top].int_val = stack[top].dou_val;
				} else 
				if (ir.arg.type == ARR_B) 
				{
					if (stack[ir.arg.int_val].arr_bol_val == NULL) {
						stack[ir.arg.int_val].arr_bol_val = (int *) malloc(stack[ir.arg.int_val].length);
					}
					stack[top].bol_val = stack[ir.arg.int_val].arr_bol_val[stack[top].int_val];
				} else
				if (ir.arg.type == ARR_C) 
				{
					if (stack[ir.arg.int_val].arr_chr_val == NULL) {
						stack[ir.arg.int_val].arr_chr_val = (char *) malloc(stack[ir.arg.int_val].length);
					}
					stack[top].chr_val = stack[ir.arg.int_val].arr_chr_val[stack[top].int_val];
				}		
				break;
			case INT_ARR_STORE :
				//printf("top: %d ",top);
				//printf("%d ",stack[top - 2].int_val);
				//printf("%d ",stack[top - 1].int_val);
				//printf("%d ",stack[top].int_val);
				if (stack[ir.arg.int_val].arr_int_val == NULL) {
					stack[ir.arg.int_val].arr_int_val = (int *) malloc(stack[ir.arg.int_val].length);
				}
				stack[ir.arg.int_val].arr_int_val[stack[top-1].int_val] = stack[top].int_val;
				top--;
				break;
			case DOU_ARR_STORE :
				if (stack[ir.arg.int_val].arr_dou_val == NULL) {
					stack[ir.arg.int_val].arr_dou_val = (double *) malloc(stack[ir.arg.int_val].length);
				}
				stack[ir.arg.int_val].arr_dou_val[stack[top-1].int_val] = stack[top].dou_val;
				top--;
				break;
			case CHR_ARR_STORE :
				if (stack[ir.arg.int_val].arr_chr_val == NULL) {
					stack[ir.arg.int_val].arr_chr_val = (char *) malloc(stack[ir.arg.int_val].length);
				}
				stack[ir.arg.int_val].arr_chr_val[stack[top-1].int_val] = stack[top].chr_val;
				top--;
				break;
			case BOL_ARR_STORE :
				if (stack[ir.arg.int_val].arr_bol_val == NULL) {
					stack[ir.arg.int_val].arr_bol_val = (int *) malloc(stack[ir.arg.int_val].length);
				}
				stack[ir.arg.int_val].arr_bol_val[stack[top-1].int_val] = stack[top].bol_val;
				top--;
				break;
			case CAL :
				stack_call[top_call++] = pc;
				pc = ir.arg.length;
				break;
			case END_CAL :
				pc = stack_call[--top_call];
				break;
			case RET :
				
			default : printf( "%sInternal Error: Memory Dump\n" );
			break;
		}
		if (pc == end_const)
		{
			pc = main_start;
		}
	} while (ir.op != HALT);
}
/*************************** End Stack Machine **************************/
