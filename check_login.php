<?php
session_start();
?>
<?php
if (isset($_POST['i1']) && isset($_POST['i2'])) {
    $username=$_POST['i1'];
    $password=$_POST['i2'];

    $link=mysqli_connect("localhost","scifre_sciuser","sciweb18","scifre_scidata");
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