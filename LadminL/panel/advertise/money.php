<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 9/16/14
 * Time: news:32 PM
 */
session_start();
require_once './../../../Config/db.php';
include './../../../Function/main.php';
if(!isset($_SESSION['admin']))
{
    header('location:../index.php');
}
$o1=new security();
?>
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
<table>
    <tr></tr>
    <?php
    $counter=5;
    $page =$o1->check_get(@$_GET['page']);
    if($page=='') $page=1;
    $start=($page-1)*$counter;
    $result=$connect->query("SELECT * FROM advertise ORDER BY `id` DESC LIMIT ".$start.",".$counter."");
    while($rows=$result->fetch(PDO::FETCH_ASSOC))
    {
        ?>
        <div class="module-table-body">
            <form action="">
                <table id="myTable" class="tablesorter">
                    <thead>
                    <tr>
                        <th style="width:5%">#</th>
                        <th style="width:20%">شماره خبر</th>
                        <th style="width:21%">موضوع</th>
                        <th style="width:13%">نویسنده</th>
                        <th style="width:13%">محل تبلیغات</th>
                        <th style="width:13%">تاریخ درج</th>
                        <th style="width:15%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="align-center">=></td>
                        <td><a href=""><?php echo $rows['id'];?></a></td>
                        <td><img width="150px" height="150px" src="<?php echo '../../../up/advertise/'.$rows["name"];?>"/></td>
                        <td><?php echo $rows["size"];?></td>
                        <td>مدیریت</td>
                        <td><?php echo $rows['rtl']?></td>
                        <td>
                            <input type="checkbox" />
                            <a href="<?php echo "de/edit.php?id=$rows[id]"?>"><img src="../pics/pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                            <a href="<?php echo "delete.php?id=$rows[id]"?>"><img src="../pics/bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </form>
        </div>
    <?php
    };
    ?>
    <?php
    $sql="SELECT * FROM `advertise`";
    $query=$connect->query($sql);
    $number=$query->rowCount();
    $number=ceil($number/$counter);
    if($page>0 && $page<$number)
    {
        echo " <h4><center><a href=?page=".($page+1)."> بعدی </a> ";
    }
    if($page>1 && $page<=$number)
    {
        echo " <h4><center><a href=?page=".($page-1)."> قبلی </a> ";
    }
    echo "<h4><center><br/>صفحه فعلی:".$page;
    ?>
    <center><a href="insert.php"><button>جدید</button></a></center>
</table>
</body>
</html>
