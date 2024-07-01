<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taylor's Hospital Management System</title>
    <link rel="icon" href="img/logo_tab.png"/>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" >
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>

    <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("myheader");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        </script>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section" id="myheader">
        <div class="container">
            <div class="logo">
                <a href="">
                    <img src="img/logo.png" width="180px" height="40px" alt="logo">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.php">Home</a></li>
                        <li><a href="#About">About</a></li>
                        <li><a href="#doctors">Doctors</a></li>
                        <li><a href="#contactus">Contact Us</a></li>
                        <li><a href="#location">Location</a>
                        <li><a href="#logins">LOGINS</a>
                    </ul>
                </nav>
                
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="" alt="background image">
        <div class="container">
           
            <div class="zoomin1">
                    <div class="hero-text">
                        <span> <img src="img/logo.png" width="200px" height="50px" alt="logo"></span>
                        <h2></h2>
                        <h3>Malaysia</h3>
                        
                    </br></br></br>
                        <a href="hms/user-login.php" class="primary-btn">Book Appointment</a>
                    </div>
                </div>
            
        </div>

        <div class= "Header-Link" id="logins"></div>
    </br></br></br>

    
    </section>

    
    <!-- Hero Section End -->
    

    <!-- login Section Begin -->

    <section id="logins" class="our-blog container-fluid">
        <div class="container">
            <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/patient1.jpg" width="350px" height="220px" alt="patient">

                            <div class="blog-single-det">
                                <h4>Patient Login</h4>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doc.jpg" width="350px" height="220px" alt="doctor">

                            <div class="blog-single-det">
                                <h4>Doctors login</h4>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" width="350px" height="220px" alt="admin">

                            <div class="blog-single-det">
                                <h4>Admin Login</h4>
                    
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>

            </div>
        </div>
    </section>

    <div class= "Header-Link" id="About"></div>
    <!-- login Section End -->
</br>

    <!-- Home About Section Begin -->
    <section class="home-about-section spad" >
        <div class="container">
            
            <div class="ha-text">
                <h2>About Our Hospital</h2>
                <br>
           </div>
<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['PageDescription'];?>.</p><?php } ?>
            
        </div>
                
                   
                
            
        </div>
        </br>

        <div class= "Header-Link" id="doctors"></div>
    </section>
    <!-- Home About Section End -->
    
    <!-- doctor Section Begin -->
    <section class="team-member-section" >
   
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" >
                        <h2>Our Top Doctors</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="zoomin">
          <div class="member-item set-bg" data-setbg="img/1.webp" alt="Speaker 1">
            
            <div class="mi-social">
                <a name="Puteh bin Atan"></a>
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
                
            </div>
            <div class="mi-text">
                <h5>Dr Anuradha Pathmanathan</h5>
                <h6>Anaesthesiology</h6>
                <span>Master in Medicine (Anaesthesiology)</span>
            </div>
         </div>
       </div>

       <div class="zoomin">
        <div class="member-item set-bg" data-setbg="img/6.webp" alt="Speaker 2">
            <div class="mi-social">
                <a name="Emma Johns"></a>
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>

            <div class="mi-text">
                <h5>Dr Anura Michelle Manuel</h5>
                <h6>Otolaryngology (ENT)</h6>
                <span>Masters Otorhinolaryngology</span>
            </div>
        </div>

    </div>

    <div class="zoomin">

        <div class="member-item set-bg" data-setbg="img/3.webp" alt="Speaker 3">
            <div class="mi-social">
                <a name="Sabtu bin Rai"></a>
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Dr Ahmad Najib Azmi</h5>
                <h6>Gastroenterology</h6>
                <span>MBBS (IIUM)</span>
            </div>
        </div>

        </div>

        <div class="zoomin">
        <div class="member-item set-bg" data-setbg="img/4.webp" alt="Speaker 4">
            <div class="mi-social">
                <a name="Naqaa binti Ikram"></a>
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Dr Choy Yew Sing</h5>
                <h6>Paediatrics / Genetics</h6>
                <span>Master in Paediatrics</span>
            </div>
        </div>

        </div>

        <div class="zoomin">
        <div class="member-item set-bg" data-setbg="img/5.webp" alt="Speaker 5">
            <div class="mi-social">
                <a name="Hussain bin Baasim"></a>
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Dr Khong Su San</h5>
                <h6>Plastic & Reconstructive Surgery</h6>
                <span>Master of Surgery</span>
            </div>
        </div>

        </div>
        <div class="zoomin">
        <div class="member-item set-bg" data-setbg="img/2.webp" alt="Speaker 6">
            <div class="mi-social">
                <a name="Lateefa binti Jaarallah"></a>
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Dr Daniel Zainal Abdul Rahman</h5>
                <h6>General Psychiatry</h6>
                <span>Master’s Psychiatry</span> 
            </div>
        </div> 
        </div>   

    </br> </br> </br> </br>
  
    </section>
    <!-- doctor Section End -->

    <div class= "Header-Link" id="contactus" ></div>


   

    

    <!-- contact form Begin -->

    <section class="home-about-section2 spad">
        <div class="container">
            
               
        <div class="ha-text2">
                <form method="post">
                    
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
                
            
        </div>
        
    </section>
    
