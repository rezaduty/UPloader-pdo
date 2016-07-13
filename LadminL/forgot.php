<?php
include '../Config/db.php';
require_once '../Function/main.php';
$o1=new security;
$o2=new error;
if(isset($_POST['send']))
{
    $t=$o1->check_post($_POST['send']);
    $q="SELECT COUNT(*) FROM `tbl_admin` WHERE email= :email";
    $result=$connect->prepare($q);
    $email=$o1->check_post($_POST['email']);
    $result->execute(array(
       ":email"=>$email
    ));
    $num=$result->fetchColumn();
    if($num==1)
    {
        $q1="SELECT * FROM `tbl_admin`";
        $e=$connect->query($q1);
        while($row=$e->fetch(PDO::FETCH_ASSOC))
        {
            $o2->login_error('پسورد شما:'.$row['pass']);
        }

    }
    else{
        $o2->login_error("چنین ایمیلی وجود ندارد");
    }
}
?>
<html>
<head>
<meta for charset="utf8">
<title>Login Page</title>
<style type="text/css">
/* Reset */
html,body,div,span,applet,object,iframe,input,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{
    margin:0;
    padding:0;
}
.clear { clear:both; }
input:focus, a:focus { outline: none; }
/* General Section */

html {
    background:black;
    margin: 0;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 18px;
    color:#ffffff;
}

/** The wrapper that will contain our two forms **/

.form-login {
    background: #232323;
    right: 0px;
    margin: 0px auto;
    margin-top:100px;
    width: 400px;
}
/* header */
.header {
    height:60px;
    background: #1b1b1b;
    text-align:center;
    font-size:18px;
    font-weight:bold;
    text-transform:uppercase;
    color:#4d4d4d;
}
.header span{
    padding-top:20px;
    float:left;
    text-align:center;
    width:278px;
}
.link-head-left {
    display:block;
    float:left;
    height:60px;
    width:60px;
    border-right:1px solid #232323;
}
.link-head-right {
    display:block;
    float:right;
    height:60px;
    width:60px;
    border-left:1px solid #232323;
}
.icon-home {
    background: url(../images/icon-home.png) no-repeat;
    width:16px;
    height:16px;
    display:block;
    margin:20px auto;
}
.icon-config {
    background: url(../images/icon-config.png) no-repeat;
    width:16px;
    height:16px;
    display:block;
    margin:20px auto;
}
/* avatar */
.avatar {
    margin-top:25px;
    text-align:center;
}
.avatar img{
    width:180px;
    height:180px;
    border:15px solid #1b1b1b;
    margin-right: 40px;
    -webkit-border-radius: 180px;
    -moz-border-radius: 180px;
    border-radius: 180px;
}
/* inputs */
.inputs {
    margin-top:10px;
    color:#4d4d4d;
}
.inputs input[type="text"], .inputs [type="password"], .inputs [type="email"] {
    width:340px;
    height:45px;
    background:#1b1b1b;
    color:#4d4d4d;
    font-size:16px;
    margin-top:15px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border:0;
    margin-left:20px;
    padding:0px 10px;
}

/* info box */
.link-1 {
    margin-top:15px;
    margin-left:20px;
    float:left;
    color:#4d4d4d;
}
input[type="checkbox"] {
    display:none;
}

input[type="checkbox"] + label {
    font-size:13px;
}
input[type="checkbox"] + label span {
    display:inline-block;
    width:22px;
    height:22px;
    vertical-align:middle;
    background:url(../images/check_radio_sheet.png) -1px top no-repeat;
    background-position:-0px 0px;
    cursor:pointer;
}
input[type="checkbox"]:checked + label span {
    background:url(../images/check_radio_sheet.png) -23px top no-repeat;
}
.link-2 {
    float:right;
    margin-top:15px;
    margin-right:20px;
}
.link-2 a, .link-2 a:hover {
    color:#4d4d4d;
}
.link-2 a:hover {
    text-decoration:none;
}

