<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Validate Credit Card</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Validate Credit Card</h1><hr />
<?php
$CreditCards = array(
     "",
     "8910-1234-5678-6543",
     "OOOO-9123-4567-0123");
foreach ($CreditCards as $CardNumber) {
	if ($CardNumber == "")
	{
		$error = "Invalid Card Number";
		echo ($error);
		echo ("</br>");
	}
	else
	{
		$trimmedWhite = str_replace(" ", "", $CardNumber);
		$trimmedDash = str_replace("-", "", $trimmedWhite);
		if (is_numeric($trimmedDash)== FALSE)
		{
			echo ("$error");
			echo ("</br>");
		}
		else
		{
			echo (" $trimmedDash is Valid");
			echo ("</br>");
		}
	}
	// this is part 6 on page 176
	// if it's an empty string
		// display an appropriate invalid message
	// this is part 7 on page 177
	// else
		// remove any -
		// remove any spaces
		// if contains and characters that are not numbers
			// display an appropriate invalid message
		// else
			// display an appropriate valid message
		// end if (numeric)
	// end if (empty string)
}
?>
</body>
</html>

