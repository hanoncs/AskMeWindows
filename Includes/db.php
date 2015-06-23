<?php

 $path=$_SERVER['DOCUMENT_ROOT'];

 require_once $path.'/Includes/Config.php';
 require_once $path.'/Includes/GlobalFunctions.php';
 require $path.'/includes/mail/PHPMailerAutoload.php';

 /**
  *
  * Executes the sql query and returns an array of that queried data
  *
  * @param string $_IncomingSql  The sql query that you want to execute.
  * @param string $_DefaultValue OPTIONAL PARAMETER - The value to return if null.
  * @Return array/string $MyArray The array of the queried value
  */
 function dbArray($_IncomingSql, $_DefaultValue=0)
 {
     $MyArray=[];
     $Result=dbQuery($_IncomingSql);
     if($Result!=0) {
         $Rows=sqlsrv_has_rows($Result);
         if($Rows) {
             while($Row=sqlsrv_fetch_array($Result, SQLSRV_FETCH_BOTH))
             {
                 $MyArray[]=$Row;
             }
             return $MyArray;
         }
     }
     return $_DefaultValue;
 }

 /**
  * Creates a Connection to the server
  *
  */
 function dbConnect()
 {
     $ConnectionInfo=["Database"=>'192.185.6.35', "UID"=>'hanoncs_hanoncs', "PWD"=>'Hollydog123!', "ReturnDatesAsStrings"=>TRUE];
     $Conn=sqlsrv_connect(SERVERNAME, $ConnectionInfo);
     if(!$Conn===true) {
         //If connection fails, try one more time before erroring out.
         $Conn=sqlsrv_connect(SERVERNAME, $ConnectionInfo);
         if(!$Conn===true) {
             //Still could not connect
             ff("A database connection could not be established.<br /><br />Please contact the RMSI Help Desk at 925-262-7162 for assistance.<br />");
             if(SEND_ERROR_EMAILS===TRUE) {
                 $Path=' http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                 gfErrEmail('<strong>Database ConnectionError: </strong>'.print_r(sqlsrv_errors(), true), $Path, 'Database Connection Failed');
             }
             if(ON_SCREEN_ERRORS===TRUE) {
                 ff(print_r(sqlsrv_errors(), true));
             }
             //Kill script to prevent further errors if connection failed.
             die();
         }
         else {
             return $Conn;
         }
     }
     else {
         return $Conn;
     }
 }

 /**
  * Executes the specified update query and returns the number of rows effected.
  *
  * @param string $_IncomingSql The sql query that you want to execute
  * @return int $NumEffected If no rows were deleted, 0 is returned. If the number of affected rows cannot be determined,
  * -1 is returned. If an error occurred, FALSE is returned.
  */
 function dbDelete($_IncomingSql)
 {
     $Result=dbQuery($_IncomingSql);
     if($Result!=0) {
         $NumEffected=sqlsrv_rows_affected($Result);
         return $NumEffected;
     }
     else {
         return 0;
     }
 }

 /**
  *
  * Executes the $ImcomingSql query and returns a bool
  *
  * @param string $IncomingSql The sql query that you want to execute.
  * @return bool will return true if query exetued successfully or false if error.
  */
 function dbExecute($_IncomingSql)
 {
     $Result=dbQuery($_IncomingSql);
     if($Result) {
         return true;
     }
     return false;
 }

 /**
  * Inserts the sql query and returns the ID of the Row Inserted.
  *
  * @param string $IncomingSql The sql query that you want to execute.
  * @return int/string returns the ID of inserted row.
  */
 function dbInsert($_IncomingSql)
 {
     $sql=$_IncomingSql.'; SELECT SCOPE_IDENTITY();';
     $Result=dbQuery($sql);
     sqlsrv_next_result($Result);
     sqlsrv_fetch($Result);
     return sqlsrv_get_field($Result, 0);
 }

 /**
  * Inserts the sql query and returns the number of rows affected
  *
  * @param string $IncomingSql The sql query that you want to execute.
  * @return int returns the number of rows affected
  */
 function dbInsertGetAffected($_IncomingSql)
 {
     $Result=dbQuery($_IncomingSql);
     if($Result!=0) {
         $NumEffected=sqlsrv_rows_affected($Result);
         return $NumEffected;
     }
     else {
         return 0;
     }
 }

 /**
  * Selects a set of records and returns a delimited string of the results.
  * CASE 1: If you do not enter a delimiter parameter, or pass an empty delimiter, you will get a comma separated string with no spaces, eg. 1,2,3,4,5,6,7.
  * CASE 2: If you enter "," for the delimiter you will get a comma separated string with a space eg. 1, 2, 3, 4, 5, 6, 7.
  * CASE 3: If you enter "', '" for the delimiter you will get a comma separated string with a space, surounded by quotes eg. '1', '2', '3', '4', '5', '6', '7'.
  * CASE 4: If you enter any other character you can create a string delimited by the character you enter. You can enter an optional space after the character to space out each value in the string.
  * The Value to Return the DefaultValue if noe results found.
  * @param string $_IncomingSql The sql query that you want to execute.
  * @param string $_Delimimiter OPTIONAL PARAMETER - The character that will separate each result.
  * @param string $_DefaultValue OPTIONAL PARAMETER - The Value to Return if no records found.
  * @Return string $_DefaultValue will Return if no records found in query.
  */
 function dbJoin($_IncomingSql, $_Delimimiter="", $_DefaultValue=0)
 {
     $Return='';
     $Str='';
     $MyArray[]='';
     $Result=dbQuery($_IncomingSql);
     if($Result!=0) {
         $Rows=sqlsrv_has_rows($Result);
         if($Rows) {
             while($Row=sqlsrv_fetch_array($Result, SQLSRV_FETCH_NUMERIC))
             {
                 $MyArray[]=$Row;
             }
             foreach($MyArray as $Key=> $Value)
             {
                 if($_Delimimiter==="") {
                     $Str.= $Value[0].",";
                     $Return=rtrim($Str, ",");
                 }
                 elseif($_Delimimiter===", ") {
                     $Str.= $Value[0].", ";
                     $Return=rtrim($Str, ", ");
                 }
                 elseif($_Delimimiter==="', '") {
                     $Str.= "'".$Value[0]."', ";
                     $Return=rtrim($Str, ", ");
                 }
                 else {
                     $Str.= $Value[0].$_Delimimiter;
                     $Return=rtrim($Str, $_Delimimiter);
                 }
             }
         }
     }
     else {
         $Return=$_DefaultValue;
     }
     return $Return;
 }

 /**
  * This function is designed to catch SQL errors and dispese to the appropriate channels.
  * It can send error emails or display on screen at the time of error.
  * All functions accessing the database need to go through this function in order to catch errors in a standardized way for all pages.
  *
  * @param string $_IncomingSql The sql query that you want to execute.
  * @Param string $_Cursor OPTIONAL PARAMETER - This is the cursor type for scrolling the result set. More Info: https://msdn.microsoft.com/en-us/library/hh487160.aspx
  * @Return resource/bool
  */
 function dbQuery($_IncomingSql)
 {
     $Result=sqlsrv_query(CONN, $_IncomingSql);
//Catch sql errors on query
     if($Result===false) {
         if(($errors=sqlsrv_errors())!=null) {
             CatchSQLErrors($errors, $_IncomingSql);
         }
     }
     return $Result;
 }

 function CatchSQLErrors($errors, $_IncomingSql)
 {
     foreach($errors as $error)
     {
//error display
         $Path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         $Err='<strong>SQL ERROR<br/></strong>'.Format($_IncomingSql).'<br /><span style="font-weight: 600;">Error: </span> '.$error['message'];
         if(ON_SCREEN_ERRORS===TRUE) {
             err($Err);
         }
         $Err=Format($_IncomingSql).'<br /><span style="font-weight: 600;">Error: </span> '.$error['message'];
         if(SEND_ERROR_EMAILS===TRUE) {
             gfErrEmail($Err, $Path, 'SQL Error');
         }
     }
     return 0;
 }

