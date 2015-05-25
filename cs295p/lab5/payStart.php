<?php

  function calcPay($hours, $payRate, &$regPay, &$otPay, &$totalPay)
  {
    if ($hours < 40)
    {
      $regPay = $payRate * $hours;
      $otPay = 0;
    }
    else
    {
      $regPay = $payRate * 40;
      $otPay = $payRate * 1.5 * ($hours - 40);
    }
    $totalPay = $regPay + $otPay;
  }

  $regPay = 0;
  $otPay = 0;
  $totalPay = 0;
  $hours = 0;
  $payRate = 0;
  
  if (count($_POST) > 0)
  {
	$hours = (double)$_POST["hours"];
	$payRate = (double)$_POST["payRate"];
	calcPay($hours, $payRate, $regPay, $otPay, $totalPay);
  }

?>

<html>
  <head>
  </head>
  
  <body>
    <form id="payForm" name="payForm" method="post" action="payLab6Start.php">
      <p>Enter your pay rate:&nbsp;&nbsp;
        <input type="text" id="payRate" name="payRate" value="<?php // echo the pay rate here ?>"/>
      </p>
      <p>Enter the hours worked:&nbsp;&nbsp;
        <input type="text" id="hours" name="hours" value="<?php // echo the hours here ?>"/>
      </p>
      <p>
        <input type="submit" value="Calculate Your Pay" />
      </p>
    </form>
	<p>
	<?php 
		if (count($_POST) > 0)
		{
			echo "Hours: " . $hours . "<br />";
			echo "Pay Rate: " . $payRate . "<br />";
			echo "Regular Pay: " . $regPay . "<br />";
			echo "Overtime Pay: " . $otPay . "<br />";
			echo "Total Pay: " . $totalPay . "<br />";
		}
	?>
	</p>
  </body>
</html>