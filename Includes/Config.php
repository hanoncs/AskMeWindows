<?php

// if(!Defined('ROOT')) {
//     define("ROOT", ".$_SERVER['ROOT'].");
// }
/////////////////////////////////
//     SERVER SETTINGS     //
////////////////////////////////
//Database Connection Config
 if(!defined('USERNAME')) {
     define("USERNAME", "hanoncs_hanoncs");
     define("PASSWORD", "Hollydog123!");
     define("DATABASE", "192.185.6.35");
     //Server
     //define("SERVERNAME", "");
 }

///////////////////////////////
//      MAIL SETTINGS      //
///////////////////////////////
 if(!defined('MAILUSERNAME')) {
     define('MAILUSERNAME', 'hanoncs@hanontest.com');
     define('MAILPASSWORD', 'Hollydog123!');

     //Enable SMTP debugging
     // 0 = off (for production use)
     // 1 = client messages
     // 2 = client and server messages
     define('EMAIL_DEBUG_OUTPUT', 0);
 }

//////////////////////////////////
//      ERROR SETTINGS      //
////////////////////////////////
 if(!defined('SEND_ERROR_EMAILS')) {
     //TOGGLE SQL ERROR EMAILS
     define("SEND_ERROR_EMAILS", False);

     //TOGGLE SQL ERROR EMAILS
     define("ON_SCREEN_ERRORS", False);

     //Set Max PHP memory limit. Very useful for testing and development.
     ini_set('memory_limit', '700M');
     ini_set('display_errors', 'on');
     ini_set('error_reporting', E_ALL&~E_NOTICE);

     //List that will receive all error emails
     define('ERROR_EMAIL_ADDRESS_LIST', 'Michael.Hanon@rmsicorp.com');
 }
?>

