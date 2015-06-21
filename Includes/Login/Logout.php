<?php

 $path=$_SERVER['DOCUMENT_ROOT'];
 include_once $path.'/includes/Login/SessionStart.php';
 sec_session_start();
 include_once $path.'/includes/MSSQLConnectionClass.php';
 $conn=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');
// Unset all session values
 $_SESSION=array();

// get session parameters
 $params=session_get_cookie_params();

// Delete the actual cookie.
 setcookie(session_name(), '', time()-42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

// Destroy session
 session_destroy();
 header('Location: /index.php');
