<?php

 /**
  * ConnectionClass - Creates a connection to the database and executes the specified function
  *
  * @version 1.0
  * @author mhano00
  */
 class MSSQLConnectionClass {

     /**
      * A Private variable
      *
      * @var string stores data for the class
      */
     private $serverName;

     /**
      * A Private variable
      *
      * @var string stores data for the class
      */
     private $connectionInfo;

     /**
      * A Private variable
      *
      * @var string stores data for the class
      */
     private $sql;

     /**
      * A Private variable
      *
      * @var string stores data for the class
      */
     private $Result;

     /**
      * A Private variable
      *
      * @var string stores data for the class
      */
     private $Rows;

     /**
      * A Private variable
      *
      * @var string stores data for the class
      */
     private $Row;

     /**
      * A Private variable
      *
      * @var string stores data for the class
      */
     private $stmt;

     /**
      * A Private variable
      *
      * @var array - array used for returning from functions
      */
     private $MyArray=array();

     /**
      * A Private variable
      *
      * @var Connection to the database
      */
     private $conn;
     private $Database;

     /**
      * Creates a Connection to the server upon instanciation of the class
      * Fires everytime the class is used
      */
     public function __construct($_NewServer, $_Database)
     {
         $this->serverName=$_NewServer;
         $this->Database=$_Database;
         $this->Connect();
     }

     public function __destruct()
     {
         //__destruct fires no matter what, this will free up all resources
         if($this->stmt) {
             //frees up the statement
             sqlsrv_free_stmt($this->stmt);
         }
         if($this->conn) {
             //frees up server cache
             sqlsrv_close($this->conn);
         }
     }

     /**
      * Creates a Connection to the server
      *
      */
     public function Connect()
     {
         $this->connectionInfo=["Database"=>$this->Database, "UID"=>"hanoncs_hanoncs", "PWD"=>"Hollydog1!"];
         $this->conn=sqlsrv_connect($this->serverName, $this->connectionInfo);
         if(!$this->conn===true) {
             //if connection fails then try one more time before erroring out.
             $this->conn=sqlsrv_connect($this->serverName, $this->connectionInfo);
             if(!$this->conn===true) {
                 //catches error on no connection to database,
                 //TODO send auto email error
                 echo "Connection could not be established.<br />";
                 die(print_r(sqlsrv_errors(), true));
             }
             else {
                 return $this->conn;
             }
         }
         else {
             return $this->conn;
         }
     }

     /**
      *
      * Executes the $imcomingsql query and returns the first cell in the first row
      *
      * @param string $IncomingSql - The sql query that you want to execute
      */
     public function ExecuteScalar($IncomingSql)
     {
         //select scalar, one cell value is returned
         $this->stmt=sqlsrv_query($this->conn, $IncomingSql);
         if($this->stmt) {
             $this->Rows=sqlsrv_has_rows($this->stmt);
             if($this->Rows) {
                 $this->Row=sqlsrv_fetch_array($this->stmt, SQLSRV_FETCH_NUMERIC);

                 $this->Result=$this->Row[0];
                 return $this->Result;
             }
         }

         return false;
     }

     /**
      * Multiplies two integers
      *
      * Executes the sql query and returns an array of that queried data
      *
      * @param string $IncomingSql - The sql query that you want to execute
      * @Return array $MyArray - The array of the queried value
      */
     public function CreateDataSet($IncomingSql)
     {
         //Returns Array of selected data
         $this->stmt=sqlsrv_query($this->conn, $IncomingSql);
         if($this->stmt) {
             $this->Rows=sqlsrv_has_rows($this->stmt);
             if($this->Rows) {

                 while($this->Row=sqlsrv_fetch_array($this->stmt, SQLSRV_FETCH_NUMERIC))
                 {
                     $this->MyArray[]=$this->Row;
                 }

                 return $this->MyArray;
             }
         }
         else {
             return false;
         }
     }

     /**
      * Inserts the sql query and returns the specified column value
      *
      * @param string $IncomingSql -The sql query that you want to execute
      * @param string $ReturnColumnName - The name of the column that you want to return
      * @Return string/int - The Value of the specified $ReturnColumnName of the inserted row
      */
     public function Insert($IncomingSql)
     {
         //This function will insert values into specified table and retrun the specified column value, usually the ID of inserted row.
         $this->sql=$IncomingSql.'; SELECT SCOPE_IDENTITY();';
         $this->Result=sqlsrv_query($this->conn, $this->sql);

         sqlsrv_next_result($this->Result);
         sqlsrv_fetch($this->Result);
         return sqlsrv_get_field($this->Result, 0);
     }

     /**
      * Sets the server IP to a new IP
      *
      * Accepts one parameter
      *
      * @param int $NewServer the new IP address that you want to switch to
      */
     public function SetServer($_NewServer, $_Database)
     {
         //Must close connection in order to connect to a new one
         if($this->stmt) {
             //frees up the statement
             sqlsrv_free_stmt($this->stmt);
         }
         if($this->conn) {
             //frees up server cache
             sqlsrv_close($this->conn);
         }
         $this->serverName=$_NewServer;
         $this->Database=$_Database;
         $this->Connect();
     }

     /**
      * a simple function to return the current server IP
      *
      * @Return string/int The Current IP address
      */
     public function GetServer()
     {
         return $this->serverName;
     }

 }
