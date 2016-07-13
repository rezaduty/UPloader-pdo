<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 9/16/14
 * Time: 4:15 PM
 */

session_start();
require_once '../../../Function/main.php';
include '../../../Config/db.php';
if(!isset($_SESSION['admin']))
{
    header('location:../index.php');
}
$s=new security();
if(isset($_POST['send']))
{
    $filename=$_FILES['file']['name'];
    if ($filename !="")
    {
        $rtl=$_POST['i'];
        $file=md5($filename.microtime()).substr($filename,-5,5);
        move_uploaded_file($_FILES['file'] ['tmp_name'],"../../../up/advertise/".$file);
        $result=$connect->prepare("INSERT INTO `advertise`(name,rtl) VALUES(:file,:r)");
        $result->execute(array(
            ":file"=>$file,
            ":r"=>$rtl
        ));
    }
    else{

        $filename='e7e391f15e9a26148b572ec53c6a32e2l.jpg';
        $result=$connect->prepare("INSERT INTO `advertise`(name) VALUES(:file)");
        $result->execute(array(
            ":file"=>$filename
        ));
    }
   echo "<meta http-equiv='refresh' content='0; url=money.php'>";
}

?>
<html>
<head>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>پنل مدیریت</title>

    <!-- CSS Reset -->
    <link rel="stylesheet" type="text/css" href="../style/reset.css" tppabs="http://www.xooom.pl/work/magicadmin/css/reset.css" media="screen" />

    <!-- Fluid 960 Grid System - CSS framework -->
    <link rel="stylesheet" type="text/css" href="../style/grid.css" tppabs="http://www.xooom.pl/work/magicadmin/css/grid.css" media="screen" />

    <!-- IE Hacks for the Fluid 960 Grid System -->
    <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="../style/ie6.css"
          tppabs="http://www.xooom.pl/work/magicadmin/css/ie6.css" media="screen"/><![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="../style/ie.css"
          tppabs="http://www.xooom.pl/work/magicadmin/css/ie.css" media="screen"/><![endif]-->

    <!-- Main stylesheet -->
    <link rel="stylesheet" type="text/css" href="../style/styles.css" tppabs="http://www.xooom.pl/work/magicadmin/css/styles.css" media="screen" />

    <!-- WYSIWYG editor stylesheet -->
    <link rel="stylesheet" type="text/css" href="../style/jquery.wysiwyg.css" tppabs="http://www.xooom.pl/work/magicadmin/css/jquery.wysiwyg.css" media="screen" />

    <!-- Table sorter stylesheet -->
    <link rel="stylesheet" type="text/css" href="../style/tablesorter.css" tppabs="http://www.xooom.pl/work/magicadmin/css/tablesorter.css" media="screen" />

    <!-- Thickbox stylesheet -->
    <link rel="stylesheet" type="text/css" href="../style/thickbox.css" tppabs="http://www.xooom.pl/work/magicadmin/css/thickbox.css" media="screen" />

    <!-- Themes. Below are several color themes. Uncomment the line of your choice to switch to different color. All styles commented out means blue theme. -->
    <link rel="stylesheet" type="text/css" href="../style/theme-blue.css" tppabs="http://www.xooom.pl/work/magicadmin/css/theme-blue.css" media="screen" />
    <!--<link rel="stylesheet" type="text/css" href="css/theme-red.css" media="screen" />-->
    <!--<link rel="stylesheet" type="text/css" href="css/theme-yellow.css" media="screen" />-->
    <!--<link rel="stylesheet" type="text/css" href="css/theme-green.css" media="screen" />-->
    <!--<link rel="stylesheet" type="text/css" href="css/theme-graphite.css" media="screen" />-->

    <!-- JQuery engine script-->
    <script type="text/javascript" src="../js/jquery-1.3.2.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery-1.3.2.min.js"></script>

    <!-- JQuery WYSIWYG plugin script -->
    <script type="text/javascript" src="../js/jquery.wysiwyg.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.wysiwyg.js"></script>

    <!-- JQuery tablesorter plugin script-->
    <script type="text/javascript" src="../js/jquery.tablesorter.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.min.js"></script>

    <!-- JQuery pager plugin script for tablesorter tables -->
    <script type="text/javascript" src="../js/jquery.tablesorter.pager.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.pager.js"></script>

    <!-- JQuery password strength plugin script -->
    <script type="text/javascript" src="../js/jquery.pstrength-min.1.2.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.pstrength-min.1.2.js"></script>

    <!-- JQuery thickbox plugin script -->
    <script type="text/javascript" src="../js/thickbox.js" tppabs="http://www.xooom.pl/work/magicadmin/js/thickbox.js"></script>

    <!-- Initiate WYIWYG text area -->
    <script type="text/javascript">
        $(function()
        {
            $('#wysiwyg').wysiwyg(
                {
                    controls : {
                        separator01 : { visible : true },
                        separator03 : { visible : true },
                        separator04 : { visible : true },
                        separator00 : { visible : true },
                        separator07 : { visible : false },
                        separator02 : { visible : false },
                        separator08 : { visible : false },
                        insertOrderedList : { visible : true },
                        insertUnorderedList : { visible : true },
                        undo: { visible : true },
                        redo: { visible : true },
                        justifyLeft: { visible : true },
                        justifyCenter: { visible : true },
                        justifyRight: { visible : true },
                        justifyFull: { visible : true },
                        subscript: { visible : true },
                        superscript: { visible : true },
                        underline: { visible : true },
                        increaseFontSize : { visible : false },
                        decreaseFontSize : { visible : false }
                    }
                } );
        });
    </script>

    <!-- Initiate tablesorter script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#myTable")
                .tablesorter({
                    // zebra coloring
                    widgets: ['zebra'],
                    // pass the headers argument and assing a object
                    headers: {
                        // assign the sixth column (we start counting zero)
                        6: {
                            // disable it by setting the property sorter to false
                            sorter: false
                        }
                    }
                })
                .tablesorterPager({container: $("#pager")});
        });
    </script>

    <!-- Initiate password strength script -->
    <script type="text/javascript">
        $(function() {
            $('.password').pstrength();
        });
    </script>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 9/16/14
 * Time: 4:16 PM
 */
