<?php

// (c) 2012 HeyYa dev team. All rights reserved.

function assertEquals($variable, $value)
   {
     if ($variable == $value)
	echo "Passed<br />\n";
     else
	{
        $bt = debug_backtrace();
        $caller = array_shift($bt);
        echo "NOT PASSED, ";
        echo $caller['file'];
        echo ", line: ";
        echo $caller['line'];
		echo " -- ($variable(var) != $value(val))";
        echo "<br />\n";
        }
   }
   
?>