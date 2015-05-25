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
                   "12345");
foreach ($zipcodes as $zipcode) {
     $failures = 0;
      echo "<hr /><p>Checking &ldquo;$zipcode&rdquo;</p><hr />";
     // Check for  < 5 characters
     if (strlen($zipcode) < 5) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$zipcode&rdquo; is less than 5 characters</small></p>";
     }
     // Check for > 5 characters
     if (strlen($zipcode) > 5) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$zipcode&rdquo; is more than 5 characters</small></p>";
     }
     // Check for numbers
     if (is_numeric($zipcode) == FALSE) {
          ++$failures;
          echo "<p><small>Warning: &ldquo;$zipcode&rdquo; contains non numeric characters</small></p>";
     }
     if ($failures == 0) 
          echo "<p>&ldquo;$zipcode&rdquo; is valid</p>";
     else
          echo "<p>&ldquo;$zipcode&rdquo; is not valid</p>";
}
?>
</body>
</html>