<?php
// (c) 2012 HeyYa dev team. All rights reserved.

class SessionContext {
	//Dummy class. Functions return different roles and Uid-s. Check documentation about sessions.


	function getUid()
	{
		//return -1;
		return 1;
	}

	function getRole()
	{
		return "unlogged";
		//return "craftsman";
		//return "user";
		//return "admin";
	}

}

?>