<?php

 //include_once $path.'/Includes/MSSQLConnectionClass.php';
 include_once $path.'/Config.php';
 include_once $path.'/Includes/db.php';

 /*
  * This file was written by Michael Hanon. This file is not liscensed for reuse or distribution..
  */

 //if(isset($_POST['title']) and isset($_POST['details']) and isset($_POST['tags'])) {
 $Tags=$_POST['tags'];
 $Title=$_POST['title'];
 $Question=$_POST['details'];

 ff(dbExecute('select id from hanoncs_askme.hanoncs_hanoncs.value where id=1'));


//Insert Question Info
 //$InsertID=dbInsert("Insert into hanoncs_askme.hanoncs_hanoncs.Question (UserID, Title, Question ) Values ('".$_SERVER['userid']."', '".$Title."', '".$Question."')");
 //ff($InsertID);
 //Foreach tag insert into tags tables and assign question id
 //foreach($Tags as $Tag)
 //{
 //    dbInsert('Insert into hanoncs_askme.hanoncs_hanoncs.tags (QuestionID, Tag) Values('.$InsertID.', '.$Tag.');
 //);








