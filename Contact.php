<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/d1c6620a63.js" crossorigin="anonymous"></script>
    
</head>
<body>

<div class="container-fluid">

 
<!--Header Section Start()-->
<header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

                <a href="https://www.Mysirg.com" class="navbar-brand">Mysirg</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#TARGET">
                        <span class="navbar-toggler-icon"> </span>
                </button>
                
                <div class="collapse navbar-collapse" id="TARGET">   
                        <ul class="navbar-nav ml-auto">  
                              <li class="nav-item">
                                <a href="Home.php" class="nav-link">Home</a>
                              </li>
                              <li class="nav-item">
                                <a href="About.php" class="nav-link">About Us</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Courses</a>
                
                                <div class="dropdown-menu">
                                    <a href="https://www.youtube.com/watch?v=EMEvheCVhMk&list=PL7ersPsTyYt2Q-SqZxTA1D-melSfqBRMW" class="dropdown-item">C</a>
                                    <a href="https://www.youtube.com/channel/UCD-scAE4ju78dld1kpcsQfQ" class="dropdown-item">C++</a>
                                    <a href="https://www.youtube.com/channel/UCu4ztYtW-Bg1KIfcLAULtVQ" class="dropdown-item">Data Structure & Algorithm <br> (C/C++) </a>
                                    <a href="https://www.youtube.com/channel/UCjH-FPCFAWZEDP8EZVZ0nlQ" class="dropdown-item">Web-Development <br>(PHP-MYSQL)</a>
                                    <a href="https://premium.mysirg.com/learn/Python-for-Beginners?" class="dropdown-item">Python</a>
                                    <a href="https://premium.mysirg.com/learn/Python-for-Web-using-Django?" class="dropdown-item">Python-Django</a>
                                    <a href="https://premium.mysirg.com" class="dropdown-item">More</a>
                
                                </div>
                
                              </li>
                              <li class="nav-item">
                                <a href="Contact.php" class="nav-link">Contact Us</a>
                             </li>
                        </ul> 
                          
                          <form class="form-inline my-3 my-sm-0" method="" post="">
                                  <input type="text" name="" id="" class="form-control mb-2 mb-sm-0" placeholder="Search" aria-describedby="helpId">
                                  <button type="submit" class="btn btn-outline-primary mx-sm-2">Submit</button>
                          </form>
                
                </div>
                
        </nav>


 <?php
    if(isset($_SESSION['M2'])){
       echo "<h1 class='text-center text-danger display-4'>".$_SESSION['M2']."</h1>";
      unset($_SESSION['M2']);
    }
 ?>
 
</header>

<!--Header Section Close()-->

<!--Contact Section Start()-->
 
<section>
     
      <div class=" col-sm-4 mx-auto font-weight-bold border mt-5">

          <h3 class="text-center ">Contact Us</h3>
          <hr class="w-50 mx-auto">
          <p class="lead">Contact us by submitting form below and we will contact you soon.</p>
           
           <div class="form-group">
                   
    <form action="Contactgetdata.php" method="" > 
               <label for="Name">Name:</label>
               <input type="text" Name="Name" id="" placeholder="Enter Name:" required="required" class="form-control">
           </div>
           <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" Name="Email" id="" placeholder="Enter Email:" required="required" class="form-control">
           </div>
           <div class="form-group">
                <label for="Mobile">Mobile:</label>
                <input type="tel" Name="Mobile" id="" placeholder="Enter Mobile:" required="required" class="form-control">
            </div>
            <div class="form-group">
            <input type="checkbox" Name="C" value="C" > <span>C</span>
            </div>
            <div class="form-group">
                    <input type="checkbox" Name="C1" value="C1" > <span>C++</span>
            </div>
            <div class="form-group">
                    <input type="checkbox" Name="Python" value="Python" > <span>Python</span>
            </div>
            <div class="form-group">
                    <input type="checkbox" Name="Php_Mysql" value="Php_Mysql" > <span>Php-Mysql</span>
            </div>
            <div class="form-group">
                    <input type="checkbox" Name="Data_Structure" value="Data_Structure" "> <span>Data Structure</span>
            </div>
            <div class="form-group">
                    <input type="checkbox" Name="Other" value="Other" > <span>Other</span>
            </div>

            <div class="form-group">
                   <label for="Remark">What do you want to know about Us:</label>
                   <textarea  id="" Name ="Remark" class="form-control" required="required"></textarea>
            </div>
           
            <div class="text-center">
                    <button type="submit" class="btn btn-outline-dark mt-2 mb-3 px-3 py-2" Name="Submit" value="submit">Submit</button>
            </div>
        </form>      
      </div>

</section>

<!-- Contact Section Close()-->

<!--Footer Section start:-->
<footer class="bg-dark text-white pb-1 mt-5">
        <div class="text-center pt-5 ">
             <a href="https://www.facebook.com" class="mr-3"><i class="fab fa-facebook-f fa-2x" style="color:#000000;"></i></a>
             <a href="https://www.twitter.com" class="mr-3"><i class="fab fa-twitter-square fa-2x" style="color:#000000;"></i></a>
             <a href="https://www.youtube.com/user/saurabhexponent1" ><i class="fab fa-youtube fa-2x" style="color:#000000;"></i></a>
            
        </div>
      <p class="text-center pt-3 mt-2 font-weight-bold">© Copyright 2019 Saurah Shukla Classes</p>
 
 </footer>
 
 <!--Footer Section End:-->
 </div>
 
</div>
    
</body>
</html>