//BULK INSERT/UPDATE
///**
// * This function is designed to catch SQL errors and dispese to the appropriate channels.
// * It can send error emails or display on screen at the time of error.
// * All functions accessing the database need to go through this function in order to catch errors in a standardized way for all pages.
// *
// * @param string $_IncomingSql The sql query that you want to execute.
// * @Param string $_Cursor |--OPTIONAL--| This is the cursor type for scrolling the database. More Info: https://msdn.microsoft.com/en-us/library/hh487160.aspx
// */
//function dbBulk($_IncomingSql, $_Params ="", $_Options = array( "Scrollable" => 'DYNAMIC')){
//    $Result = sqlsrv_prepare(CONN, $_IncomingSql, $_Params, $_Options);
//    if($Result === false)
//    {
//        if(($errors = sqlsrv_errors()) != null)
//        {
//            CatchSQLErrors($errors, $_IncomingSql);
//        }
//    }
//    else
//    {
//        if(sqlsrv_execute($Result))
//        {
//            //Use while loop to make sure all recordsa are stepped through
//            while($res = sqlsrv_next_result($Result)) {}
//        }
//        else
//        {
//            if(($errors = sqlsrv_errors()) != null)
//            {
//                CatchSQLErrors($errors, $_IncomingSql);
//            }
//        }
//    }
//}

 /**
  *
  * Executes the $ImcomingSql query and returns the first cell in the first row
  *
  * @param string $_IncomingSql The sql query that you want to execute.
  * @param string $_DefaultValue The value to return if null.
  */
 function dbStr($_IncomingSql, $_DefaultValue=0)
 {
     $Result=dbQuery($_IncomingSql);
     if($Result!=0) {
         $Rows=sqlsrv_has_rows($Result);
         if($Rows) {
             $Row=sqlsrv_fetch_array($Result, SQLSRV_FETCH_NUMERIC);
             $Result=$Row[0];
             return $Result;
         }
     }
     return $_DefaultValue;
 }

 /**
  * Executes the specified update query and returns the number of rows effected.
  *
  * @param string $_IncomingSql The sql query that you want to execute
  * @return int $NumEffected If no rows were affected, 0 is returned. If the number of affected rows cannot be determined, -1 is returned. If an error occurred, FALSE is returned.
  */
 function dbUpdate($_IncomingSql)
 {
     $Result=dbQuery($_IncomingSql);
     if($Result!=0) {
         $NumEffected=sqlsrv_rows_affected($Result);
         return $NumEffected;
     }
     else {
         return 0;
     }
 }

 /**
  *
  * Executes on script shutdown to close database connection
  */
 function dbShutDown()
 {
     sqlsrv_close(CONN);
 }

 register_shutdown_function('dbShutDown');
