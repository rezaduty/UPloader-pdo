<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/4/14
 * Time: 9:20 PM
 */
require_once '../../../../Config/db.php';
include '../../../../Function/main.php';
if(isset($_GET['id']))
{
    $result=$connect->prepare('DELETE FROM `upload` WHERE id=:id');
    $result->execute(array(
        ":id"=>$_GET['id']
    ));
}
?>
<html>
<head>
    <meta http-equiv="refresh" content="0; url=../index.php">
</head>
</html>