</br>
    <!-- contact form Section End -->

    <!-- Newslatter Section Begin -->
    <section class="newslatter-section">
        <div class="container">
            <div class="newslatter-inner set-bg">
                <div class="ni-text">
                    <h3>Subscribe Newsletter</h3>
                    <p>Subscribe to our newsletter and don’t miss anything</p>
                </div>
                <form action="#" class="ni-form">
                    <input type="text" placeholder="Your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <div class= "Header-Link" id="location" ></div>
    </section>
    <!-- Newslatter Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Location</h2>
                        <p>Get directions to our Hospital</p>
                    </div>
                    <div class="cs-text">
                        <div class="ct-address">


                        <?php
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
while ($row=mysqli_fetch_array($ret)) {
?>
                            <span>Address:</span> <br>
                            <?php  echo $row['PageDescription'];?> 
                            <br><br>
                        </div>

                        <ul>
                            <li>
                            <span>Phone:</span>  
                            <?php  echo $row['MobileNumber'];?> <br>
                                
                                
                            </li>
                            <li>
                                <span>Email:</span>
                               <a style="color:#258adc;" href="mailto:<?php  echo $row['Email'];?>" class="test"><?php  echo $row['Email'];?></a><br>
                               
                            </li>


                            <li>
                            <span>Timing: </span>
                            <?php  echo $row['OpenningTime'];?>
                            <li>
                        </ul>
                        <?php } ?>
                        <div class="ct-links">
                            <span>Website:</span>
                            <p><a style="color:#258adc;" href = "">https://Taylorshospital.com/</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-map">


                    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" 
                    marginwidth="0" src="https://maps.google.com/maps?width=564&amp;height=400&amp;hl=en&amp;q=dk senza&amp;t=&amp;z=13&amp;ie=UTF8&amp;
                    iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:
                    right;width:564px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;
                        width:564px;height:400px;}.gmap_iframe {width:564px!important;height:400px!important;}</style></div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="partner-logo owl-carousel">
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/1.jpg" alt="sponsor-1">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/2.png" alt="sponsor-2">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/3.png" alt="sponsor-3">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/4.jpg" alt="sponsor-4">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/5.png" alt="sponsor-5">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="img/6.jpg" alt="sponsor-6">
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="ft-logo">
                           
                            <a href="#" class="footer-logo"><img src="img/logo.png" width="180px" height="40px" alt="logo"></a>
                        </div>
                        
                        <div class="copyright-text"><p>
                             Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                             • Taylorshospital Sdn Bhd (Registration No. 201501045173 [1170495-P]) 
                          </p></div>
                        <div class="ft-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>