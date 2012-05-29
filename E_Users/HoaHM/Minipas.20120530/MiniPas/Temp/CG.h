/***************************************************************************
Code Generator
***************************************************************************/
/*-------------------------------------------------------------------------
Data Segment
-------------------------------------------------------------------------*/
int data_offset = 0; /* Initial offset */
int data_location() /* Reserves a data location */
{
	return data_offset++;
}
/*-------------------------------------------------------------------------
Code Segment
-------------------------------------------------------------------------*/
int code_offset = 0; /* Initial offset */
int gen_label() /* Returns current offset */
{
	return code_offset;
}
int reserve_loc() /* Reserves a code location */
{
	return code_offset++;
}
/* Generates code at current location */
void gen_code( enum code_ops operation, int arg)
{ 
	code[code_offset].op = operation;
	code[code_offset++].arg.int_val = arg;
}

void gen_code_variable( enum code_ops operation, symrec *identifier )
{ 
	code[code_offset].op = operation;
	code[code_offset].arg.type = identifier->type;
	code[code_offset].arg.length = identifier->length;
	code[code_offset++].arg.int_val = identifier->offset;
	printf("Offset: %s - %d\n", identifier->name, code_offset);
}

void gen_code_double( enum code_ops operation, double arg )
{ 
	code[code_offset].op = operation;
	code[code_offset++].arg.dou_val = arg;
}

void gen_code_string( enum code_ops operation, char arg[] )
{ 
	code[code_offset].op = operation;
	strcpy(code[code_offset++].arg.str_val,arg);
}

void gen_code_char( enum code_ops operation, char arg )
{ 
	code[code_offset].op = operation;
	code[code_offset++].arg.chr_val = arg;
}

void gen_code_boolean( enum code_ops operation, char arg[] )
{ 
	code[code_offset].op = operation;
	if (strcmp(arg,"true") == 0) code[code_offset++].arg.bol_val = 1;
		else code[code_offset++].arg.bol_val = 0;
}

/* Generates code at a reserved location */
void back_patch( int addr, enum code_ops operation, int arg )
{
	code[addr].op = operation;
	code[addr].arg.int_val = arg;
}
/************************** End Code Generator **************************/
