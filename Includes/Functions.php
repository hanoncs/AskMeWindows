<?php

 /*
  * This file was written by Michael Hanon. This file is not liscensed for reuse or distribution..
  */

 /**
  * Used for sending auto emails for anything other than errors.
  *
  * @param mixed $_ToAddress  The comma separated string of email addresses to be sent to.
  * @param mixed $_EmailSubject The subject/title of the email to be sent.
  * @param mixed $_EmailBody The body(Text) of the email to be sent.
  * @param mixed $_CCAddress The comma saparated string of CC adddressses.
  */
 function gfAutoEmail($_ToAddress, $_EmailSubject, $_EmailBody, $_CCAddress='')
 {
     $Mail=new PHPMailer;
     if($_CCAddress!='') {
         $CC=explode(',', $_CCAddress);
         foreach($CC as $CCAddress)
         {
             $Mail->addCC($CCAddress);
         }
     }
     if($_ToAddress!='') {
         $To=explode(',', $_ToAddress);
         foreach($To as $ToAddress)
         {
             $Mail->addAddress($ToAddress);
         }
         $Mail->Subject=$_EmailSubject;
         $Mail->Body=$_EmailBody;
         gfSendIt($Mail);
     }
     else {
         trigger_error("Must enter a 'To' Address for gfAutoEmail() parameter. -".$_ToAddress, E_USER_WARNING);
     }
 }

 /**
  * Summary of gfErrEmail
  * @param mixed $ErrorMessage
  * @param mixed $Path
  * @param mixed $_Subject
  */
 function gfErrEmail($ErrorMessage, $Path, $_Subject)
 {
     $mail=new PHPMailer;

     $mail->addAddress('hanoncs@gmail.com');
     $mail->Subject=$_Subject;
     $mail->Body='<span style="font-weight:600;">UserID:</span> '.GUID.'<br /><span style="font-weight:600;"> User:</span> '.GFULLNAME.'<br />'.$ErrorMessage.'<br /><span style="font-weight:600;"> Page:</span> '.$Path.'</span>';
     gfSendIt($mail);
 }

 /**
  * Summary of gfSendIt
  * @param mixed $Mail
  */
 function gfSendIt($mail)
 {
     //SMTP needs accurate times, and the PHP time zone MUST be set
     date_default_timezone_set('Etc/UTC');

     $mail->SMTPDebug=EMAIL_DEBUG_OUTPUT;                               // Enable verbose debug output
     //$Mail->Debugoutput='html';
     $mail->isSMTP();                                      // Set mailer to use SMTP
     $mail->Host='sns31.win.hostgator.com;sns32.win.hostgator.com';  // Specify main and backup SMTP servers
     $mail->SMTPAuth=true;                               // Enable SMTP authentication
     $mail->Username='hanoncs@hanontest.com';                 // SMTP username
     $mail->Password='Hollydog123!';                           // SMTP password
     $mail->SMTPSecure='tls';                            // Enable TLS encryption, `ssl` also accepted
     $mail->Port=25;                                    // TCP port to connect to

     $mail->From='error@hanontest.com';
     $mail->FromName='Michael';
     $mail->addAddress('hanoncs@gmail.com', 'Michael Hanon');     // Add a recipient
     //$mail->addAddress('michael.hanon@rmsicorp.com');               // Name is optional
     //$mail->addReplyTo('hanoncs@aol.com', 'Information');
     //$mail->addCC('cc@example.com');
     //$mail->addBCC('bcc@example.com');
     //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
     $mail->isHTML(true);                                  // Set email format to HTML
     $mail->Subject='Here is the subject';
     $mail->Body='This is the HTML message body <b>in bold!</b>';
     $mail->AltBody='This is the body in plain text for non-HTML mail clients';
     if(!$mail->send()) {
         echo 'Message could not be sent.';
         echo 'Mailer Error: '.$mail->ErrorInfo;
     }
     else {
         echo 'Message has been sent';
     }
 }

 /**
  * Selects a set of records and returns a string of HTML <option></option> tags of the selected values. This is to be used inside of <select></select> tags.
  *
  * @param string $_IncomingSql The sql query that you want to execute.
  * @param string $_SelectedValue OPTIONAL PARAMETER - The selected item on load. Based on Value.
  * @param string $_FirstValueName OPTIONAL PARAMETER - Add custom item. Usually "Select". This will set the name="" attribute that will be apended to the custom <option> element.
  * @param string $_FirstValue OPTIONAL PARAMETER - Add custom item. Usually "0". This will set the value="" attribute that will be appended to the custom <option> element.
  */
 function gfOption($_IncomingSql, $_SelectedValue=0, $_FirstValueName='', $_FirstValue=0)
 {
     $Result=dbQuery($_IncomingSql);
     if($Result!=0) {
         $Str='';
         $I=0;
         if($_FirstValue!='' or $_FirstValueName!='') {
             $Str.= '<option value="'.$_FirstValue.'" name="'.$_FirstValueName.'">'.$_FirstValueName.'</option>';
         }
         $C=0;
         ;
         while($row=sqlsrv_fetch_array($Result, SQLSRV_FETCH_NUMERIC))
         {
             $I++;
             $C=count($row);

             if($C===1) {
                 $Str.= '<option value="'.$row[0].'" name="'.$row[0].'" ';
             }
             elseif($C===2) {

                 $Str.= '<option value="'.$row[0].'" name="'.$row[1].'" ';
             }
             elseif($C===3) {
                 if($row[0]===$row[2]) {
                     $Str .='style="background-color:yellowgreen"';
                 }
             }
             elseif($C===4) {
                 if($row[0]===$row[2] and $row[3]!='') {
                     $Str .='style="background-color:'.$row[3].';"';
                 }
             }
             if($_SelectedValue==$row[0]) {
                 $Str.= 'Selected="selected"';
             }
             if($C===1) {
                 $Str.= '>'.$row[0].'</option>';
             }
             elseif($C===2) {
                 $Str.= '>'.$row[1].'</option>';
             }
         }
         return $Str;
     }
     return '0';
 }

 /**
  * Will take a string and write it on the screen in a formatted, readable format.
  *
  * @param string $_Msg The message that you want to print on the screen,
  */
 function ff($_Msg)
 {
     if($_Msg!='') {
         echo Format('<div style="border:4px solid black; opacity:0.8; background-color:#F2F2F2; padding:5px; margin:10px;"> '.$_Msg.'</div>');
     }
 }

 /**
  * Will take a string and write it on the screen in a formatted, readable format.
  *
  * @param string $_Msg The message that you want to print on the screen,
  */
 function err($_Msg)
 {
     if($_Msg!='') {
         echo Format('<div style="border:4px solid tomato; opacity:0.8; background-color:#F2F2F2; padding:5px; margin:10px;">'.$_Msg.'</div>');
     }
 }

 /**
  * Will take a string and format the SQL into a readable format.
  *
  * @param string $_IncomingSql The message that you want to foamat.
  */
 function Format($_IncomingSql)
 {
     $str='';
     $str=str_ireplace("From", "<br />FROM", $_IncomingSql);
     $str2=str_ireplace("Set", "<br />SET", $str);
     $str3=str_ireplace("Join", "<br />JOIN", $str2);
     $str4=str_ireplace("Update", "<br />UPDATE", $str3);
     $str5=str_ireplace("Select", "SELECT", $str4);
     $str6=str_ireplace("Where", "<br />WHERE", $str5);
     $str7=str_ireplace("GROUP BY", "<br />GROUP BY", $str6);
     $str8=str_ireplace("ORDER BY", "<br />ORDER BY", $str7);
     $str9=str_ireplace("Having", "<br />HAVING", $str8);
     $str10=str_ireplace("Union", "<br />Union", $str9);
     $str11=str_ireplace("Values", "<br />VALUES", $str10);
     $str12=str_ireplace("And", "<br />AND", $str11);
     $str13=str_ireplace("Left", "<br />LEFT", $str12);
     $str14=str_ireplace(", ISNULL", "<br />, ISNULL", $str13);
     $str15=str_ireplace(") as X", "<br />) as X", $str14);
     $str16=str_ireplace(",(", "<br />,(", $str15);
     $str17=str_ireplace(") as ", "<br />) as ", $str16);
     $str18=str_ireplace("Delete", "<br />DELETE", $str17);
     $str19=str_ireplace("Insert", "<br />INSERT", $str18);
     return $str19;
 }

