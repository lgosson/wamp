<?php
include_once("april.php");
/*
   New Perspectives on HTML, CSS, and JavaScript
   Tutorial 12
   Case Problem 1

   Author:   Aaron Kitchen
   Date:     3/1/2015

   Filename: tables.js

   Function List:

   showTable()
      Shows a table of contributors to the Lighthouse

   showSummary()
      Shows a table summarizing the contributions made to the Lighthouse

*/


function showTable() {
global $amount, $lastName, $street, $date, $zip, $city, $state, $firstName;

   /* Write the table head */
   echo("<table id='contributors'>");
   echo("<thead>");
   echo("<tr><th>Date</th><th>Amount</th><th>First Name</th>");
   echo("<th>Last Name</th><th>Address</th></tr>");
   echo("</thead>");

   /* Write the table body */
   echo("<tbody>"); 

   /* Write each table row */
   for ($i = 0; $i < count($lastName); $i++) {
      echo("<tr>");
      echo("<td>" . $date[$i] . "</td>");
      echo("<td class = 'amt'>" . $amount[$i] . "</td>");
      echo("<td>" . $firstName[$i] . "</td>");
      echo("<td>" . $lastName[$i] . "</td>");
      echo("<td>");
      echo($street[$i] . "<br />");
      echo($city[$i].", " . $state[$i] . " " . $zip[$i]);
      echo("</td>");
      echo("</tr>");
   }
   echo("</tbody>");
   echo("</table>");
}

function showSummary() {
global $amount, $lastName;

   /* Calculate the total amount */
   $total = 0;
   for ($i = 0; $i < count($amount); $i++) {
      $total+=$amount[$i];
   }

   /* Write the summary table */
   echo("<table id='sumTable'>");
   echo("<tr><th id='sumTitle' colspan='2'>Summary</th></tr>");
   echo("<tr><th>Contributors</th>");
   echo("<td>" . count($lastName) . "</td></tr>");
   echo("<tr><th> Amount </th>");
   echo("<td>$" . $total . "</td></tr>");
   echo("</table>");

}


?>