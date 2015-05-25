<!DOCTYPE html>
<html>

   <head>
   <!--
      New Perspectives on HTML, CSS, and JavaScript
      Tutorial 12
      Case Problem 1

      The Lighthouse
      Author: Aaron Kitchen
      Date:   3/1/2015

      Filename:          clist.htm
      Supporting files:  april.js, lback.png, lhouse.css,
                         modernizr-15.js, tables.css, tables.js

   -->

      <meta charset="UTF-8" />
      <title>The Lighthouse</title>
      <script src="modernizr-1.5.js"></script>

      <link href="lhouse.css" rel="stylesheet" type="text/css" />

      <link href="tables.css" rel="stylesheet" type="text/css" />
      
<?php
	include_once("april.php");
	include_once("tables.php");
?>
   </head>

   <body>
      <section id="main">

            <nav class="horizontal">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Outreach</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Members</a></li>
                  <li><a href="#">Contact Us</a></li>
               </ul>
            </nav>

         <header>
            <h1>The Lighthouse</h1>
            <p>
               543 Oak Street<br />
               Owensboro, KY &nbsp;&nbsp;42302<br/>
               (270) 555-7511
            </p>
         </header>

         <section id="left">
            <figure id="totals">
               <?php
                  showSummary();
               ?>
            </figure>

            <nav class="vertical">
               <ul>
                  <li><a href="#">Newsletter</a></li>
                  <li><a href="#">Annual Meeting</a></li>
                  <li><a href="#">Board Minutes</a></li>
                  <li><a href="#">Staff Directory</a></li>
                  <li><a href="#">Volunteers</a></li>
                  <li><a href="#">Supporters</a></li>
                  <li><a href="#">Outreach</a></li>
                  <li><a href="#">Forms</a></li>
                  <li><a href="#">White Papers</a></li>
                  <li><a href="#">Contributions</a></li>
                  <li><a href="#">Donors</a></li>
                </ul>
             </nav>
         </section>

         <section id="right">
            <h1>Contributions for April</h1>

            <figure id="data_list">
              <?php
                  showTable();
               ?>
            </figure>
         </section>

         <footer>The Lighthouse</footer>

      </section>

   </body>

</html>
