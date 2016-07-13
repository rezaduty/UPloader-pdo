<?php
// in the name of god
session_start();
include '../Config/db.php';
require_once '../Function/main.php';
$o1=new security;
    $q="SELECT COUNT(*) FROM `tbl_admin` WHERE username= :username and password= :password";
    $result=$connect->prepare($q);
    $username=$o1->check_post($_POST['username']);
    $result->execute(array(
       ":username"=>$username,
        ":password"=>$o1->hash_pass($_POST['password'])
    ));
    $num=$result->fetchColumn();
    if($num==1)
    {
        $_SESSION['admin']='admin';

        header("location:./panel/index.php");
        exit();
    }
    else
    {
        header("location:index.php?id=1099");
        exit();
    }



?>
