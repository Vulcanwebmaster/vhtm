<?php
	require_once 'Zend/View/Helper/Abstract.php';
	class Zend_View_Helper_CutString extends Zend_View_Helper_Abstract
	{
		function cutString($string, $offset)
		{
			return $this->doCut($string, $offset);
		}
		
		function doCut($string, $offset)
	    {
	    	$string=strip_tags($string);
	    	$index=$offset;
	    	$lengh=strlen($string);
	    	
	    	if ($index<$lengh)
	    	{
		    	while ($string[$index]!=' ') {
		    		$index++;
		    	}
	    	}
	    	else $index=$lengh;
	
	    	return substr($string, 0, $index);
	    }
	}