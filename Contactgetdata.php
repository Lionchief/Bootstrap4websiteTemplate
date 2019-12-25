<?php
session_start();

if(isset($_REQUEST['Submit'])){
           
             try{
           $Conn =   new PDO("mysql:host=localhost;dbname=Mysirg","root","");
             }catch(PDOException $Error){
                 
                die("Ops ! Try Again Next Time:");
             }

  $Name = $_REQUEST['Name'];
  $Email= $_REQUEST['Email'];
  $Mobile = $_REQUEST['Mobile'];
  $C = (isset($_REQUEST['C']))? 1 : 0 ;
  $C1 =(isset($_REQUEST['C1']))? 1 : 0 ;
  $Python =(isset($_REQUEST['Python']))? 1 : 0 ;
  $Php_Mysql =(isset($_REQUEST['Php_Mysql']))? 1 : 0 ;
  $Data_Struture  =(isset($_REQUEST['Data_Structure']))? 1 : 0 ;  
  $Other =(isset($_REQUEST['Other']))? 1 : 0 ;
  $Remark = $_REQUEST['Remark'] ; 
  
    $Query= "INSERT INTO contact(Name,Email,Mobile,C,`C++`,Python,Php_Mysql,Data_Structure,Other,Remark) values(?,?,?,?,?,?,?,?,?,?)"; 
       $Stmt = $Conn->prepare($Query);

      $Bool  = $Stmt->execute([$Name,$Email,$Mobile,$C,$C1,$Python,$Php_Mysql,$Data_Struture,$Other,$Remark]);
    
      if($Stmt->rowCount()){
         $_SESSION['M2'] = "Thank You. We will Contact You Soon :)";

         header('location:Contact.php');

      } 
 



}







?>