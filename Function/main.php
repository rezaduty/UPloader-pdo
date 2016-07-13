<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/27/14
 * Time: 12:41 PM
 */

class security
{
    function hash_pass($value)
    {
        return md5($value);
    }
    function check_get($value)
    {
        $val2=htmlspecialchars($value);
        $val3=addslashes($val2);
        return $val3;
    }
    function check_post($value)
    {
        $val2=htmlspecialchars($value);
        $val3=addslashes($val2);
        return $val3;
    }
    function Check_Ses()
    {
        if(!isset($_SESSION["admin"]))
        {
            header("location:../index.php");
            exit();
        }
    }

}
class error
{
    function login_error($value)
    {
        echo "<center><font color=red><p>".$value."</p></font></center>";
    }
}
?>
