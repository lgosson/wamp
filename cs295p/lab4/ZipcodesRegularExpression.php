<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>5 digit zipcodes</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$zipcodes = array("",
                   "123",
                   "123456",
                   "12a34",
                   "12345",
				   "12345-1234",
				   "1234-1234",
				   "12345-123");
				   
$errorMessage = "";

function validZipcode2($zipcode, &$errorMessage)
{
	if (preg_match("/^\d{5}$/", $zipcode) == 1 || preg_match("/^\d{5}-\d{4}$/", $zipcode))
		return true;
	else
	{
		$errorMessage .= "$zipcode is not a 5 or 9 digit zipcode";
		return false;
	}
}

foreach ($zipcodes as $zipcode) {
    echo "<hr /><p>Checking &ldquo;$zipcode&rdquo;</p><hr />";
	// call the function here with $zipcode as the parameter
	if (validZipcode2($zipcode, $errorMessage) == TRUE) 
		echo "<p>&ldquo;$zipcode&rdquo; is valid</p>";
	else
	{
		echo "<p>&ldquo;$zipcode&rdquo; is not valid</p>";
		echo "$errorMessage";
	}
	$errorMessage = "";
}


function validZipcode($zipcode)
{
	global $errorMessage;
	$failures = 0;
	// Check for  < 5 characters
	if (strlen($zipcode) < 5) {
		++$failures;
		$errorMessage .= "<p><small>Warning: &ldquo;$zipcode&rdquo; is less than 5 characters</small></p>";
	}
	// Check for > 5 characters
	if (strlen($zipcode) > 5) {
		++$failures;
		$errorMessage .= "<p><small>Warning: &ldquo;$zipcode&rdquo; is more than 5 characters</small></p>";
	}
	// Check for numbers
	if (!is_numeric($zipcode)) {
		++$failures;
		$errorMessage .= "<p><small>Warning: &ldquo;$zipcode&rdquo; contains non numeric characters</small></p>";
	}
	if ($failures == 0) 
		return true;
	else
		return false;
}

foreach ($zipcodes as $zipcode) {
    echo "<hr /><p>Checking &ldquo;$zipcode&rdquo;</p><hr />";
	// call the function here with $zipcode as the parameter
	if (validZipcode($zipcode) == TRUE) 
		echo "<p>&ldquo;$zipcode&rdquo; is valid</p>";
	else
	{
		echo "<p>&ldquo;$zipcode&rdquo; is not valid</p>";
		echo "$errorMessage";
	}
	$errorMessage = "";
}
?>
</body>
</html>

