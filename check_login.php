<?php
session_start();
?>
<?php
require_once 'config.php';
if (isset($_POST['i1']) && isset($_POST['i2'])) {
    $username=$_POST['i1'];
    $password=$_POST['i2'];

    $link=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    $link->set_charset("utf8");
    $myquery="SELECT `rowid`, `fandlname`, `username`, `phone`, `password` FROM `user` WHERE username='$username' AND password='$password'";
    $result=mysqli_query($link,$myquery);
    if (mysqli_num_rows($result)>0) {
        setcookie('user_auto_login', $username, time() + (86400 * 900), "/");
        header("location:index1.php");
        exit();
    }
    else{
        header("location:login.php?error=1");
        exit();
    }
    
}
?>