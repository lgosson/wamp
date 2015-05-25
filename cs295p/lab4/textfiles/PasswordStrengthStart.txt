<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Password Strength</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
$Passwords = array("NoDigitsOrOthers",
                   "NoDigits...",
                   "NoOthers999",
                   "2 Spaces !",
                   "0LOWERCASE?",
                   "0uppercase+",
                   "Sh0r+",
                   "This1IsMuchTooLongForAPassword!",
                   "1GoodPassword.",
                   "GoodPassword2!");
foreach ($Passwords as $Password) {
     $failures = 0;
      echo "<hr /><p>Checking &ldquo;$Password&rdquo;</p><hr />";
     // Check for at least one number
	 
	 //$passArray = str_split($Password);
	 
     if (preg_match("/\d/", $Password) == FALSE) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$Password&rdquo; has no numbers</small></p>";
     }
     // Check for at least one lowercase letter
     if (preg_match("/[a-z]/", $Password) == FALSE) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$Password&rdquo; has no lowercase letters</small></p>";
     }
     // Check for at least one uppercase letter
     if (preg_match("/[A-Z]/", $Password) == FALSE) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$Password&rdquo; has no uppercase letters</small></p>";
     }
     // Check for no spaces
     if (preg_match("/\s/", $Password) == TRUE) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$Password&rdquo; contains one or more spaces</small></p>";
     }
     // Check for at least one non-alphanumeric
     if (preg_match("/\W/", $Password) == FALSE) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$Password&rdquo; has no non-alphanumeric characters</small></p>";
     }
     // Verify the length > 8 and < 16
     if ((strlen($Password) >= 8) == FALSE || (strlen($Password) <=16) == FALSE ){
          ++$failures;
          echo "<p><small>Warning: &ldquo;$Password&rdquo; must be between 8 and 16 characters</small></p>";
     }

     if ($failures == 0) 
          echo "<p>&ldquo;$Password&rdquo; is a strong password</p>";
     else
          echo "<p>&ldquo;$Password&rdquo; is not a strong password</p>";
}
?>
</body>
</html>

