/***************************************************************************
Stack Machine
***************************************************************************/
/*=========================================================================
DECLARATIONS
=========================================================================*/
/* OPERATIONS: Internal Representation */
enum code_ops { HALT, STORE, JMP_FALSE, GOTO,
	DATA, LD_INT, LD_VAR, LD_DOU, LD_STR, LD_CHR, LD_BOL,
	READ_VAR, WRITE_VAR,
	WRITE_STR, WRITE_ALL, WRITE_LINE, BEGIN_CAL,
	LT, EQ, NEQ, GT, LTEQ, GTEQ, ADD, SUB, MULT, DIV, AND, OR, MOD, NOT,
	ARR_PART, INT_ARR_STORE, DOU_ARR_STORE, CHR_ARR_STORE, BOL_ARR_STORE, CAL, END_CAL,
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
	int function;
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
int ar[1000] = {0};
int top = 0;
int stack_call[1000] = {0};
int pre_top[1000] = {0};
int top_call = 0;
int start_const = -1;
int end_const = -1;
int main_start = 0;
int check_const = 0;
enum type_code current_type;
int start_arg = 0;  
int top_index = 0;

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
		if (pc == end_const && check_const == 0)
		{
			pc = main_start;
			check_const = 1;
			check_const = 1;
		}
		ir = code[pc++];
		/* Execute */
		if (ir.function == 1)
		{
			top_index = ar[0];
		}
		else top_index = ar[top_call];
		switch (ir.op) 
		{
			case HALT : break;
			case READ_VAR :
				fflush(stdout);
				fflush(stdin);
				if (ir.arg.type == INT)
				{
					char temp5[256];
					int temp;
					scanf("%[^\n]%*[^\n]",temp5);
					temp = atoi(temp5);
					if (temp == 0 && strcmp(temp5,"0") != 0)
					{
						printf("Loi input kieu integer sai!");
						return;
					}
					else
					{					
						stack[top_index+ir.arg.int_val].type = INT;
						stack[top_index+ir.arg.int_val].int_val = temp;
						stack[top_index+ir.arg.int_val].dou_val = temp;
					}
				} else 
				if (ir.arg.type == DOU)
				{
					char temp6[256];
					double temp1;
					scanf("%[^\n]%*[^\n]",temp6);
					temp1 = atof(temp6);
					if (temp1 == 0.0 && strcmp(temp6,"0.0") != 0)
					{
						printf("Loi input kieu double sai!");
						return;
					}
					else
					{					
						stack[top_index+ir.arg.int_val].type = DOU;
						stack[top_index+ir.arg.int_val].dou_val = temp1; 
						stack[top_index+ir.arg.int_val].int_val = (int)temp1;
					}
				} else 
				if (ir.arg.type == CHR)
				{
					char temp3;
					scanf("%c",&temp3);
					stack[top_index+ir.arg.int_val].type = CHR;
					stack[top_index+ir.arg.int_val].chr_val = temp3;
				} else
				if (ir.arg.type == STR)
				{
					char temp2[256];
					scanf("%[^\n]%*[^\n]",temp2);
					stack[top_index+ir.arg.int_val].type = STR;
					strcpy(stack[top_index+ir.arg.int_val].str_val,temp2);
				} else 
				if (ir.arg.type == BOL)
				{
					char temp4[10];
					scanf("%s",temp4);
					stack[top_index+ir.arg.int_val].type = BOL;
					if (strcmp(temp4,"true")) stack[top_index+ir.arg.int_val].bol_val = 1;
					else 
						if (strcmp(temp4,"false")) stack[top_index+ir.arg.int_val].bol_val = 0;
						else
						{
							printf("Loi input kieu boolean sai!");
							return;
						}
				}
				break;
			case WRITE_STR : 
				fflush(stdout);
				fflush(stdin);
				strcpy(stack[++top].str_val,ir.arg.str_val);
				printf ("%s", stack[top--].str_val); 
				break;
			case WRITE_ALL :
				fflush(stdout);
				fflush(stdin);
				if (current_type == INT)
				{
					printf("%ld",stack[top--].int_val);
				} else 
				if (current_type == DOU)
				{
					printf("%f",stack[top--].dou_val);
				} else 
				if (current_type == CHR)
				{
					printf("%c",stack[top--].chr_val);
				} else 
				if (current_type == STR)
				{
					printf("%s",stack[top--].str_val);
				} else 
				if (current_type == BOL)
				{
					if (stack[top--].bol_val == 1) 
						printf ("true");
						else 
							printf ("false");
				} 
				break;
			case WRITE_VAR : 
				fflush(stdout);
				fflush(stdin);
				if (ir.arg.type == INT)
				{
					printf("%ld",stack[top_index+ir.arg.int_val].int_val);
				} else 
				if (ir.arg.type == DOU)
				{
					printf("%f",stack[top_index+ir.arg.int_val].dou_val);
				} else 
				if (ir.arg.type == CHR)
				{
					printf("%c",stack[top_index+ir.arg.int_val].chr_val);
				} else 
				if (ir.arg.type == STR)
				{
					printf("%s",stack[top_index+ir.arg.int_val].str_val);
				} else 
				if (ir.arg.type == BOL)
				{
					if (stack[top_index+ir.arg.int_val].bol_val == 1) 
						printf ("true");
						else 
							printf ("false");
				}
				break;
			case WRITE_LINE :
				printf("\n");
				break;
			case STORE : 
				//printf("store %d: ",stack[top_index+ir.arg.int_val].int_val);
				stack[top_index+ir.arg.int_val] = stack[top--];
				if (stack[top_index+ir.arg.int_val].type == INT) 
					stack[top_index+ir.arg.int_val].dou_val = stack[top_index+ir.arg.int_val].int_val; 
				break;
			case JMP_FALSE : 
				if ( stack[top--].int_val == 0 )
					pc = ir.arg.int_val;
				break;
			case GOTO : pc = ir.arg.int_val; break;
			case DATA : top = top_index + ir.arg.int_val; break;
			case LD_INT : 
				stack[++top].int_val = ir.arg.int_val;
				stack[top].dou_val = ir.arg.int_val; 
				current_type = INT;
				break;
			case LD_DOU : 
				stack[++top].int_val = (int)(ir.arg.dou_val);
				stack[top].dou_val = ir.arg.dou_val; 
				current_type = DOU;
				break;
			case LD_STR : 
				strcpy(stack[++top].str_val,ir.arg.str_val);
				current_type = STR;
				break;
			case LD_CHR : 
				stack[++top].chr_val = ir.arg.chr_val;
				current_type = CHR;
				break;
			case LD_BOL : 
				stack[++top].bol_val = ir.arg.bol_val;
				stack[top].int_val = ir.arg.bol_val;
				current_type = BOL;
				break;
			case LD_VAR :
				//printf("index: %d \n",top_index);
				//printf("ko ro: %d \n",ir.arg.int_val);
				//printf("value: %d \n",stack[top_index+ir.arg.int_val].int_val);
				stack[++top] = stack[top_index+ir.arg.int_val]; 
				current_type = ir.arg.type;
				break;
			case LT : 
				if ( stack[top-1].type == CHR) {
					if ( stack[top-1].chr_val < stack[top].chr_val )
					{
						stack[--top].int_val = 1;
						stack[top].bol_val = 1;
					}
					else
					{	
						stack[--top].int_val = 0;
						stack[top].bol_val = 0;
					}
				}
				else
				{
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
				}
				break;
			case EQ : 
				if ( stack[top-1].type == CHR) {
					if ( stack[top-1].chr_val == stack[top].chr_val )
					{
						stack[--top].int_val = 1;
						stack[top].bol_val = 1;
					}
					else
					{	
						stack[--top].int_val = 0;
						stack[top].bol_val = 0;
					}
				}
				else
				{
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
				}
				break;
			case NEQ : 
				if ( stack[top-1].type == CHR) {
					if ( stack[top-1].chr_val != stack[top].chr_val )
					{
						stack[--top].int_val = 1;
						stack[top].bol_val = 1;
					}
					else
					{	
						stack[--top].int_val = 0;
						stack[top].bol_val = 0;
					}
				}
				else
				{	
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
				}
				break;
			case GT : 
				if ( stack[top-1].type == CHR) {
					if ( stack[top-1].chr_val > stack[top].chr_val )
					{
						stack[--top].int_val = 1;
						stack[top].bol_val = 1;
					}
					else
					{	
						stack[--top].int_val = 0;
						stack[top].bol_val = 0;
					}
				}
				else
				{	
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
				}
				break;
			case LTEQ : 
				if ( stack[top-1].type == CHR) {
					if ( stack[top-1].chr_val <= stack[top].chr_val )
					{
						stack[--top].int_val = 1;
						stack[top].bol_val = 1;
					}
					else
					{	
						stack[--top].int_val = 0;
						stack[top].bol_val = 0;
					}
				}
				else
				{	
					if ( stack[top-1].dou_val <= stack[top].dou_val )
					{
						stack[--top].int_val = 1;
						stack[top].bol_val = 1;
					}
					else
					{	
						stack[--top].int_val = 0;
						stack[top].bol_val = 0;
					}
				}
				break;
			case GTEQ : 
				if ( stack[top-1].type == CHR) {
					if ( stack[top-1].chr_val >= stack[top].chr_val )
					{
						stack[--top].int_val = 1;
						stack[top].bol_val = 1;
					}
					else
					{	
						stack[--top].int_val = 0;
						stack[top].bol_val = 0;
					}
				}
				else
				{	
					if ( stack[top-1].dou_val >= stack[top].dou_val )
					{
						stack[--top].int_val = 1;
						stack[top].bol_val = 1;
					}
					else
					{	
						stack[--top].int_val = 0;
						stack[top].bol_val = 0;
					}
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
				//printf("%lf %lf %lf",stack[top-2].dou_val,stack[top-1].dou_val,stack[top].dou_val);
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
			case MOD : 
				stack[top-1].dou_val = stack[top-1].int_val - ((int)(stack[top-1].int_val/stack[top].int_val))*stack[top].int_val;
				stack[top-1].int_val = (int)(stack[top-1].dou_val); 
				top--;
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
			case NOT :
				if ( stack[top].bol_val == 1 ) 
				{
					stack[top].bol_val = 0;
					stack[top].int_val = 0;
				}
				else
				{
					stack[top].bol_val = 1;
					stack[top].int_val = 1;
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
				if (ir.arg.type == ARR_I) 
				{
					if (stack[top_index+ir.arg.int_val].arr_int_val == NULL) {
						stack[top_index+ir.arg.int_val].arr_int_val = (int *) malloc(stack[top_index+ir.arg.int_val].length);
					}
					stack[top].int_val = stack[top_index+ir.arg.int_val].arr_int_val[stack[top].int_val];
					stack[top].dou_val = stack[top].int_val;
				} else 
				if (ir.arg.type == ARR_D) 
				{
					if (stack[top_index+ir.arg.int_val].arr_dou_val == NULL) {
						stack[top_index+ir.arg.int_val].arr_dou_val = (double *) malloc(stack[top_index+ir.arg.int_val].length);
					}
					stack[top].dou_val = stack[top_index+ir.arg.int_val].arr_dou_val[stack[top].int_val];
					stack[top].int_val = stack[top].dou_val;
				} else 
				if (ir.arg.type == ARR_B) 
				{
					if (stack[top_index+ir.arg.int_val].arr_bol_val == NULL) {
						stack[top_index+ir.arg.int_val].arr_bol_val = (int *) malloc(stack[top_index+ir.arg.int_val].length);
					}
					stack[top].bol_val = stack[top_index+ir.arg.int_val].arr_bol_val[stack[top].int_val];
				} else
				if (ir.arg.type == ARR_C) 
				{
					if (stack[top_index+ir.arg.int_val].arr_chr_val == NULL) {
						stack[top_index+ir.arg.int_val].arr_chr_val = (char *) malloc(stack[top_index+ir.arg.int_val].length);
					}
					stack[top].chr_val = stack[top_index+ir.arg.int_val].arr_chr_val[stack[top].int_val];
				}		
				break;
			case INT_ARR_STORE :
				if (stack[top_index+ir.arg.int_val].arr_int_val == NULL) {
					stack[top_index+ir.arg.int_val].arr_int_val = (int *) malloc(stack[top_index+ir.arg.int_val].length);
				}
				stack[top_index+ir.arg.int_val].arr_int_val[stack[top-1].int_val] = stack[top].int_val;
				top--;
				break;
			case DOU_ARR_STORE :
				if (stack[top_index+ir.arg.int_val].arr_dou_val == NULL) {
					stack[top_index+ir.arg.int_val].arr_dou_val = (double *) malloc(stack[top_index+ir.arg.int_val].length);
				}
				stack[top_index+ir.arg.int_val].arr_dou_val[stack[top-1].int_val] = stack[top].dou_val;
				top--;
				break;
			case CHR_ARR_STORE :
				if (stack[top_index+ir.arg.int_val].arr_chr_val == NULL) {
					stack[top_index+ir.arg.int_val].arr_chr_val = (char *) malloc(stack[top_index+ir.arg.int_val].length);
				}
				stack[top_index+ir.arg.int_val].arr_chr_val[stack[top-1].int_val] = stack[top].chr_val;
				top--;
				break;
			case BOL_ARR_STORE :
				if (stack[top_index+ir.arg.int_val].arr_bol_val == NULL) {
					stack[top_index+ir.arg.int_val].arr_bol_val = (int *) malloc(stack[top_index+ir.arg.int_val].length);
				}
				stack[top_index+ir.arg.int_val].arr_bol_val[stack[top-1].int_val] = stack[top].bol_val;
				top--;
				break;
			case BEGIN_CAL :
				start_arg = top + 1;
				break;
			case CAL :
				stack_call[top_call++] = pc;
				pc = ir.arg.length;
				int k = start_arg;
				int tmp = pc;
				int tmp2 = top + 1;
				int count = -1;
				while (k < tmp2) {
					code[tmp].arg = stack[k];
					//printf("value: %d ",stack[k].int_val);
					tmp = tmp + 3;
					k++;
					count++;
				}
				ar[top_call] = top - count - code[pc + 1].arg.int_val;
				pre_top[top_call] = top;
				
				//printf(" %d ", pre_top[top_call]);
				break;
			case END_CAL :
				stack[pre_top[top_call]] = stack[top]; 
				top = pre_top[top_call];
				
				pc = stack_call[--top_call];
				break;
			default : printf( "%sInternal Error: Memory Dump\n" );
			break;
		}
		
	} while (ir.op != HALT);
}
/*************************** End Stack Machine **************************/
