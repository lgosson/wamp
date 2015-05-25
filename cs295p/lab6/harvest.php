<?php
	function findEmailAddress($textToSearch)
	{
		$regEx = "";
		$input = $textToSearch;
		$emails = array();
		
		if (preg_match_all($regEx, $input, $phones) > 0)
		{
			foreach($emails[0] as $email)
				echo $email . "<br />";
		}
		else
			echo "there were no phone numbers in the text provided";
		
		return $emails;
	}
 
	// some page level variables
	$text

	// tells me if the user has pressed the submit button
	// previous examples checked to see if isset($_POST['submit'])
	if (count ($_POST) > 0)
	{
		$number = $_POST['number']; 
		if($number < 1000 && $number > 3)
		{
		if(isPrime($number))
			$prime = 'yes';
		else
			$prime = 'no';
		}
		else
			$prime = 'not between 3 and 1000';
		
		// get the number from the post array
		// if the number is prime
		//		set the variable prime to the word yes
		//	else
		//		set the variable prime to the word no
	}  
?>

<html>
  <head>
  </head>
  
  <body>
    <form id="harvestForm" name="harvestForm" method="post" action="harvest.php">
      <p>Enter the number here:&nbsp;&nbsp;
      <input type="text" id="number" name="number" 
        value="<?php // echo the number entered by the user ?>" />
		<span style="color:red;"><?php // echo the error message ?></span>
      </p>
      <p><input type="submit" value="Is It A Prime?" name="submit" /></p>
      <p>Answer:&nbsp;
      <input type="text" id="textToSearch" name="textToSearch" 
        value="" /></p>
    </form>
  </body>
</html>