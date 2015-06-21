<?php

 $path=$_SERVER['DOCUMENT_ROOT'];
 include_once $path.'/Includes/MSSQLConnectionClass.php';
 include_once $path.'/Config.php';
 $conn=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');

 function sec_session_start()
 {
     $session_name='sec_session_id';   // Set a custom session name
     $secure=FALSE;
     // This stops JavaScript being able to access the session id.
     $httponly=true;
     // Forces sessions to only use cookies.
     if(ini_set('session.use_only_cookies', 1)===FALSE) {
         header("Location: ../../loginerror.php?err=Could not initiate a safe session (ini_set)");
         exit();
     }
     // Gets current cookies params.
     $cookieParams=session_get_cookie_params();
     session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
     // Sets the session name to the one set above.
     session_name($session_name);
     session_start();            // Start the PHP session
     session_regenerate_id(true);    // regenerated the session, delete the old one.
 }

 function checkbrute($user_id)
 {
     // Get timestamp of current time
     $now=time();

     // All login attempts are counted from the past 2 hours.
     $valid_attempts=$now-(2*60*60);
     $conn2=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');
     if($stmt=$conn2->ExecuteScalar("SELECT time
                             FROM hanoncs_SecureLogin.Hanoncs_Hanoncs.loginactivity
                             WHERE userid = ".$user_id."
                            AND time > '$valid_attempts'")) {


         // If there have been more than 5 failed logins
         if($stmt>0) {
             return true;
         }
         else {
             return false;
         }
     }
 }

 function login_check()
 {
     $conn3=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');
     // Check if all session variables are set
     if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])) {

         $user_id=$_SESSION['user_id'];
         $login_string=$_SESSION['login_string'];
         $username=$_SESSION['username'];

         // Get the user-agent string of the user.
         $user_browser=$_SERVER['HTTP_USER_AGENT'];
         $stmt=$conn3->ExecuteScalar("SELECT password FROM hanoncs_SecureLogin.Hanoncs_Hanoncs.members WHERE id ='".$user_id."'");
         $password=$stmt;
         if($stmt>0) {
             $login_check=hash('sha512', $password.$user_browser);
             if($login_check==$login_string) {
                 // Logged In!!!!
                 return true;
             }
             else {
                 // Not logged in
                 return false;
             }
         }
         else {
             // Not logged in
             return false;
         }
     }
     else {
         // Not logged in
         return false;
     }
 }

 function login($email, $password, $conn)
 {
     $conn5=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');
     $stmt=$conn5->CreateDataSet("SELECT id, username, password, salt FROM hanoncs_SecureLogin.Hanoncs_Hanoncs.members
       WHERE email ='".$email."'");
     $user_id=$stmt[0][0];
     $username=$stmt[0][1];
     $db_password=$stmt[0][2];
     $salt=$stmt[0][3];




     // hash the password with the unique salt.
     $password=hash('sha512', $password.$salt);
     if($stmt>1) {
         // If the user exists we check if the account is locked
         // from too many login attempts

         if(checkbrute($user_id)==true) {
             // Account is locked
             // Send an email to user saying their account is locked
             return false;
         }
         else {
             // Check if the password in the database matches
             // the password the user submitted.
             if($db_password==$password) {
                 // Password is correct!
                 // Get the user-agent string of the user.
                 $user_browser=$_SERVER['HTTP_USER_AGENT'];
                 // XSS protection as we might print this value
                 $user_id=preg_replace("/[^0-9]+/", "", $user_id);
                 $_SESSION['user_id']=$user_id;
                 // XSS protection as we might print this value
                 $username=preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
                 $_SESSION['username']=$username;
                 $_SESSION['login_string']=hash('sha512', $password.$user_browser);
                 // Login successful.
                 return true;
             }
             else {
                 // Password is not correct
                 // We record this attempt in the database
                 $now=time();
                 //$conn->Insert("INSERT INTO hanoncs_SecureLogin.Hanoncs_Hanoncs.loginattempts(userid, time)
                 //                VALUES ('$user_id', '$now')");
                 return false;
             }
         }
     }
     else {
         // No user exists.
         return false;
     }
 }

 function esc_url($url)
 {

     if(''==$url) {
         return $url;
     }

     $url=preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);

     $strip=array('%0d', '%0a', '%0D', '%0A');
     $url=(string) $url;

     $count=1;
     while($count)
     {
         $url=str_replace($strip, '', $url, $count);
     }

     $url=str_replace(';//', '://', $url);

     $url=htmlentities($url);

     $url=str_replace('&amp;', '&#038;', $url);
     $url=str_replace("'", '&#039;', $url);

     if($url[0]!=='/') {
         // We're only interested in relative links from $_SERVER['PHP_SELF']
         return '';
     }
     else {
         return $url;
     }
 }
