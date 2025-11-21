<?php
$link = mysqli_connect("localhost", "scifre_sciuser", "sciweb18", "scifre_scidata");
  $link->set_charset("utf8");
  if (isset($_POST['name_profile']) && isset($_POST['username_profile']) && isset($_POST['phonenumber_profile'])) {
      $fullname = $_POST['name_profile'];
      $username = $_POST['username_profile'];
      $phone = $_POST['phonenumber_profile'];
  }

  $myquery2 = "SELECT username FROM user WHERE username = '$username'";
  $result2 = mysqli_query($link, $myquery2);
  
      if ($_COOKIE['user_auto_login'] == $username) {
          $myquery2 = "UPDATE user set  fandlname='$fullname',username='$username',phone='$phone' WHERE username = '$username'";
          $result2 = mysqli_query($link, $myquery2);
          echo  'false';

      } elseif ($_COOKIE['user_auto_login'] != $username && mysqli_num_rows($result2) == 0) {
          $myquery2 = "UPDATE user SET fandlname='$fullname', username='$username', phone='$phone' WHERE username='" . $_COOKIE['user_auto_login'] . "'";
          $result2 = mysqli_query($link, $myquery2);
          setcookie('user_auto_login', $username, time() + (86400 * 900), "/");
          echo 'false';

      } else {
          echo  'true';
      }

    

  ?>


