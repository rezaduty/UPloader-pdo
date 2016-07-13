<?php
require_once '../Function/main.php';
include '../Config/db.php';
?>
<html>
<head>
<meta charset="utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
    <script type="text/javascript" language="JavaScript">
        $(document).ready(function(){
            $('form input').change(function () {
                $('form p').text(this.files.length + "یک فایل انتخاب شده");
            });
        });
    </script>
    <style>
        form{
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -250px;
            width: 500px;
            height: 200px;
            border: 4px dashed #fff;
        }
        form p{
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 170px;
            color: #ffffff;
            font-family: Arial;
        }
        form input{
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
        }
        form button{
            margin: 0;
            color: #fff;
            background: #16a085;
            border: none;
            width: 508px;
            height: 35px;
            margin-top: -20px;
            margin-left: -4px;
            border-radius: 4px;
            border-bottom: 4px solid #117A60;
            transition: all .2s ease;
            outline: none;
        }
        form button:hover{
            background: #149174;
            color: #0C5645;
        }
        form button:active{
            border:0;
        }


        body {
            background:#000;
        }

        #load {
            position:absolute;
            width:600px;
            height:36px;
            left:50%;
            top:40%;
            margin-left:-300px;
            overflow:visible;
            -webkit-user-select:none;
            -moz-user-select:none;
            -ms-user-select:none;
            user-select:none;
            cursor:default;
        }

        #load div {
            position:absolute;
            width:20px;
            height:36px;
            opacity:0;
            font-family:Helvetica, Arial, sans-serif;
            animation:move 2s linear infinite;
            -o-animation:move 2s linear infinite;
            -moz-animation:move 2s linear infinite;
            -webkit-animation:move 2s linear infinite;
            transform:rotate(180deg);
            -o-transform:rotate(180deg);
            -moz-transform:rotate(180deg);
            -webkit-transform:rotate(180deg);
            color:#35C4F0;
        }

        #load div:nth-child(2) {
            animation-delay:0.2s;
            -o-animation-delay:0.2s;
            -moz-animation-delay:0.2s;
            -webkit-animation-delay:0.2s;
        }
        #load div:nth-child(3) {
            animation-delay:0.4s;
            -o-animation-delay:0.4s;
            -webkit-animation-delay:0.4s;
            -webkit-animation-delay:0.4s;
        }
        #load div:nth-child(4) {
            animation-delay:0.6s;
            -o-animation-delay:0.6s;
            -moz-animation-delay:0.6s;
            -webkit-animation-delay:0.6s;
        }
        #load div:nth-child(5) {
            animation-delay:0.8s;
            -o-animation-delay:0.8s;
            -moz-animation-delay:0.8s;
            -webkit-animation-delay:0.8s;
        }
        #load div:nth-child(6) {
            animation-delay:1s;
            -o-animation-delay:1s;
            -moz-animation-delay:1s;
            -webkit-animation-delay:1s;
        }
        #load div:nth-child(7) {
            animation-delay:1.2s;
            -o-animation-delay:1.2s;
            -moz-animation-delay:1.2s;
            -webkit-animation-delay:1.2s;
        }

        @keyframes move {
            0% {
                left:0;
                opacity:0;
            }
            35% {
                left: 41%;
                -moz-transform:rotate(0deg);
                -webkit-transform:rotate(0deg);
                -o-transform:rotate(0deg);
                transform:rotate(0deg);
                opacity:1;
            }
            65% {
                left:59%;
                -moz-transform:rotate(0deg);
                -webkit-transform:rotate(0deg);
                -o-transform:rotate(0deg);
                transform:rotate(0deg);
                opacity:1;
            }
            100% {
                left:100%;
                -moz-transform:rotate(-180deg);
                -webkit-transform:rotate(-180deg);
                -o-transform:rotate(-180deg);
                transform:rotate(-180deg);
                opacity:0;
            }
        }

        @-moz-keyframes move {
            0% {
                left:0;
                opacity:0;
            }
            35% {
                left:41%;
                -moz-transform:rotate(0deg);
                transform:rotate(0deg);
                opacity:1;
            }
            65% {
                left:59%;
                -moz-transform:rotate(0deg);
                transform:rotate(0deg);
                opacity:1;
            }
            100% {
                left:100%;
                -moz-transform:rotate(-180deg);
                transform:rotate(-180deg);
                opacity:0;
            }
        }

        @-webkit-keyframes move {
            0% {
                left:0;
                opacity:0;
            }
            35% {
                left:41%;
                -webkit-transform:rotate(0deg);
                transform:rotate(0deg);
                opacity:1;
            }
            65% {
                left:59%;
                -webkit-transform:rotate(0deg);
                transform:rotate(0deg);
                opacity:1;
            }
            100% {
                left:100%;
                -webkit-transform:rotate(-180deg);
                transform:rotate(-180deg);
                opacity:0;
            }
        }

        @-o-keyframes move {
            0% {
                left:0;
                opacity:0;
            }
            35% {
                left:41%;
                -o-transform:rotate(0deg);
                transform:rotate(0deg);
                opacity:1;
            }
            65% {
                left:59%;
                -o-transform:rotate(0deg);
                transform:rotate(0deg);
                opacity:1;
            }
            100% {
                left:100%;
                -o-transform:rotate(-180deg);
                transform:rotate(-180deg);
                opacity:0;
            }
        }

        section {
            position:relative;
            width:460px;
            margin:50px auto;
            background:red;
        }

        textarea {
            background:rgba(0, 0, 0, 0.4);
            width:50%;
            border:none;
            resize:none;
            -webkit-border-top-left-radius: 8px;
            -webkit-border-bottom-left-radius: 8px;
            -moz-border-radius-topleft: 8px;
            -moz-border-radius-bottomleft: 8px;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
            padding:19px 0px 0px 20px;
            box-shadow:0px 1px 0px rgba(225, 225, 225,
            0.2), 0px 1px 0px rgba(0, 0, 0, 0.3) inset;
            outline:none;
            color:white;
            font-weight:bold;
            float:left;
            text-shadow:1px 1px 0px black;
            transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -webkit-transition: all .3s ease-in-out;
        }

        textarea:focus {
            width:70%;
            transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -webkit-transition: all .3s ease-in-out;
        }

        button {
            float:left;
            -webkit-border-top-right-radius: 8px;
            -webkit-border-bottom-right-radius: 8px;
            -moz-border-radius-topright: 8px;
            -moz-border-radius-bottomright: 8px;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
            border:none;
            background: #606c88;
            background: -moz-linear-gradient(top,  #606c88 0%, #3f4c6b 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#606c88), color-stop(100%,#3f4c6b));
            background: -webkit-linear-gradient(top,  #606c88 0%,#3f4c6b 100%);
            background: -o-linear-gradient(top,  #606c88 0%,#3f4c6b 100%);
            background: -ms-linear-gradient(top,  #606c88 0%,#3f4c6b 100%);
            background: linear-gradient(to bottom,  #606c88 0%,#3f4c6b 100%);
            padding:17px;
            box-shadow:0px 1px 0px rgba(225, 225, 225,
            0.2), 0px 1px 0px rgba(0, 0, 0, 0.4) inset;
            outline:none;
            width:20%;
            text-transform:uppercase;
            color:white;
            letter-spacing:2px;
            text-shadow:1px 1px 0px rgba(0, 0, 0, 0.6);
            cursor:pointer;
        }

        button:active {
            box-shadow:inset 0px 2px 1px rgba(0, 0, 0, 0.3);
        }

        .menu1,
        .menu1 ul,
        .menu1 li,
        .menu1 a {
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
        }

        .menu1 { /*Find this class in the css file*/

            height: 40px;
            width: 62%; /*I changed this to a percentage of the page,*/
            margin-left:auto; /*Then added these two margin styles.*/
            margin-right:auto;




            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .menu1 li {
            position: relative;
            list-style: none;
            float: left;
            display: block;
            height: 40px;
        }
        .menu1 li a {
            display: block;
            padding: 0 14px;
            margin: 6px 0;
            line-height: 28px;
            text-decoration: none;

            border-left: 1px solid #393942;
            border-right: 1px solid #4f5058;

            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
            font-size: 13px;

            color: #f3f3f3;
            text-shadow: 1px 1px 1px rgba(0,0,0,.6);

            -webkit-transition: color .2s ease-in-out;
            -moz-transition: color .2s ease-in-out;
            -o-transition: color .2s ease-in-out;
            -ms-transition: color .2s ease-in-out;
            transition: color .2s ease-in-out;
        }

        .menu1 li:first-child a { border-left: none; }
        .menu1 li:last-child a{ border-right: none; }

        .menu1 li:hover > a { color: #8fde62;
        }
        .menu1 ul {

            position: absolute;
            top: 40px;
            left: 0;

            opacity: 50;
            background: #1f2024;

            -webkit-border-radius: 0 0 5px 5px;
            -moz-border-radius: 0 0 5px 5px;
            border-radius: 0 0 5px 5px;

            -webkit-transition: opacity .25s ease .1s;
            -moz-transition: opacity .25s ease .1s;
            -o-transition: opacity .25s ease .1s;
            -ms-transition: opacity .25s ease .1s;
            transition: opacity .25s ease .1s;

        }

        .menu1 li:hover > ul { opacity: 50; }

        .menu1 ul li {
            height: 0;
            overflow: hidden;
            padding: 0;

            -webkit-transition: height .25s ease .1s;
            -moz-transition: height .25s ease .1s;
            -o-transition: height .25s ease .1s;
            -ms-transition: height .25s ease .1s;
            transition: height .25s ease .1s;
        }

        .menu1 li:hover > ul li {
            height: 36px;
            overflow: visible;
            padding: 0;
        }
        .menu1 ul li a {
            width: 100px;
            padding: 4px 0 4px 40px;
            margin: 0;

            border: none;
            border-bottom: 1px solid #353539;
        }

        .menu1 ul li:last-child a { border: none;
        }
        .menu1 a.documents { background: url(../img/docs.png) no-repeat 6px center; }
        .menu1 a.messages { background: url(../img/bubble.png) no-repeat 6px center; }
        .menu1 a.signout { background: url(../img/arrow.png) no-repeat 6px center;
        }
    #menuup
    {
        margin-left: 250px;
        margin-top: 20px;
    }
        #menup
        {
            background-color: #0782C1;
            width: 1320px;
            height: 100px;
        }
        #imgmenup
        {
            width: 200px;
            height: 150px;
            margin-left: 150px;
            margin-top: -90px;
        }










        .box > .icon { text-align: center; position: relative; }
        .box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #63B76C; vertical-align: middle; }
        .box > .icon:hover > .image { background: #333; }
        .box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
        .box > .icon:hover > .image > i { color: white !important; }
        .box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
        .box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
        .box > .icon > .info > h3.title { font-family: "Roboto",sans-serif !important; font-size: 16px; color: #222; font-weight: 500; }
        .box > .icon > .info > p { font-family: "Roboto",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
        .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
        .box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
        .box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
        .box .space { height: 30px; }


    #boxdown
    {
        margin-left: 200px;
        width: 400px;
        height: 500px;
    }

        #boxdown1
        {
            margin-top: -300px;
            margin-left: 500px;
            width: 400px;
            height: 500px;
        }
    #pics1
    {
        margin-top: -1000px;
        margin-left: 1000px;

    }
        #pics2
        {
            margin-top: -300px;
            margin-left: 70px;

        }
    .b{
      background-image: url("image/p.png");
    }
    </style>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"></head>
<body class="b">
<link href="http://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet"/>
<link href="style/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="style/bootstrap-theme.css" rel="stylesheet"/>

<div id="menup">
<br><br>
    <div id="menuup">
    <ul class="menu1">

        <li><a href="index.php">بازگشت به اپلودر</a></li>
        <li><a href="../index.php">خانه</a>








</div>
    <form style="margin-top: -80px" action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <p>choose...</p>
        <button type="submit" name="send">بار گذاری</button>
    </form>
    <!--<div id="load">
        <div>در</div>
        <div>حال</div>
        <div>با</div>
        <div>ر</div>
        <div>گذا</div>
        <div>ر</div>
        <div>ی</div>
    </div>-->
    <?php

    if (isset($_POST['send']))
    {


        $filename=$_FILES['file']['name'];
        if($filename!="")
        {
            $file=md5($filename.microtime()).substr($filename,-5,5);
            $type = $_FILES['file']['type'];
            $size = $_FILES['file']['size'];
            $tmp = $_FILES['file']['tmp_name'];
            $fileEx = explode('.',$_FILES['file']['name']);
            $fileEx = end($fileEx);
            $fileEx = strtolower($fileEx);
            if(($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif" || $type == "application/octet-stream") && ($fileEx == 'png' || $fileEx == 'zip' || $fileEx == 'jpg' || $fileEx == 'jpeg' || $fileEx == 'gif'))
                {

                    move_uploaded_file($_FILES['file'] ['tmp_name'],"./upload/".$file);
                    $result=$connect->prepare("INSERT INTO `upload`(name,size) VALUES(:name,:size)");
                    $result->execute(array(
                        ":size"=>$size,
                        ":name"=>"./upload/".$file
                    ));
                     echo "<script language='javascript' type='text/javascript'>window.location.replace('link.php?file=$file');</script>";
                }
                else
                {
                    echo "<script language='javascript' type='text/javascript'>alert('مجاز به بارگذاری این فایل نمیباشید')</script>";
                }
        }

        else
        {
            echo "<script language='javascript' type='text/javascript'>alert('لطفا فایلی را انتخاب کنید')</script>";
        }

    }
    ?>
    <center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></center>
<textarea style="height: 70px; background-color: transparent;n; margin-left: 290px" readonly dir="rtl">
    پسوند های مجاز :
                    .zip , .jpg , .gif , .png , .jpeg ,
</textarea>
<br><br><br><br><br>
<br>
<div id="boxdown">
<div class="container">
    <div class="row">
        <!-- Boxes de Acoes -->
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image">&nbsp;<i class="fa fa-thumbs-o-up"></i></div>
                    <div class="info">
                        <h3 class="title">برای چی این سایت</h3>
                        <p>
                           این وبسایت با در نظر داشتن مواردی از چمله امنیت از فایل های شما محافظت و ان هارا با ماندگاری بالا در خود جای میدهد
                        </p>

                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </div>
    <br><br>
    <div id="boxdown1">
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">
                <div class="icon">
                    <div class="image">&nbsp;<i class="fa fa-briefcase"></i></div>
                    <div class="info">
                        <h3 class="title">امکانات این اپلود سنتر</h3>
                        <p>
                           این اپلود سنتر وظیفه دارد فایل ها و عکس های شما را با بالاترین کیفیت و امنیت نگهداری کند
                        </p>
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
        <!-- /Boxes de Acoes -->
    </div>
</div>
</div>
<?php

$re=$connect->query("SELECT * FROM `advertise` WHERE rtl=1 ORDER BY ID DESC ");
$row=$re->fetch(PDO::FETCH_ASSOC)
?>
<div id="pics1">
    <img width="200px" height="300px" src="<?php echo "advertise/".$row['name']?>"/>
</div>
<?php
$rew=$connect->query("SELECT * FROM `advertise` WHERE rtl=0 ORDER BY ID DESC");
$row2=$rew->fetch(PDO::FETCH_ASSOC)
?>
<div id="pics2">
    <img width="200px" height="300px" src="<?php echo "advertise/".$row2['name']?>"/>
</div>
</body>
</html>
