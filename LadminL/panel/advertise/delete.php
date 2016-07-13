<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 10/4/14
 * Time: 9:20 PM
 */
session_start();
require_once '../../../Config/db.php';
include '../../../Function/main.php';
if(!isset($_SESSION['admin']))
{
    header('location:../index.php');
}
if(isset($_GET['id']))
{
    $re=$connect->query("SELECT * FROM `advertise` WHERE id='".$_GET['id']."'");
    $row=$re->fetch(PDO::FETCH_ASSOC);
    $dir="../../../up/advertise/";
    chmod($dir.$row['name'],0750);
    unlink($dir.$row['name']);

    $result=$connect->prepare('DELETE FROM `advertise` WHERE id=:id');
    $result->execute(array(
        ":id"=>$_GET['id']
    ));


}
?>
<html>
<head>
    <meta http-equiv="refresh" content="0; url=money.php">
</head>
</html>