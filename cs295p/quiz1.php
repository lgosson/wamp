<?php
//Write a syntactically correct PHP function called isLeapYear.  The function should take a 
//date as it's parameter and return true or false.  Use the following JavaScript code as a model.
//Test your function by calling it with 2012-02-01 as a parameter.

function isLeapYear($date)
{

	$year = date('Y', $date);

	if ($year % 4 == 0)
		if(($year % 100 != 0 ) || $year % 400 == 0 )
			return true;
		else
			return false;
	else
		return false;
}

	$dateLeap = mktime(0,0,0,2,1,2012);
	$dateNoLeap = mktime(0,0,0,2,1,2011);

	echo(isLeapYear($dateLeap));
	echo(isLeapYear($dateNoLeap));
	
//Write a PHP function called isPositive that takes one parameter that represents 
//an integer and returns true when the integer is positive and false when the integer 
//is negative. By the way, 0 is a positive number.
//Test your function by calling it with 0, -1 and 1 as parameters.

function isPositive ($numb)
{
	if ($numb >= 0 )
		return true;
	else
		return false;
}

echo(isPositive(0));
echo(isPositive(1));
echo(isPositive(-1));

?>

function displayAssignment()
{
	var assignDiv = document.getElementById("assignment");
	assignDiv.style.position = "absolute";
	assignDiv.style.top = "50px";
	assignDiv.style.left = "400px";
	$("div#assignment").load(this.href);
	
}
