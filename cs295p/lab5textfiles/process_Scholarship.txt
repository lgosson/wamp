<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Scholarship Form</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php

function displayRequired($fieldName) {
     echo "The field \"$fieldName\" is required.<br /> \n";
}

function validateInput($data, $fieldName) {
     global $errorCount;
     if (empty($data)) {
          displayRequired($fieldName);
          ++$errorCount;
          $retval = "";
     } else { // Only clean up the input if it isn't empty
          $retval = trim($data);
          $retval = stripslashes($retval);
     }
     return($retval);
}

function validateYear($data, $fieldName)
{
	global $errorCount;
	$thisYear = date('Y', time());
	$gradYear = ($thisYear + 2);
	
	if (empty($data))
	{
		displayRequired($fieldName);
		++$errorCount;
	}
	else
	{
	$data = trim($data);
	$data = stripslashes($data);
		if(is_numeric($data))
		{
			$data = round($data);
			if (($data >= $thisYear) && ($data <= $gradYear))
			{
				$retval =$data;
			}
			else
			{
				echo "<p>The $fieldName must be between $thisYear and $gradYear.</p>\n";
				++$errorCount;
				$retval = "";
			}	
		}
		else 
		{
			echo "<p>The $fieldName must be between $thisYear and $gradYear.</p>\n";
			++$errorCount;
			$retval = "";
		}
		return ($retval);
	}
}

function validatePhoneNumber($data, $fieldName)
{
	global $errorCount;
	if (empty($data)) {
		displayRequired($fieldName);
		++$errorCount;
		$retval = "";
		}
	else
	{
		$data = trim($data);
		$data = stripslashes($data);
		$pattern ="/\d{3}-\d{3}-\d{4}$/";
		if (preg_match($pattern, $data))
		{
			$retval = $data;
		}
		else
		{
			echo "<p> The $fieldName must be a telephone number in the form ###-###-####. <p>/n";
			++$errorCount;
			$retval = "";
		}
	}
	return($retval);
	
}

function redisplayForm($firstName, $lastName, $phone, $year) {
?>
<h2 style = "text-align:center">Scholarship Form</h2>
<form name = "scholarship" action = "process_Scholarship.php" method = "post">
<p>First Name: <input type="text" name="fName" value="<?php echo $firstName; ?>" /></p>
<p>Last Name: <input type="text" name="lName" value="<?php echo $lastName; ?>" /></p>
<p>Phone: <input type="text" name="phone" value="<?php echo $phone; ?>"/></p>
<p>Graduation year: <input type="text" name="year" value="<?php echo $year; ?>"/></p>
<p><input type="reset" value="Clear Form" />&nbsp; &nbsp;<input type="submit" name="Submit" value="Send Form" />
</form>
<?php
}

$errorCount = 0;
$firstName = validateInput($_POST['fName'], "First name");
$lastName = validateInput($_POST['lName'], "Last name");
$phone = validatePhoneNumber($_POST['phone'], "Phone number");
$year = validateYear($_POST['year'], "Birth year");

if ($errorCount>0) {
     echo "Please re-enter the information below.<br /> \n";
     redisplayForm($firstName, $lastName, $phone, $year);
}
else { 
/*
	// Send an e-mail
    //replace the "recipient@example.edu" with your e-mail address 
     $To = "recipient@mail.edu";
     $Subject = "Scholarship Form Results";
     $Message = "Student Name: " . $firstName. " " . $lastName;
	 $resultMsg = "<br />" . $Message;
	$resultMsg = mail($To, $Subject, $Message);
	  if ($result)
	          $resultMsg = "Your message was successfully sent.";
	  else
	          $resultMsg = "There was a problem sending your message.";
*/
	$resultMsg = "Your information was valid.";
?>
<h2 style = "text-align:center">Scholarship Form</h2>
<p style = "line-height:200%">Thank you for filling 
out the scholarship form<?php 
     if (!empty($firstName)) 
          echo ", $firstName" 
     ?>. <?php echo $resultMsg; ?>
<?php
}
?>
</body>
</html>

