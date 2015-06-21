<?php

 $path=$_SERVER['DOCUMENT_ROOT'];
 include_once $path.'/Includes/MSSQLConnectionClass.php';
 include_once $path.'/Config.php';
 $conn=new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');

 /*
  * This file was written by Michael Hanon. This file is not liscensed for reuse or distribution..
  */
 if(isset($_POST['title']) and isset($_POST['question']) and isset($_POST['tags'])) {
     $Tags=$_POST['tags'];
     $Title=$_POST['title'];
     $Question=$_POST['question'];


//Insert Question Info
     $InsertID=dbInsert('Insert into hanoncs_askme.hanoncs_hanoncs.Question (UserID, Title, Question ) Values ('.$_SERVER['userid'].', '.$Title.', '.$Question.');');

     //Foreach tag insert into tags tables and assign question id
     //foreach($Tags as $Tag)
     //{
     //    dbInsert('Insert into hanoncs_askme.hanoncs_hanoncs.tags (QuestionID, Tag) Values('.$InsertID.', '.$Tag.');');
     //}
 }







