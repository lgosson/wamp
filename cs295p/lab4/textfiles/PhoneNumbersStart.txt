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
foreach ($phoneNumbers as $phone) {
	$failures = 0;
	echo "<hr /><p>Checking &ldquo;$phone&rdquo;</p><hr />";
	$trimmedWhite = str_replace(" ", "", $phone);
	$trimmedDash = str_replace("-", "", $trimmedWhite);
	$trimmedLeftPara = str_replace("(", "", $trimmedDash);
	$trimmedRightPara = str_replace(")", "", $trimmedLeftPara);
	
	// remove spaces
	// remove dashes
	// remove (
	// remove )
	// Check for 7 or 10 characters long
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
}
?>
</body>
</html>

