<?php
/* Everytime you need to run php code, it must be run inside a php file. hTML cannot run php code because it is not a server side language. */
    include_once 'php/dbconnect.php';
?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <h1>Hotel Booking Form</h1>

        <p>* denotes a required field</p>
        <p class="notify"></p>
        
        <form name="hotelForm" action="php/store.php" onsubmit="return validation()" method="post">

            <p>
                <label for="firstname">First Name*:</label>
                <input type="text" name="firstname" id="firstname">
            </p>

                <p>
                    <label for="lastname">Last Name*:</label>
                    <input type="text" name="lastname" id="lastname">

                </p>

                <p>
                    <label for="roomSize">Room Size:</label>
                    <select name="roomsize">
                        <option value="Single">Single</option>
                        <option value="Suite">Suite</option>
                        <option value="Executive">Executive</option>
                        <option value="Deluxe">Deluxe</option>
                    </select>

                </p>

                <p>
                    <label for="checkIn">Check In Type:</label>
                    <select name="checkin">
                        <option value="Front Desk">Front Desk</option>
                        <option value="Online">Online</option>
                        <option value="Mobile App">Mobile App</option>
                        <option value="Assisted">Assisted</option>
                    </select>

                </p>

                <input type="submit" value="Submit">

        </form>
        <hr>
       <a href="http://localhost:8888/notes-09-hotel/php/view.php">Go Home</a>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
