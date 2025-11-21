<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#202741" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0B0B0BFF" media="(prefers-color-scheme: dark)">
    <link rel="shortcut icon" href="Images/logosci1Asset 4@4x.webp" type="image/x-icon">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="footer/footer.css">
    <title>پروفایل</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #3E466CFF;

        }

        #profile1 {
            width: auto;
            height: auto;
            min-height: 100vh;
            max-height: auto;
        }

        #profile {
            width: auto;
            height: auto;
            display: flex;
            justify-self: center;
            justify-content: center;
            justify-items: center;
            text-align: center;
            flex-direction: column;
            flex-wrap: wrap;
            padding: 30px 50px 30px 50px;
            background-color: #7E819EA2;
            border-radius: 20px;
            margin-top: 100px;
        }

        #user_profile {
            width: auto;
            height: auto;
            padding: 50px;
            border-radius: 50%;
            box-shadow: 0px 0px 0px 2px white;
            background-color: #4C5D7EFF;
            transition: 0.2s 0s;
        }

        #user_profile img {
            width: 80px;
            height: 80px;
        }

        #text_profile {
            color: #BCC6FEFF;
            text-align: center;
        }

        #box_colors {
            width: 100%;
            color: aliceblue;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            justify-self: center;
            justify-items: center;
            margin: auto;
            gap: 5px;
            border-radius: 50px;
        }

        .c {
            width: 30px;
            height: 30px;
            cursor: pointer;
            border-radius: 50px;
            border: 2px solid white;
            display: flex;
            justify-items: center;
            justify-content: center;
            align-items: center;
        }

        #c1 {
            background-color: #4C5D7EFF;
        }

        #c2 {
            background-color: #FFB562;
        }

        #c3 {
            background-color: #FF6B6B;
        }

        #c4 {
            background-color: #72CED8;
        }

        #btn_exit {
            width: auto;
            height: 50px;
            background-color: #FF6B6B;
            border: transparent;
            border-radius: 10px;
            font-size: 20px;
            font-weight: 600;
            color: #FCF8F4FF;
            transition: 0.2s 0s;
        }

        #btn_exit:hover {
            background-color: #FF9F9FFF;
            cursor: pointer;
        }
    </style>
</head>

<body id="body">
    <div id="loading_control">
        <img id="loading" src="Images/com-optimize-1--unscreen-ezgif.com-optimize.gif" alt="error">
    </div>
    <?php if (isset($_COOKIE['user_auto_login']) || isset($_COOKIE['user_auto_login']) != '') { ?>
    <div id="content">
        <?php include('header/header.php'); ?>
        <div id="profile1">
            <div id="profile">
                <div id="user_profile"><img src="Icons\Asset 1333x.svg" alt="error"></div>
                <h2 id="text_profile">
                    <strong><?php if (isset($_COOKIE['user_auto_login'])) {
                        echo $_COOKIE['user_auto_login'];
                    } ?></strong>
                </h2>
                <br>
                <div id="box_colors">
                    <div id="c1" class="c"></div>
                    <div id="c2" class="c"></div>
                    <div id="c3" class="c"></div>
                    <div id="c4" class="c"></div>
                </div>
                <br>
                <br>
                <button id="btn_exit">خروج</button>
            </div>
        </div>
        <?php include('footer/footer.php'); ?>
    </div>
    <?php } ?>
    <!--tippy-->
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
    <!--tippy-->
    <script src="header/header.js"></script>
    <script>

        $(document).ready(function () {

            $('.c').on('click', function () {
                var selectedColor = $(this).css('background-color');
                $.ajax({
                    url: "check_login_alert.php",
                    method: "post",
                    data: { change_color: selectedColor },
                    success: function (res) {
                        $('#user_profile').css('background-color', res);
                        $('#btn_in').css('background-color', res);
                    }
                });
            });


            $('#btn_exit').on('click', function () {
                $.ajax({
                    url: "check_login_alert.php",
                    method: "post",
                    data: { exit: 'true' },
                    success: function (res) {
                        localStorage.setItem('status_login', 'false');
                        Swal.fire({
                            title: "<strong>خروج</strong>",
                            icon: "success",
                            html: `
                خروج با موفقیت انجام شد
                `,
                            showCloseButton: true,
                            showConfirmButton: false,
                            showDenyButton: false,
                        });
                        setInterval(function () {
                            window.location.href = 'index1.php';
                        }, 2000);
                    }
                });
            });
        });

    </script>
    <?php include('check_login_alert.php'); ?>
</body>

</html>