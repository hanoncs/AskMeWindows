<?php

 $path=$_SERVER['DOCUMENT_ROOT'];
 include_once $path.'/includes/MSSQLConnectionClass.php';
 $conn=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');
 include_once $path.'/includes/Login/SessionStart.php';
 sec_session_start();

 if(isset($_POST['email'], $_POST['p'])) {
     $email=$_POST['email'];
     $password=$_POST['p']; // The hashed password.

     if(login($email, $password, $conn)==true) {
         // Login success
         header('Location: /Index.php');
     }
     else {
         // Login failed
         //return 'Incorrect username or password.';
         header('Location: /index.php?error=1');
     }
 }
 else {
     // The correct POST variables were not sent to this page.
     echo 'Invalid Request';
 }
