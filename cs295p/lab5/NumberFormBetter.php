<?php
	$Number = "";
	$errorMessage = "";
	$doIt = false;
	
	function isValid($number)
	{
		global $errorMessage;
		if (strlen(trim($number)) > 0)
		{
			if (is_numeric($number))
				return true;
			else
			{	
				$errorMessage = "You need to enter a numeric value.";
				return false;
			}
		}
		else
		{
			$errorMessage = "You need to enter a value.";
			return false;
		}
	}
	
	if (isset($_POST['Submit']))
	{
		$Number = $_POST['Number'];
		if (isValid($Number))
		{
			$doIt = true;
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Number Form</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<form name="NumberForm" action="NumberFormBetter.php" method="post">
	<p>Enter a number: 
		<input type="text" name="Number" value="<?php echo $Number; ?>" />
		<span style="color:red"><?php echo $errorMessage; ?></span>
	</p>
	<p>
		<input type="reset" value="Clear Form" />&nbsp; &nbsp;
		<input type="submit" name="Submit" value="Send Form" />
	</p>
</form>
<?php
	if ($doIt)
	{
		echo "<p>Thank you for entering a number.</p>\n";
		echo "<p>Your number, $Number, squared is " .
          ($Number*$Number) . ".</p>\n ";
	}
?>
</body>
</html>

