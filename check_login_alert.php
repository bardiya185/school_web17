<?php

$login = '';
$color = '';
if (isset($_COOKIE['user_auto_login'])) {
    if ($_COOKIE['user_auto_login'] != '') {
        $login = 'true';
        //
        $conn = mysqli_connect("localhost", "root", "root", "scidata", 3306);
        $sql = "SELECT color_profile FROM `user` WHERE username='$_COOKIE[user_auto_login]'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            while ($row = $result->fetch_assoc()) {
                $color = $row['color_profile'];
            }
        }
        //
        if (isset($_POST['change_color'])) {
            $conn = mysqli_connect("localhost", "root", "root", "scidata", 3306);
            $sql = "UPDATE  `user`  SET color_profile = '$_POST[change_color]'  WHERE username='$_COOKIE[user_auto_login]'";
            $result = mysqli_query($conn, $sql);
            //
            $sql = "SELECT color_profile FROM `user` WHERE username='$_COOKIE[user_auto_login]'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 1) {
                while ($row = $result->fetch_assoc()) {
                    $color = $row['color_profile'];
                    echo $color;
                    exit;
                }
            }
        }

        if (isset($_POST['exit'])) {
            setcookie('user_auto_login', '', 0, "/");
        }

        //
    } else {
        $login = 'false';
    }
} else {
    $login = 'false';
}




?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        var login = '<?php echo $login ?>';
        var color = '<?php echo $color ?>';
        var username = '<?php
        if (isset($_COOKIE['user_auto_login'])) {
            echo $_COOKIE['user_auto_login'];
        } ?>';
    if (login === 'true' && localStorage.getItem('status_login') == 'false') {
        Swal.fire({
            title: "<strong>" + username + "</strong>",
            icon: "success",
            html: `
                ورود با موفقیت انجام شد
                `,
            showCloseButton: true,
            showConfirmButton: true,
            showDenyButton: false,
        });
        setTimeout(function () {
            localStorage.setItem('status_login', 'true');
        }, 500);
    }
    if (login == 'true') {
        // tippy('#btn_in', {
        //     content: `${username}`
        // });
        btn_in.innerHTML = username.charAt(0);
        box_btn_in.style.left = '90px';
        btn_in.style.fontSize = '17px';
        btn_in.style.borderRadius = '50px';
        btn_in.style.width = '40px';

        btn_in.style.backgroundColor = color;

        if (document.getElementById('user_profile')) {
            user_profile.style.backgroundColor = color;
        }

        btn_in.addEventListener('click', (e) => {
            document.location.href = 'profile.php';
        });
    }
    else if (login == 'false') {
        btn_in.addEventListener('click', (e) => {
            document.location.href = 'login.php';
        });
        btn_in.innerHTML = 'ورود';
        box_btn_in.style.left = '110px';
        btn_in.style.fontSize = '';
        btn_in.style.borderRadius = '';
        btn_in.style.width = '';
        btn_in.style.backgroundColor = '';
        localStorage.setItem('status_login', 'false');
    }
    });
</script>