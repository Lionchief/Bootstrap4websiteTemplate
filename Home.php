<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning point:</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/d1c6620a63.js" crossorigin="anonymous"></script>
     
    <style>
     .img-slider{
         width:100%;
         height:550px;
     }
     .img{
         width:100%;
         height:449px;
     }
     .img-card{
         width:100%;
         height:270px;
     }
    </style>
</head>
<body>
    
<div class="container-fluid">
     
  <?php
     if(isset($_SESSION['M1'])){
       echo"<h1 class='text-center text-capilalize text-danger'>".$_SESSION['M1']."</h1>";
       unset($_SESSION['M1']);
     }


 ?>
    
<header>
 
 <!-- Navbar Open -->   
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
<!-- Navbar Close()   -->

<!-- Carousel [Gallery Slider]  Start -->

<div class="carousel slide" data-ride="carousel" id="MYCAROUSEL">
      
    <div class="carousel-inner">
           
        <div class="carousel-item active">
            <img src="images/Ganesh10.jpg" alt="ganesh_Pic" class="img-slider">
        </div>
        <div class="carousel-item">
            <img src="images/Ganesh11.jpg"  alt="ganesh_Pic" class="img-slider">
        </div>
        <div class="carousel-item">
            <img src="images/Ganesh12.jpg" alt="ganesh_Pic" class="img-slider">
        </div>
        <div class="carousel-item">
            <img src="images/Ganesh13.jpg" alt="ganesh_Pic" class="img-slider">
        </div>


        <ul class="carousel-indicators">
            <li data-target="#MYCAROUSEL" data-slide-to="0"></li>
            <li data-target="#MYCAROUSEL" data-slide-to="1"></li>
            <li data-target="#MYCAROUSEL" data-slide-to="2"></li>
            <li data-target="#MYCAROUSEL" data-slide-to="3"></li>
        </ul>
        
        <a href="#MYCAROUSEL" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#MYCAROUSEL" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

</div>

<!--Carousel [Galleru Slider]  Close-->      
       
</header>
<!-- About Section Start -->

<section>
 <h1 class="text-center display-4 font-weight-bold mt-5">About Us</h1>
 <hr class="w-25 mx-auto mb-5">

 <div class="row">

     <div class="col-sm-6">
            <img src="http://saurabhshuklaclasses.com/wp-content/uploads/2017/07/DSC03115-1-e1500023131371.jpg" alt="Saurab_Shukla" class="img">
     </div>
     <div class="col-sm-6">
         <div class="jumbotron">
              
            <h1 class="text-center display-4 mb-4">  Who is Saurab Shukla </h1>
            <p class="text-justify mt-2">
                    Saurabh Sir is a popular youTuber, owner of mysirg.com and running an institute in Bhopal. He has done Master of Computer Applications from NIT Bhopal (MANIT) in 2006. To get into the premier institute of India, he has got all India rank 6 in MCA entrance exam in 2003. He was placed in Accenture through college campus in 2005. He loves playing chess and programming. He has an experience of 11 years of teaching. Invariably into teaching on various online and offline platform. He is a developer and owner of mysirg.com website which is ranked under worlds top 1 lakh websites and ranked 5000 (approx) in India.
                    source: <a href="https://www.alexa.com/siteinfo/mysirg.com" class="bagde"> Alexa Rank of mysirg.com </a>
            </p>
         </div>
     </div>

 </div>

</section>

<!-- About Section End -->

<!-- Courses Section Start: -->

<section>

    <div class="container">

            <h1 class=" display-4 text-center text-weight-bold mt-5"><span class="font-weight-bold">Courses </span></h1>
            <hr class="w-25 mx-auto mb-5">
            
          
          <div class="row">
               
              <div class="col-sm-4">
                      
                    <div class="card">
                         
                        <img src="data:image/jpeg;base64,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" alt="Web_development" class="card-img-top img-card">

                        <div class="card-body">
                             
                             <h6 class="text-center card-title card-header">Web Development <br>(PHP-MYSQL)</h6>
                             <a href="https://www.youtube.com/channel/UCjH-FPCFAWZEDP8EZVZ0nlQ" class="btn btn-outline-dark d-block">More</a>

                        </div>

                    </div>
                   
              </div>
              <div class="col-sm-4">
                      
                    <div class="card">
                         
                            <img src="https://images-na.ssl-images-amazon.com/images/I/51Y1ICTUT0L._SX258_BO1,204,203,200_.jpg" alt="Web_development" class="card-img-top img-card">
    
                            <div class="card-body">
                                 
                                 <h6 class="text-center card-title card-header">Data Structure & Algorithms <br>(C / C++) </h6>
                                 <a href="https://www.youtube.com/channel/UCu4ztYtW-Bg1KIfcLAULtVQ" class="btn btn-outline-warning d-block">More</a>
    
                            </div>
    
                        </div>
                       
                 
              </div>
              <div class="col-sm-4">
                   
                    <div class="card">
                         
                            <img src="https://www.edureka.co/blog/wp-content/uploads/2017/06/Python-Programming-Edureka.png" alt="Web_development" class="card-img-top img-card">
    
                            <div class="card-body">
                                 
                                 <h6 class="text-center card-title card-header">Python <br>(Data Structure & Algorithms)</h6>
                                 <a href="https://premium.mysirg.com/learn/Python-for-Beginners?" class="btn btn-outline-success d-block">More</a>
    
                            </div>
    
                    </div>
                   
 
              </div>

          </div>
       
          <article class="text-center mt-3">
                     <h6>Click Here For More Courses</h6>
                  <a href="https://premium.mysirg.com" class="btn btn-outline-danger px-3 py-2 mt-2 mb-5">Click Here</a>

              
          </article>
           
    </div>
