<!-- In the name of god-->
<?php

require_once 'Function/main.php';
include 'Config/db.php';
$s=new security();
if(isset($_POST['btnsend']))
{
    $result=$connect->prepare('INSERT INTO `contact` (title,context,email) VALUES(:title,:email,:message)');
    $result->execute(array(
       ":title"=>$_POST['title'],
        ":message"=>$_POST['message'],
        ":email"=>$_POST['email']
    ));
    echo "<script type='text/javascript'>alert('نظر ما با موفقیت ثبت شد ممنون از لطف شما!')</script>";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- templatemo 416 xenon -->
<head>

    <meta charset="utf-8">
    <title>SoftPors</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Normailize Stylesheet -->
    <link rel="stylesheet" href="css/normalize.min.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="css/templatemo_style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
<style type="text/css">
	
.full {
width: 100%;
}

.sm {
display: block;
text-decoration: none;
width: 620px;
margin: auto;
background: red;
}

.punkt {
border-right: 1px solid rgba(0,150,200,.5);
border-bottom: 1px solid rgba(0,150,200,.5);
padding: 0;
display: inline-block;
width: 150px;
height: 65px;
float: left;
  box-shadow: inset 0 -1px 19px rgba(0,150,200,0.13);
  text-align: center;
  line-height: 59px;
  font-family: arial;
  font-size: 25px;
  color: rgba(0,0,0,.5);
  cursor: pointer;
  transition:all 0.2s ease;
}

.punkt:after {
   content: '.';
  color: transparent;
} 

.punkt:last-child {
border-right: none;
border-bottom-right-radius:5px;
box-shadow: 15px -3px 30px rgba(0,150,200,0.01), 53px -1px 35px     rgba(0,150,200,.2), inset -13px 1px 19px  rgba(0,150,200,0.181);
}

.punkt:first-child {
border-bottom-left-radius:5px;
  box-shadow: -15px -3px 30px rgba(0,150,200,0.01), -53px -1px 35px         rgba(0,150,200,.2), inset 13px 1px 19px  rgba(0,150,200,0.181);
}

.punkt:hover {
  color: black;
  border-bottom: 2px solid rgba(255,0,0,.6);
  box-shadow:none;
}

.punkt:hover::after {
  color:red;
}
</style>
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <header class="site-header" id="top">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="logo-wrapper">
                            <a class="navbar-brand" href="#">
                                <em>Soft</em>Pars
                                <span class="logo-s"></span>
                            </a>
                        </div>  
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <span class="nav-s"></span>
                            <li class="active" style="float:right;"><a href="#top">خانه</a></li>
                            <li><a href="#product-inner">فعالیت ها</a></li>
                            <li><a href="#portfolio">اموزش ها و اخبار ها</a></li>
                            <li><a href="#promotion">انجمن</a></li>
                            <li><a href="#contact">تماس با ما</a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </nav>
    </header>
<center><img src="images/besmelah.png" /><center>
    <div class="top-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-holder">
                        <img src="images/1.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 dir="rtl">اپلودر</h4>
                    <h4 dir="rtl">امکانات اپلودر</h4>
                            <center><big><ul dir="rtl">
                                <li dir="rtl">سرعت بسیار بالا</li>
                                <br>
                                <li dir="rtl">امنیت بالا</li>
                                <br>
                                <li>ماندگاری لینک ها تا 2 روز</li>
                                <br>
                                <li>امکان بارگذاری عکس و فیلم </li>
                                <br>
                                <li>اموزش هایی در رابطه با دنیای مجازی</li>
                                <br>
                                <li>انجمن قوی</li>
                            </center></ul>
							<div style="position: absolute; left: -200px; top: 419px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br><a rel="nofollow" href="up" class="button">شروع کنید</a></div>
                </div>
            </div>
        </div>
    </div>
	
    <div id="products">
        <div class="container">
            <div class="row" id="product-inner">
                <div class="col-md-4 product-item text-center">
                    <div class="image-holder">
                        <img src="images/2.png" alt="">
                    </div>
                    <h4>انجمن</h4>
                </div>
                <div class="col-md-4 text-center">
                    <div class="circle">
                        <h3>فعالیت های وب سایت<br> <- -> </h3>
                    </div>
                </div>
                <div class="col-md-4 product-item text-center">
                    <div class="image-holder">
                        <img src="images/3.png" alt="">
                    </div>
                    <h4>اپلودر</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio">
        <div class="container" id="Grid">
        
    </div>

    <div id="bottom-section">
        <div class="container" id="promotion">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-one text-center">
                        <h1>انجمن با<em> قدرت </em>در کنار شماست</h1>
                        <div class="image-holder">
                            <img src="images/4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-one">
                        <div class="title text-right">
                            <h3>انجمن</h3>
                            <span>مزایا انجمن</span>
                        </div>
                        <div dir="rtl" class="text-left">
                            <center><ul dir="rtl">
                                <li>سرعت بالا</li>
                                <li>کیفیت بالا</li>
                                <li>اموزش هایی جدید</li>
                            </center></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="video-holder text-center">
                        <h3>ویدیو معرفی سایت</h3>
                       <iframe src="http://www.aparat.com/video/video/embed/videohash/2zgAS/vt/frame" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" height="360" width="640" ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-form">
                        <h2>تماس با ما</h2>
                        <span>ارسال پیغام</span>
                        <form action="" method="post">
                            <div class="row">
                                <fieldset class="col-md-6">
                                    <input type="text" name="title" id="title" placeholder="تیتر مورد نظر:  ">
                                </fieldset>
                                <fieldset class="col-md-6">
                                    <input type="email" name="email" id="email" placeholder="ایمیل : ">
                                </fieldset>
                                <fieldset class="col-md-12">
                                    <textarea name="message" id="message" placeholder="پیغام: "></textarea>
                                </fieldset>
                                <fieldset class="col-md-12">
                                    <input type="submit" id="button-message" name="btnsend" value="ارسال پیام">
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="right-contact text-center">
                        <h1>هر گونه انتقاد و پیغامی دارید از فرم کنار برای ما بفرستید</h1>
                        <div class="image-holder margin-bottom">
                            <img src="images/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                	<h3>ادرس ما:ولیعصر هنرستان رسالت</h3>
                    <div class="map-holder">
                        <div id="map_canvas" class="map-canvas"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>Copyright © 2084 SoftPors <!-- Credit: www.SoftPors.com --></p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>    
    

    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/jquery.gmap3.min.js"></script>
    
    <!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function($){
            $('#map_canvas').gmap3({
                marker:{
                    address: '16.8496189,96.1288854' 
                },
                    map:{
                    options:{
                    zoom: 15,
                    scrollwheel: false,
                    streetViewControl : true
                    }
                }
            });
        });
    </script>
</body>
</html>