/* send button */
.button-login input[type="submit"] {
    width:360px;
    height:55px;
    margin-left:20px;
    margin-top:25px;
    font-size:18px;
    font-weight:bold;
    text-transform:uppercase;
    outline: none;
    position: relative;
    cursor: pointer;
    border-radius: 5px;
    color: #fff;
    border:0;
    box-shadow:
        inset 0 1px #ba3c30,
        inset 1px 0 #ba3c30,
        inset -1px 0 #ba3c30,
        inset 0 -1px #ba3c30,
        0 2px #ba3c30,
        0 3px #ba3c30,
        0 4px 2px rgba(0,0,0,0.0)
;
    background: #e84c3d;
}
.button-login input[type="submit"]:hover { opacity:0.9; }
.button-login input[type="submit"]:active {
    top: 3px;
    background: #e84c3d;
    box-shadow: inset 0 1px 2px #ba3c30;
}
/* footer */
.footer-login {
    margin-top:20px;
    padding-top:25px;
    height:65px;
    background:#1b1b1b;

}
.social-links {
    list-style:none;
    margin-left:105px;
}
.social-links li{
    float:left;
}
.social-links li a{
    display:block;
    width:45px;
    height:45px;
    margin-right:15px;
}
.social-links li a span{
    display:block;
    text-indent:-9999px;
    margin-left:20px;
    width:45px;
    height:45px;
}
.social-links li a:hover span{ opacity:0.9; }
.social-links li.facebook a span{
    background-image:url(../images/facebook.png);
}
.social-links li.twitter a span{
    background-image:url(../images/twitter.png);
}
.social-links li.google-plus a span{
    background-image:url(../images/google.png);
}

.link-to-page {
    text-align:center;
    color:#1b1b1b;
    margin-top:20px;
}
.link-to-page a {
    color:#e84c3d;
}

/************** CONFIG **************/
.config-box
{
    display: none;
    width:74px;
    height:134px;
    background:url(../images/white-color-bg.png);
    font-size:14px;
    color:#ccc;
    margin-left:410px;
    padding:15px 15px 15px 22px;
    position:absolute;
    text-align:left;
}
.colors {
    margin-left:-10px;
}
.colors a {
    margin:5px 0px 5px 12px;
    display:block;
    float:left;
    width:30px;
    height:30px;
}
.style-bg {
    margin-top:10px;
    margin-left:3px;
}
.style-bg a{
    color:#4d4d4d;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight:normal;
    text-transform:none;
    text-decoration:none;
    padding-left:25px;
    background: url(../images/settings/no-active.png) no-repeat;
    margin-bottom:5px;
    display:block;
}
.style-bg a.active{ background:url(../images/settings/active.png) no-repeat; }
.main-item:focus ~ .config-box,
.main-item:active ~ .config-box,
.config-box:hover
{
    display: block;
}
.img
{
    margin-right: 50px;
}
</style>
</head>
<body>
<!DOCTYPE html>
<html lang="en"  class="body-error"><head>
    <meta charset="utf-8">
    <title>Night Login Form - Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


</head>

<body>
<div id="wrapper">
    <form action="" class="form-login" method="post">

        <div class="header">
            <a href="index.html" class="link-head-left"><i class="icon-home"></i></a>
            <span>صفحه ورود</span>

            <div class="config-box">
                <div class="colors">
                    <a href="javascript:chooseStyle('blue-theme', 30)"><img src="http://marvin.ibeu.org.br/ibeudigital/images/thumb/4/42/Welcome.png/180px-Welcome.png.jpeg" alt=""></a>
                    <a href="javascript:chooseStyle('orange-theme', 30)"><img src="images/settings/orange.png" alt=""></a>
                    <a href="javascript:chooseStyle('green-theme', 30)"><img src="images/settings/green.png" alt=""></a>
                    <a href="javascript:chooseStyle('none', 30)"><img src="images/settings/red.png" alt=""></a>
                    <div class="clear"></div>
                </div>
                <div class="style-bg">
                    <a href="/demo/loginform/black/index.html" class="active">Black</a>
                    <a href="/demo/loginform/white/index.html">White</a>
                </div>
            </div>
        </div>
        <div class="avatar"><center><img class="img" src="logo.png" alt=""></center></div>

        <div class="inputs">
            <input name="email" type="text" required placeholder="ایمیل" />

            <div class="link-1">
                <input type="checkbox" id="c2" name="cc" checked="checked" />
                <label for="c2"><span></span> یادت بمونه</label>
            </div>
            <div class="link-2"><a href="index.php">بازگشت به صفحه مدیریت</a></div>
            <div class="clear"></div>

            <div class="button-login"><input type="submit" value="ورود" name="send"></div>
        </div>

        <div class="footer-login">
            <center><p>این صفحه برای رورد به پنل مدیریت است</p></center>
            <ul class="social-links">
                <li class="twitter"><a href="#"><span>twitter</span></a></li>
                <li class="google-plus"><a href="#"><span>google</span></a></li>
                <li class="facebook"><a href="#"><span>facebook</span></a></li>
            </ul>
        </div>


    </form>



    <div class="clear"></div>
    <div class="link-to-page">اکانتی ندارید؟ <a href="sign-up.html">برای ورود کلیک کنید</a></div>
</div>


</body>
</html>
