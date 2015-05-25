<?php
	function isPrime($number)
	{
		$prime = true;
		$div = 2;
		do
		{
			if ($number % $div == 0)
				$prime = false;
			else
				$div++;
		}
		while ($div < $number && $prime == true);
		return $prime;
	}
 
	// some page level variables
	$number = 0;
	$prime = "";
	$errorMessage = "";

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
    <form id="primeForm" name="primeForm" method="post" action="primeStart.php">
      <p>Enter the number here:&nbsp;&nbsp;
      <input type="text" id="number" name="number" 
        value="<?php // echo the number entered by the user ?>" />
		<span style="color:red;"><?php // echo the error message ?></span>
      </p>
      <p><input type="submit" value="Is It A Prime?" name="submit" /></p>
      <p>Answer:&nbsp;
      <input type="text" id="prime" name="prime" 
        value="<?php echo "$prime" ?>"/></p>
    </form>
  </body>
</html>