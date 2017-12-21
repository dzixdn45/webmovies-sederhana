<?php
require_once("koneksi.php");
echo "'<html>
<head>
<title>Welcome to my portfolio</title>
<link rel='stylesheet' href='css/bootstrap.min.css'>
<link rel='stylesheet' href='font-awesome-4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet'>
<style type='text/css'>
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
            height: 500px;
        }
         h1 {
      margin: 0 0 35px;
      text-transform: uppercase;
      font-family: 'MS Reference Sans Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif;
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
    .harus video{
        width: 100%;
        height:auto;
    }
    .fitur{
        border-left: 3px solid #0e4e63;
    }
    @media (min-width: 768px){
        .hasim .container-fluid{
            margin-top: 200px;
        }
    }
    .container .bacok{
        height:500px;
    }
    @media (min-width: 480px){
        .hasim .container-fluid{
            margin-top: 300px;
        }
    }
    @media (min-width: 1024px){
        .hasim .container-fluid{
            margin-top: 100px;
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
            margin-top:200px;
        }
    .footer{
        background-color: #0a145e;
    }
</style>
</head>";
echo "<body id='page-top' data-spy='scroll' data-target='.navbar-fixed-top'>

    <!-- Navigation -->
    <nav class='navbar navbar-custom navbar-fixed-top' role='navigation'>
        <div class='container-fluid satu'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-main-collapse'>
                    <i class='fa fa-bars' aria-hidden='true'></i>
                </button>
                <div class='col-md-20'>
                <a class='navbar-brand'>
                <span class='light'>Web movies simple</span>
                <h1></></h1>
                </a>
                </div>
            </div>

            <div class='collapse navbar-collapse navbar-right navbar-main-collapse'>
                <ul class='nav navbar-nav'>

                    <li class='hidden'>
                        <a href='#page-top'></a>
                    </li>
                    <li>
                    <a class='page-scroll' href='index.php'> Home</a>
                </li>
                <li>
                    <a class='page-scroll' href='index.php'>About</a>
                </li>
                <li>
                    <a class='page-scroll' href=''>Upload</a>
                </li>
                <li>
                    <a class='page-scroll' href=''>my film</a>
                </li>
                <li>
                    <a class='page-scroll' href=''>All films</a>
                </li>
                <li>
                    <a class='page-scroll' href='index.php'>Contact me</a>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>";
   echo "<div class='row'>
   <div class='container aduh'
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>";
if(isset($_GET['barang_id'])){	
  $result = mysql_query("SELECT * FROM film WHERE barang_id = " . $_GET['barang_id'] . "");
  while ($resultRow = mysql_fetch_array($result)) {
    echo '<div class="col-md-10 harus">
    <div class="jumbotron">
    <video id="my-video" class="video-js" controls preload="auto" width="100%" height="50%"
    poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
      <source src="'. $resultRow['video'] .'" type="video/mp4">
      <p class="vjs-no-js">
        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
      </p>
    </video></div>
    </div>
    </div>'.     
                '<div class="row">
                <div class="container bacok">
                <h3>' . $resultRow['barang_nama'] . '</h3> 
                <br>Keterangan : ' . $resultRow['barang_keterangan']   
                            
    ;
  }
}
echo "</div></div></div></div>  
        <div class='footer'>
            <div class='container footer'>
                <div class='row'>
                    <div class='col-lg-12 text-center ya'>
                        <p style='font-style: arial; font-size: 15px; color: white;'>Copyright &copy; samuelclotes 2017
                        <br/>
                        all reserved created by yahyasoft
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>

    <script src='jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script></body></html>";
?>