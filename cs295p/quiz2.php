<?php

$lNumberError = "";
$lnumbers = array("",
                   "l1234567",
                   "L12345678",
                   "lllll3333");

function isValidNumber($lnumber, &$lNumberError)
	{
	global $lNumberError;
	if (preg_match("/^[L,l]\d{8}$/", $lnumber))
		return true;
	else
		{
			$lNumberError = "Not a valid lnumber";
			return false;
		}
	
	}
	
	
	
	
	
	foreach ($lnumbers as $item)
	{
		if(isValidNumber($item, $lNumberError) == false)
			echo "This $item is not valid - $lNumberError   ";
		else
			echo "This $item is a valid lane number " ;
	}
	
	
	
	?>