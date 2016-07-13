<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/27/14
 * Time: 12:41 PM
 */
try
{
$username='root';
$password='password';
$dbname='softrash';
$servername='localhost';
$dsn="mysql:host=$servername;dbname=$dbname";
$connect=new PDO($dsn,$username,$password);
$connect->exec("SET CHARACTER SET utf8");
}
catch(PDOException $error)
{
    echo "  Error Of Config File";
}
?>