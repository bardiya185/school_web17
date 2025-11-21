<?php
session_start();
?>
<?php
if (isset($_POST['i1']) && isset($_POST['i2']) && isset($_POST['i3']) && isset($_POST['i4'])) {
    $fullname=$_POST['i1'];
    $username=$_POST['i2'];
    $phone=$_POST['i3'];
    $password=$_POST['i4'];

    $link=mysqli_connect("localhost","scifre_sciuser","sciweb18","scifre_scidata");
    $link->set_charset("utf8");
    
    $myquerymain="SELECT `rowid`, `fandlname`, `username`, `phone`, `password` FROM `user` WHERE fandlname='$fullname' AND username='$username' AND phone='$phone' AND password='$password'";
    $resultmain=mysqli_query($link,$myquerymain);
    if (mysqli_num_rows($resultmain)>0) {
        header("location:login.php?error=2");
        exit();
    }
    else{
        $link=mysqli_connect("localhost","scifre_sciuser","sciweb18","scifre_scidata");
        $link->set_charset("utf8");
        $myquery1="SELECT `rowid`, `fandlname`, `username`, `phone`, `password` FROM `user` WHERE username='$username'";
        $result1=mysqli_query($link,$myquery1);
        if (mysqli_num_rows($result1)>0) {
            header("location:registration.php?error=1");
            exit();
        }
        else{
            $myquery2="INSERT INTO `user`(`fandlname`, `username`, `phone`, `password`) VALUES ('$fullname','$username','$phone','$password')";
            $result2=mysqli_query($link,$myquery2);
            setcookie('user_auto_login', $username, time() + (86400 * 900), "/");
            header("Location:index1.php");
            exit();
        }
    }


    
}
?>