/***************************************************************************
Symbol Table Module
***************************************************************************/
/*=========================================================================
DECLARATIONS
=========================================================================*/
/*-------------------------------------------------------------------------
SYMBOL TABLE RECORD
-------------------------------------------------------------------------*/
enum type_code{ INT , DOU, STR, CHR, BOL,
	ARR_I, ARR_D, ARR_C, ARR_B, FUN,  
	C_INT , C_DOU, C_STR, C_CHR, C_BOL ,
	ARG_INT, ARG_DOU, ARG_STR, ARG_CHR, ARG_BOL
};
	
struct symrec
{
	char *name; /* name of symbol */
	char *scope; /* name of scope */ 
	int offset; /* data offset */
	struct symrec *next; /* link field */
	enum type_code type;
	int length;
};

typedef struct symrec symrec;
/*-------------------------------------------------------------------------
SYMBOL TABLE ENTRY
-------------------------------------------------------------------------*/
symrec *identifier;
/*-------------------------------------------------------------------------
SYMBOL TABLE
Implementation: a chain of records.
------------------------------------------------------------------------*/
symrec *sym_table = (symrec *)0; /* The pointer to the Symbol Table */
/*========================================================================
Operations: Putsym, Getsym
========================================================================*/
symrec * putsym (char *sym_name, char *scope_name, enum type_code type, int length)
{
	symrec *ptr;
	ptr = (symrec *) malloc (sizeof(symrec));
	ptr->name = (char *) malloc (strlen(sym_name)+1);
	strcpy (ptr->name, sym_name);
	ptr->scope = (char *) malloc (strlen(scope_name)+1);
	strcpy (ptr->scope, scope_name);
	ptr->offset = data_location();
	ptr->type = type;
	ptr->length = length;
	ptr->next = (struct symrec *)sym_table;
	sym_table = ptr;
	return ptr;
}

symrec * getsym (char *sym_name, char *scope_name)
{
	symrec *ptr;
	for ( ptr = sym_table; ptr != (symrec *) 0; ptr = (symrec *)ptr->next )
		if ((strcmp (ptr->name,sym_name) == 0) && (strcmp (ptr->scope,scope_name) == 0)) return ptr;
	return 0;
}
/************************** End Symbol Table **************************/
