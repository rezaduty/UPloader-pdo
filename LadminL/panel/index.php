<?php
session_start();
include '../../Config/db.php';
require_once '../../Function/main.php';
require_once '../../Function/jdf.php';
date_default_timezone_set('Asia/Tehran');
$o1=new security;
if(!isset($_SESSION['admin']))
{
    header('location:../index.php');
}
function LogOut()
{
    session_destroy();
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <script src="jqmin.js" type="text/javascript"></script>
        <script type="text/javascript">
            function show() {
                $.ajax({
                    url: "clock.php",
                    success: function(data) { $("#clock").html(data) }
                });
                setTimeout('show();', 1000);
            }
            $(document).ready(show());
        </script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>پنل مدیریت</title>

        <!-- CSS Reset -->
		<link rel="stylesheet" type="text/css" href="style/reset.css" tppabs="http://www.xooom.pl/work/magicadmin/css/reset.css" media="screen" />

        <!-- Fluid 960 Grid System - CSS framework -->
		<link rel="stylesheet" type="text/css" href="style/grid.css" tppabs="http://www.xooom.pl/work/magicadmin/css/grid.css" media="screen" />

        <!-- IE Hacks for the Fluid 960 Grid System -->
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="style/ie6.css"
              tppabs="http://www.xooom.pl/work/magicadmin/css/ie6.css" media="screen"/><![endif]-->
		<!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="style/ie.css"
              tppabs="http://www.xooom.pl/work/magicadmin/css/ie.css" media="screen"/><![endif]-->

        <!-- Main stylesheet -->
        <link rel="stylesheet" type="text/css" href="style/styles.css" tppabs="http://www.xooom.pl/work/magicadmin/css/styles.css" media="screen" />

        <!-- WYSIWYG editor stylesheet -->
        <link rel="stylesheet" type="text/css" href="style/jquery.wysiwyg.css" tppabs="http://www.xooom.pl/work/magicadmin/css/jquery.wysiwyg.css" media="screen" />

        <!-- Table sorter stylesheet -->
        <link rel="stylesheet" type="text/css" href="style/tablesorter.css" tppabs="http://www.xooom.pl/work/magicadmin/css/tablesorter.css" media="screen" />

        <!-- Thickbox stylesheet -->
        <link rel="stylesheet" type="text/css" href="style/thickbox.css" tppabs="http://www.xooom.pl/work/magicadmin/css/thickbox.css" media="screen" />

        <!-- Themes. Below are several color themes. Uncomment the line of your choice to switch to different color. All styles commented out means blue theme. -->
        <link rel="stylesheet" type="text/css" href="style/theme-blue.css" tppabs="http://www.xooom.pl/work/magicadmin/css/theme-blue.css" media="screen" />
        <!--<link rel="stylesheet" type="text/css" href="css/theme-red.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-yellow.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-green.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-graphite.css" media="screen" />-->

		<!-- JQuery engine script-->
		<script type="text/javascript" src="js/jquery-1.3.2.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery-1.3.2.min.js"></script>

		<!-- JQuery WYSIWYG plugin script -->
		<script type="text/javascript" src="js/jquery.wysiwyg.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.wysiwyg.js"></script>

        <!-- JQuery tablesorter plugin script-->
		<script type="text/javascript" src="js/jquery.tablesorter.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.min.js"></script>

		<!-- JQuery pager plugin script for tablesorter tables -->
		<script type="text/javascript" src="js/jquery.tablesorter.pager.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.pager.js"></script>

		<!-- JQuery password strength plugin script -->
		<script type="text/javascript" src="js/jquery.pstrength-min.1.2.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.pstrength-min.1.2.js"></script>

		<!-- JQuery thickbox plugin script -->
		<script type="text/javascript" src="js/thickbox.js" tppabs="http://www.xooom.pl/work/magicadmin/js/thickbox.js"></script>

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
                    <a href="logout.php" id="logout">
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
                          <li id="current"><a href="index.php">صفحه اصلی</li>
                          <li id="current"><a href="contact/contact.php">پیغام ها</a></li>
                          <li id="current"><a href="admin.php">تنظیمات کاربری</a></li>
                          <li id="current"><a href="advertise/money.php">تبلیغات</a></li>

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
                        <li><a href="up/index.php">اخرین اپلود ها</a> </li>
                    </ul>

                </div><!-- End. .grid_12-->
            </div><!-- End. .container_12 -->
            <div style="clear: both;"></div>
        </div> <!-- End #subnav -->
    </div> <!-- End #header -->

		<div class="container_12">



            <!-- Dashboard icons -->
            <div class="grid_7">

                <a href="advertise/money.php" class="dashboard-module">
                	<img src="pics/Crystal_Clear_files.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_files.gif" width="64" height="64" alt="edit" />
                	<span>تبلیغات</span>
                </a>

                <a href="contact/contact.php" class="dashboard-module">
                	<img src="pics/Crystal_Clear_calendar.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_calendar.gif" width="64" height="64" alt="edit" />
                	<span>پیغام ها</span>
                </a>

                <a href="admin.php" class="dashboard-module">
                	<img src="pics/Crystal_Clear_user.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_user.gif" width="64" height="64" alt="edit" />
                	<span>تنظیمات کاربری</span>
                </a>




                <div style="clear: both"></div>
            </div> <!-- End .grid_7 -->

            <!-- Account overview -->
            <div class="grid_5">
                <div class="module">
                        <h2><span>تمای کاربران</span></h2>

                        <div class="module-body">

                        	<p>
                                <strong>نام کاربری وارد شده: </strong>مدیریت<br />
                                <strong>اخرین تاریخ ورود به پنل :</strong><?php echo $currentDate = jdate('Y/m/d H:i:s'); ?><br />


                            </p>




                        </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End .grid_5 -->



        <!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                	<!-- You can change the copyright line for your own -->
                	<p>&copy; 2014. <a href="#" title="Visit For More Free Website Templates">Rash Soft</a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>
