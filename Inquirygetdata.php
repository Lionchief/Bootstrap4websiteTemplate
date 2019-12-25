<?php
     session_start();

     try{
    $Conn  = new  PDO("mysql:host=localhost;dbname=Mysirg","root","");
     }
     catch(PDOException $Exception){
            
        die("Something Went Wrong:");

     }

     if($Conn){
            
          
          if(isset($_REQUEST['Send'])){
             $Name = $_REQUEST['Name'];
             $Email = $_REQUEST['Email'];
             $Mobile = $_REQUEST['Mobile'];
             $Remark = $_REQUEST['Remark'];

              $Query ="INSERT INTO Inquiry(Name ,Email,Mobile , Remark) values(?,?,?,?)";
               
              $Stmt = $Conn->prepare($Query);
                  
              $Bool = $Stmt->execute([$Name,$Email,$Mobile,$Remark]);
                 
                if($Bool){

                    $_SESSION['M1'] ="Thank You . We  will Contact You Soon.";
                  header('location:Home.php');

                }
                 
          }




     }

?>