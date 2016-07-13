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
    $result=$connect->prepare('DELETE FROM `contact` WHERE id=:id');
    $result->execute(array(
       ":id"=>$_GET['id']
    ));
}
?>
<html>
<head>
    <meta http-equiv="refresh" content="0; url=contact.php">
</head>
</html>