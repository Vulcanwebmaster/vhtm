<?php
// (c) 2012 HeyYa dev team. All rights reserved.

function safeRequest($variable)
{
	//TODO: dummy function. Safe requesting will be implemented.
	if (isset($_REQUEST["$variable"]))
		return $_REQUEST["$variable"];
	else
		return "";
}

?>