</section>

<!-- Courses Section End: -->
<!--Address section Start -->

<section >

    <article class="bg-primary text-white text-center py-5 px-2">
          
          <h1 class="display-2 font-weight-bold">For Best Learning Contact Us</h1>
           <h3 class="mt-4">50, Sector C, Behind Bajrang Sweets, Indrapuri, Bhopal <br>
                mobile: 9399199511 (only for batch inquiry) <br>
                Please fill the inquiry form if you wish to join classes</h3>
             
                <a href="#INQUIRY" class="btn btn-outline-dark px-4 text-white">Inquiry</a>
                 

    </article>
   
     
</section>

<!--Address section End -->
 
<!--Gallery Section Start -->

<section>
   
    <h1 class="text-center display-4 font-weight-bold mt-5">Gallery</h1>
    <hr class="w-25 mx-auto mb-5">

    <div class="row">

        <div class="col-sm-4">
             <img src="images/Ganesh10.jpg" alt="Gallery_img" class="img-card img-thumbnail">
        </div>

        <div class="col-sm-4">
             <img src="images/Ganesh11.jpg" alt="Gallery_img" class="img-card img-thumbnail">
        </div>
        <div class="col-sm-4">
             <img src="images/Ganesh12.jpg" alt="Gallery_img" class="img-card img-thumbnail">
        </div>

    </div>

    <div class="row">

            <div class="col-sm-4">
                 <img src="images/Ganesh13.jpg" alt="Gallery_img" class="img-card img-thumbnail">
            </div>
    
            <div class="col-sm-4">
                 <img src="images/Ganesh14.jpg" alt="Gallery_img" class="img-card img-thumbnail">
            </div>
            <div class="col-sm-4">
                 <img src="images/Ganesh2.jpg" alt="Gallery_img" class="img-card img-thumbnail">
            </div>
    
        </div>

    <div class="row">

                <div class="col-sm-4">
                     <img src="images/Ganesh3.jpg" alt="Gallery_img" class="img-card img-thumbnail">
                </div>
        
                <div class="col-sm-4">
                     <img src="images/Ganesh4.jpg" alt="Gallery_img" class="img-card img-thumbnail">
                </div>
                <div class="col-sm-4">
                     <img src="images/Ganesh5.jpg" alt="Gallery_img" class="img-card img-thumbnail">
                </div>
        
    </div>
        


</section>

<!--Gallery Section End -->

<!--Inquiry Section Start:-->


<section id="INQUIRY">

     <div class="text-center my-5">
            <h3 class="font-weight-bold">For Inquiry Click Below:</h3>
            <hr class="w-25 mx-auto">
             <a href="#MYMODAL" data-toggle="modal" class="btn btn-outline-primary px-3 py-2 ">Click Here</a>

     </div>

     <div class="modal fade" id="MYMODAL">

        <div class="modal-dialog">

             <div class="modal-content">
                  
                  <div class="modal-header">

                      <h4> Enter The Detail Given Below :
                      </h4>
                      <button type="button" class="close bg-danger" data-dismiss="modal">
                          &times;
                      </button>

                  </div>
                 <div class="modal-body">

                    <form action="Inquirygetdata.php" method="GET">
                         
                        <div class="form-group">
                             <label for="Name">Name</label>
                             <input type="text" Name="Name" id="" class="form-control" placeholder="Enter Name:" required="required" />
                        </div>

                        <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" Name="Email" id="" class="form-control" placeholder="Enter Email:" required="required" />
                        </div>

                        <div class="form-group">
                                <label for="Mobile">Mobile</label>
                                <input type="tel" Name="Mobile" id="" class="form-control" placeholder="Enter Mobile Number:" required="required" />
                        </div>

                        <div class="form-group">
                                <label for="Name">Remark</label>
                        
                          <textarea class="form-control" Name="Remark" id="" required="required" >
                          </textarea>      
                        </div>

                        <div class="modal-footer justify-content-center">

                            <button type="submit" class="btn btn-danger" Name="Send" value="Send">Send</button>
                            <button type="reset" class="btn btn-success">Cancel</button>
   
                        </div>
                    </form>

                 </div>
                  

             </div>
             
        </div>

     </div>


</section>

<!--Inquiry Section End:-->

<!--Footer Section start:-->
<footer class="bg-dark text-white pb-1">
       <div class="text-center pt-5 ">
            <a href="https://www.facebook.com" class="mr-3"><i class="fab fa-facebook-f fa-2x" style="color:#000000;"></i></a>
            <a href="https://www.twitter.com" class="mr-3"><i class="fab fa-twitter-square fa-2x" style="color:#000000;"></i></a>
            <a href="https://www.youtube.com/user/saurabhexponent1" ><i class="fab fa-youtube fa-2x" style="color:#000000;"></i></a>
           
       </div>
     <p class="text-center pt-3 mt-2 font-weight-bold">© Copyright 2019 Saurah Shukla Classes</p>

</footer>

<!--Footer Section End:-->
</div>

    
</body>
</html>