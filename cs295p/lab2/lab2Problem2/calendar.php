<?php
/*
   New Perspectives on HTML, CSS, and JavaScript
   Tutorial 12
   Tutorial Case

   Author: Maria Valdez
   Date:   3/1/2015

   Function List:
   calendar(calendarDay)
      Creates the calendar table for the month specified in the
      calendarDay parameter. The current date is highlighted in 
      the table.

   writeCalTitle(calendarDay)
      Writes the title row in the calendar table

   writeDayTitle()
      Writes the weekday title rows in the calendar table

   daysInMonth(calendarDay)
      Returns the number of days in the month from calendarDay

   writeCalDays(calendarDay)
      Writes the daily rows in the calendar table, highlighting
      calendarDay
	
*/



include_once("events.php");


function writeDayNames() {

   // Array of weekday abbreviations
   $dayName = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");

   // Start a table row of the weekday abbreviations
   echo("<tr>");

   // Loop through the dayName array
   for ($i = 0; $i < count($dayName); $i++) {
      echo("<th class='calendar_weekdays'> " . $dayName[$i] . "</th>");
   }

   // End the table row 
   echo("</tr>");
}

function writeCalTitle($calendarDay) {

   /* The calendarDay parameter contains a Date object
      that the calendar is based upon */

   // monthName contains an array of month names
   $monthName = array("January", "February", "March", 
       "April", "May", "June", "July", "August", "September",
       "October", "November", "December");

   /* The thisMonth variable contains the calendar month number,
      the thisYear variable contains the 4-digit year value */
   $thisMonth = date('n', $calendarDay);
   $thisYear = date('Y', $calendarDay);

   // Write the table header row of the calendar table
   echo("<tr>");
   echo("<th id='calendar_head' colspan='7'>");
   echo($monthName[$thisMonth-1] . " " . $thisYear);
   echo("</th>");
   echo("</tr>");

}

function daysInMonth($calendarDay) {

   // Array of days in each month
   $dayCount = array(31,28,31,30,31,30,31,31,30,31,30,31);

   // Extract the four digit year value from calendarDay
   $thisYear =  date('Y', $calendarDay);

   // Extract the month value from calendarDay
   $thisMonth = date('n', $calendarDay)  - 1;

   // Revise the days in February for leap years
   if ($thisYear % 4 == 0) {
      if (($thisYear % 100 != 0) || ($thisYear % 400 == 0)) {
         $dayCount[1] = 29;
      }
   }
   // Return the number of days for the current month
   return $dayCount[$thisMonth];
}

function writeCalDays($calendarDay) {
	global $dayEvent;
   // Determine the starting day of the month
   $day = mktime(0, 0, 0,
   date('n', $calendarDay),
   1, 
   date('Y', $calendarDay));
   $weekDay = date('w', $day);

   // Write blank cells preceding the starting day
   echo("<tr>");
   for ($i = 0; $i < $weekDay; $i++) {
      echo("<td></td>");
   }

   // Write cells for each day of the month
   $totalDays = daysInMonth($calendarDay);
   $highlightDay = date('j', $calendarDay);

   for ($i = 1; $i <= $totalDays; $i++) {
      // Move to the next day in the month
      $day = mktime(0, 0, 0, 
	  date('n', $calendarDay),
		$i,
		date('Y', $calendarDay));
	  
	  
      $weekDay = date('w', $day);

      if ($weekDay == 0) echo("<tr>"); // start a new row on Sunday

      // Test if the day being written matches the calendar day
      if ($i == $highlightDay) {
         echo("<td class='calendar_dates' id='calendar_today'>" . $i + $dayEvent[$i] . "</td>");
      } else {
         echo("<td class='calendar_dates'>" . $i . $dayEvent[$i] . "</td>");
		 
      }

      if ($weekDay == 6) echo("</tr>"); // end the row on Saturday
   }
   
}

function calendar($calDate) {

   // Date that the monthly calendar is based on
   //if (dateString == null) calDate = new Date()
   //else calDate = new Date(dateString);

   echo("<table id = 'calendar_table'>");
  
   // Write the header row of the calendar table
   writeCalTitle($calDate);

   // Write the row of weekday abbreviations
   writeDayNames();

   // Write the calendar days
   writeCalDays($calDate);
   
   echo("</table>");
   
}

//$today = time();
//calendar($today);
//echo('<table>');
//writeCalDays($today);
//echo('</table>');
//echo(daysInMonth($today));
//writeCalTitle($today);
//writeDayNames();
?>