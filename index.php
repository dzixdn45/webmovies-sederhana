<?php 
require_once("film.php"); 
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<title>Welcome to my portfolio</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href=""/>
<style type="text/css">
.navbar{
    background-color: #0a145e;
}
        .navbar{
            background-color: #0a145e;
        }
        .container-fluid .satu{
            background-color: #0a145e;
        }
        .navbar a{
            color: white;
        }
        .navbar .dtu{
            text-align: center;
        }
        .gambar1{
            width: 60px;
            height: 60px;
        }
        .carousel-inner{
            width: 100%;
        }
        .carousel-inner img{
            height: 300px;
        }
        #about{
            height: 800px;
        }
         h1 {
      margin: 0 0 35px;
      text-transform: uppercase;
      font-family: "MS Reference Sans Serif", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-weight: 700;
      letter-spacing: 1px;
    }
    p {
      margin: 0 0 25px;
      font-size: 18px;
      line-height: 1.5;

    }
    #tulisan{
        margin-top: 100px;
        width: 70%;
    }
    .harus img{
        width: 100px;
        height: 100px;
    }
    .fitur{
        border-left: 3px solid #0e4e63;
    }
    @media (min-width: 768px){
        .produk .container-fluid{
            margin-bottom:600px;
        }
    }
    @media (min-width: 480px){
        .hasim .container-fluid{
            margin-top : 300px;
        }
        .produk .container-fluid{
            margin-top:800px;
        }
        
    }
    @media (min-width: 1024px){
        .hasim .container-fluid{
            margin-top: : 100px;
        }
        .produk .container-fluid{
            margin-top:600px;
        }
    }
    #content .title {
        font-size: 14px;
        font-weight: bold;
        border-bottom: 0px solid #000;
        margin-bottom: 0px;
    }
 
    #content .item {
        margin-bottom: 0px;
        padding-bottom: 0px;
    }
 
        #content .item p {
            margin: 3px 0px;
            padding: 3px 0px;
        }
        .container .footer .row .ya {
            background-color: white;
            font-style: arial;
        }
        .jaf{
            list-style-type:none;
        }
        .jaf li{
            float:left;
            text-decoration:none;
        }
    footer{
        background-color: #0a145e;
    }
</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid satu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="col-md-20">
                <a class="navbar-brand">
                <span class="light">Web Movies Simple</span>
                </a>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#home"> Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="log.php">Upload</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#produk">my film</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">All films</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#kontak">Contact me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div class="row">
    
      <!-- membuat panah next dan previous -->
      <div class="container-fluid">
  <div id="WJSlider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#WJSlider" data-slide-to="0" class="active"></li>
      <li data-target="#WJSlider" data-slide-to="1"></li>
      <li data-target="#WJSlider" data-slide-to="2"></li>
      <li data-target="#WJSlider" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="image/Looper-Banner.jpg" alt="slide1" width="100%" height="300">
        <div class="carousel-caption">
          <h3>Welcome To my website movies</h3>
          <p>my bajakan movies</p>
        </div>
      </div>

      <div class="item">
        <img src="image/Banner.jpg" alt="slide2" width="100%" height="345">
        <div class="carousel-caption">
          <h3>I am coder geek and ui designer</h3>
          <p>I have a passion in the backend developers and ui design</p>
        </div>
      </div>
   
      <div class="item">
        <img src="image/banner1.jpg" alt="slide3" width="100%" height="345">
        <div class="carousel-caption">
          <h3 style="color: black;">i love coding</h3>
          <p>i am interested for web developer</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#WJSlider" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Kembali</span>
    </a>
    <a class="right carousel-control" href="#WJSlider" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Lanjut</span>
    </a>
  </div>
</div>
  </div>
   <div id="about">
    <section id="about" class="container content-section text-center">
       <div class="col-lg-8 col-lg-offset-2" id="tulisan">
                <h1 style="color:#333;"><i class="glyphicon glyphicon-info-sign"></i> My website movies</h2>
                <p style="text-align: left;border-left: 3px solid #0e4e63;padding-left: 10px; color:#333; font-size: 20px;">
                  <br> 
                  <br> selamat datang di website film movie sederhana
                  <br> website ini berisi tentang film film biasa yang biasanya sudah tayang di bioskop yang artinya film bajakan semoga anda terhibur
                  <br> 

                  <br/>
                  <br>                                                                      regrads founder
                  </p>
                  <div class="col-lg-9 col-lg-offset-3">
                  <ul class="nav navbar-nav text-center">
              <li><a href="https://www.instagram.com/dixdin48/" id="twiter"><i class="fa fa-instagram text-center" style="font-size: 50px; color: purple;"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCN6WAHd0tJIqHSwmRJqjieg" id="youtube"><i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 50px; color: red;"></i></a></li>
              <li><a href="https://www.facebook.com/profile.php?id=100006318578592&ref=bookmarks" id="fb" style="font-size: 50px;"><i class="fa fa-facebook text-center"></i></a></li>
</ul>
</div>
            </div>
            </section>
    </div>
    <div class="row">
    <div id="produk">
    <div id="container-fluid">
    <section id="features">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">My All movies</h2>
                    <hr class="primary" style="margin-top:30px; margin-bottom:10px;">
                </div>
                <div class="col-lg-12 text-center harus">
                    
                    <div id="content">
            <div class="title"><?php produk(); ?></div>
                   </div> 
                    
                </div>
    </div>
    </div>
   <div class="row">
    <div class="container saya" id="kontak">
            <div class="row">
                <div class="col-lg-12 text-center nape">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" action="aksi.php" method="POST">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="nama" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="telepon" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="pesan" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div id="success"></div>
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" name="submit" id="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
        </div>
        <footer>
        <div class="footer-below">
            <div class="container footer">
                <div class="row">
                    <div class="col-lg-12 text-center ya">
                        <p style="font-style: arial; font-size: 15px; color: white;">Copyright &copy; webmovies 2017
                        <br/>
                        all reserved created by yahyasoft
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>