?>
<!-- Header -->
<div id="header">
    <!-- Header. Status part -->
    <div id="header-status">
        <div class="container_12">
            <div class="grid_8">
                &nbsp;
            </div>
            <div class="grid_4">
                <a href="../logout.php" id="logout">
                    خروج
                </a>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div> <!-- End #header-status -->

    <!-- Header. Main part -->
    <div id="header-main">
        <div class="container_12">
            <div class="grid_12">
                <div id="logo">
                    <ul id="nav">
                      <li id="current"><a href="../../index.php">نمای سایت</a></li>
                      <li id="current"><a href="../index.php">صفحه اصلی</li>
                      <li id="current"><a href="../contact/contact.php">پیغام ها</a></li>
                      <li id="current"><a href="../admin.php">تنظیمات کاربری</a></li>
                      <li id="current"><a href="../advertise/money.php">تبلیغات</a></li>
                    </ul>
                </div><!-- End. #Logo -->
            </div><!-- End. .grid_12-->
            <div style="clear: both;"></div>
        </div><!-- End. .container_12 -->
    </div> <!-- End #header-main -->
    <div style="clear: both;"></div>
    <!-- Sub navigation -->
    <div id="subnav">
        <div class="container_12">
            <div class="grid_12">
                <ul>
                    <li><a href="../up/index.php">اخرین اپلود ها</a> </li>
                </ul>
            </div><!-- End. .grid_12-->
        </div><!-- End. .container_12 -->
        <div style="clear: both;"></div>
    </div> <!-- End #subnav -->
</div> <!-- End #header -->
<center><div style="width:700px;">

        <form action="" method="post" enctype="multipart/form-data">
            <br>
            <label for i>اگر میخواهید تبلیغ مورد نظر در سمت چپ قرار گیرد عد 0 و اگر غیر از این را میخواهید عدد 1 را وارد کنید</label>
                <input name="i" width="50px" height="50px">
            <br><br>
            <input type="file" name="file" placeholder="تصویر مورد نظر خود را وارد کنید">
            <br>
            <br>
            <input type="submit" name="send" value="درج">
        </form>
    </div>
</center>
</body>
</html>
