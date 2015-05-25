<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Me</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>


<h2 style = "text-align:center">Contact Me</h2>
<form name="contact" action="ContactForm.php" 
     method="post">
<p>Your Name: <input type="text" name="Sender" value="<?php 
     echo $Sender; ?>" /></p>
<p>Your E-mail: <input type="text" name="Email" 
     value="<?php echo $Email; ?>" /></p>
<p>Subject: <input type="text" name="Subject" value="<?php echo 
     $Subject; ?>" /></p>
<p>Message:<br />
<textarea name="Message"><?php echo 
     $Message; ?></textarea></p>
<p><input type="reset" value="Clear Form" />&nbsp; 
     &nbsp;<input type="submit" name="Submit" 
     value="Send Form" /></p>
</form>

</body>
</html>

