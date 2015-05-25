<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>E-Mail Validator</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php

// p 143 - 4 in the text
$EmailAddresses = array(
     "john.smith@php.test",
     "mary.smith.mail.php.example",
     "john.jones@php.invalid",
     "alan.smithee@test",
     "jsmith456@example.com",
     "jsmith456@test",
     "mjones@example",
     "mjones@example.net",
     "jane.a.doe@example.org");
	 
function validateAddress($Address) {
	if (strpos($Address, '@') !== FALSE && strpos($Address, '.') !== FALSE)
	{
		return TRUE;
	}
	else
		return FALSE;
}

// write your function definition for validateAddress here
// that's part 5 on page 143
foreach ($EmailAddresses as $Address) {
	// call your function in an if statement here and display an appropriate result
	// that's part 6 on page 144
	if (validateAddress($Address) === FALSE)
	{
		echo ("$Address . INVALID");
		echo (" </br> ");
	}
	else
	{
		echo ("$Address . VALID");
		echo (" </br> ");
	}
}
?>
</body>
</html>