//Set error handler function (See function below)

 set_error_handler("StandardErrorHandler");

 /**
  * Will take an error string and if ON_SCREEN_SQL_ERRORS  is set to on, it will display the error on the screen with the SQL in a readable format and
  * if SEND_SQL_ERROR_EMAILS is set to on, it will dendthe error email with the SQL in a readable format.
  *
  *  PHP will pass these parameters automatically on error.
  *
  * @param string $errno The error type code.
  * @param string $errstr The error string.
  * @param string $errfile The file that the error occured in.
  * @param string $errline The line number that the error occured.
  */
 function StandardErrorHandler($errno, $errstr, $errfile, $errline)
 {
     $Err=$errstr.'<br />'.GetErrorType($errno).'on line '.$errline.' in '.$errfile.'<br />';
     if(ON_SCREEN_ERRORS===TRUE) {
         err($Err);
     }
     if($errno=='256' and SEND_ERROR_EMAILS===TRUE) {
         $Path="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         gfErrEmail($Err, $Path, 'SQL Error');
     }
 }

//Set the Fatal Error Handler function (See function below)
 register_shutdown_function("FatalErrorHandler");

 /**
  * This function gets called on script shutdown, it will check if the last error is a fatal error. You cannot catch fatal errors,
  * but using this function we will be notified about it and be able to fix it.
  * If error is fatal, and if ON_SCREEN_FATAL_ERRORS is set to ON, this function will display the fatal error on the screen.
  * If error is fatal, and if SEND_FATAL_ERROR_EMAILS is set to ON, this function will send error email.
  *
  */
 function FatalErrorHandler()
 {

     $error=error_get_last();
     if($error!==NULL) {
         if($error["type"]=='1'||$error["type"]=='4'||$error["type"]=='16'||$error["type"]=='64'||$error["type"]=='4096') {
             $errno=GetErrorType($error["type"]);
             $errfile=$error["file"];
             $errline=$error["line"];
             $errstr=$error["message"];
             $Err='<strong>'.$errno.'<br/></strong>'.$errstr.'<br />'.$errno.' on line '.$errline.' in '.$errfile.'<br />';
             if(ON_SCREEN_ERRORS===TRUE) {
                 err($Err);
             }
             if(SEND_ERROR_EMAILS===TRUE) {
                 $Path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 gfErrEmail($Err, $Path, $errno);
             }
         }
     }
 }

 /**
  * This function receives the error code and returns the specified string.
  * The return strings are what the error message will display.
  *
  * @return string The error title
  */
 function GetErrorType($Type)
 {
     switch($Type)
     {
         case 1:
             // 'E_ERROR';
             return 'Fatal Error ';
         case 2:
             // 'E_WARNING';
             return 'Warning ';
         case 4:
             // 'E_PARSE';
             return 'Compile Time Parse Error ';
         case 8:
             // 'E_NOTICE';
             return 'Notice ';
         case 16:
             // 'E_CORE_ERROR';
             return 'Fatal Start up Error ';
         case 32:
             // 'E_CORE_WARNING';
             return 'Start Up Warning ';
         case 64:
             //'E_COMPILE_ERROR';
             return 'Fatal Compile Time Error ';
         case 128:
             // 'E_COMPILE_WARNING';
             return 'Compile Time Warning ';
         case 256 :
             // 'E_USER_ERROR' - USED FOR SQL ERRORS - DO NOT USE THIS ERROR CODE to TRIGGER_ERROR()
             return 'SQL Error ';
         case 512:
             // 'E_USER_WARNING';
             return 'Warning - Thrown using trigger_error() ';
         case 1024:
             // 'E_USER_NOTICE';
             return 'Notice - Thrown using trigger_error() ';
         case 2048:
             // 'E_STRICT';
             return 'Strict Error (PHP suggest changes to your code which will ensure the best interoperability and forward compatibility of your code.) ';
         case 4096:
             // 'E_RECOVERABLE_ERROR';
             return 'Catchable Fatal Error (This error can be caught, use a Try Catch) ';
         case 8192:
             // 'E_DEPRECATED';
             return 'Warns you of depreciated code that will not work in future versions of PHP. ';
         case 16384:
             // 'E_USER_DEPRECATED';
             return 'Programmer Triggered Error - Thrown using trigger_error() ';
     }
     return "Error Type Undefined ";
 }
