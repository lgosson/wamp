<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Phone numbers</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$phoneNumbers = array("111-1111",
                   "(111) 111-1111",
                   "111-111-1111",
                   "111111",
                   "",
				   "aaa-aaaa");
				   
function isValidSevenDigitPhone ($phone)
{
	if (preg_match("/^\d{3}[\s.\-]?\d{4}$/", $phone))
		return true;
	else	
		return false;
}

function isValidTenDigitPhone ($phone)
{
	if (preg_match("/^(\(\d{3}\)\s*)?\d{3}[\s-]?\d{4}$/", $phone))
		return true;
	else	
		return false;
}
				   
				   
foreach ($phoneNumbers as $phone) {
	
	echo "<hr /><p>Checking &ldquo;$phone&rdquo;</p><hr />";
	
	
	if (isValidSevenDigitPhone($phone) == true || isValidTenDigitPhone($phone) == true)
		echo ("$phone is a valid phone number");
	else
		echo ("$phone is an invalid phone number");
	
	// remove spaces
	// remove dashes
	// remove (
	// remove )
	// Check for 7 or 10 characters long
	
	
	/*
     if ((strlen($trimmedRightPara) != 7) )
	 {
		if ((strlen($trimmedRightPara) != 10))
		{
          ++$failures;
          echo "<p><small>Warning: &ldquo;$phone&rdquo; must be 7 or 10 characters</small></p>";
		 }
     }
	 
     // Check for numbers
     if (is_numeric($trimmedRightPara) == FALSE) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$phone&rdquo; contains non numeric characters</small></p>";
     }
     if ($failures == 0) 
          echo "<p>&ldquo;$phone&rdquo; is valid</p>";
     else
          echo "<p>&ldquo;$phone&rdquo; is not valid</p>";
		  */
}
?>
</body>
</html>

