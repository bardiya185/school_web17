<?php
$errorMessage = '';
if (isset($_GET['error']) && $_GET['error'] == 1) {
    $errorMessage = 'نام کاربری یا گذرواژه صحیح نمی باشد';
} else if (isset($_GET['error']) && $_GET['error'] == 2) {

    $errorMessage = 'شما از پیش ثبت نام کرده اید در نتیجه ورود کنید';
}
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width">
    <meta name="theme-color" content="#202741" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0B0B0BFF" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/x-icon" href="Icons/favicon.ico">
    <link rel="icon" type="image/png" href="Icons/icon.png">
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <title>صفحه ورود سایت</title>
    <style>
            #loading_control {
            position: fixed;
            transform: translate(-50%, -50%) scale(1.5);
            left: 50%;
            top: 50%;
            z-index: 100;
        }

        #loading {
            width: auto;
            height: 50px;
        }
        #content {
            height: auto;
            opacity: 0%;
            transition: 0.5s 0s;
        }
        @font-face {
            font-family: "ourfont";
            src: url('font/IRANYekanXVF.woff');
        }

        * {
            font-family: "ourfont";
        }

        body {
            background: linear-gradient(180deg, #190a3d, #05021a);
            background-attachment: fixed;
            overflow: hidden;
        }

        a {
            text-decoration: none;
            color: white;

        }

        a:hover {
            color: greenyellow;
        }

        form {
            border: 3px solid rgb(67, 148, 168);
            border-radius: 50px;
            width: 260px;
            padding-right: 60px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding-top: 30px;
            padding-bottom: 80px;
            padding-bottom: 80px;
            backdrop-filter: blur(100px);
            font-size: 15px;
            line-height: 25px;

        }

        #img_style {
            width: 100px;
            height: 100px;
            margin-right: 50px;
            border: 3px solid greenyellow;
            border-radius: 120px;
        }

  

        #i1 {
            color: rgb(67, 148, 168);
            background: none;
            border: 2px solid white;
            border-top: transparent;
            border-left: transparent;
            border-right: transparent;
            outline: none;
            width: 200px;
        }

        #i2 {
            color: rgb(67, 148, 168);
            background: none;
            border: 2px solid white;
            border-top: transparent;
            border-left: transparent;
            border-right: transparent;
            outline: none;
            width: 200px;
        }

        #p1 {
            padding-right: 20px;
            color: white;
        }

        .error {
            color: red;
            margin-left: 32px;
            padding-top: 1px;
            font-size:14px;
        }

        #b1 {
            margin-right: 25px;
            width: 70px;
            height: 30px;
            border-radius: 20px;
            background: linear-gradient(45deg, #00cccc, #cc00cc);
            margin-top: 10px;
        }

        #b2 {
            width: 70px;
            height: 30px;
            border-radius: 20px;
            background-color: #00ff88;
            background: linear-gradient(45deg, #00cccc, #cc00cc);
        }

        #b1:hover {
            background: linear-gradient(45deg, #00ffff, #ff00ff);
        }

        #b2:hover {
            background: linear-gradient(45deg, #00ffff, #ff00ff);
        }
    </style>
    <script>
        //شروع بخش loding
        window.addEventListener("load", function () {
            setTimeout(function () {
                document.getElementById("loading").style.display = "none";
                content.style.opacity = '100%';
            }, 500); // تاخیر ۲ ثانیه‌ای برای تست
        });//پایان بخش loding


        // اگر آدرس شامل ?error=1 بود، بعد از لود، اون رو پاک می‌کنیم
        if (window.location.search.includes('error=1')) {
            // فقط آدرس رو بدون پارامتر در history جایگزین می‌کنیم
            history.replaceState({}, document.title, window.location.pathname);
        }//پایان قسمت پاک کردن error=1

        // اگر آدرس شامل ?error=2 بود، بعد از لود، اون رو پاک می‌کنیم
        if (window.location.search.includes('error=2')) {
            // فقط آدرس رو بدون پارامتر در history جایگزین می‌کنیم
            history.replaceState({}, document.title, window.location.pathname);
        }//پایان قسمت پاک کردن error=2

        //شروع قسمت نمایش پسورد در صورت کلیک
        function show() {
            var input = document.getElementById("i2");
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
        //پایان قسمت نمایش پسورد در صورت کلیک

        //شروع onclick قسمت button
        function f() {
            var pass = document.getElementById('i2').value;
            if (document.getElementById('i1').value == "") {
                Swal.fire({
                    title: "هشدار",
                    text: "نام کاربری را خالی رها نکنید",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
            }
            else if (document.getElementById('i1').value.length < 5) {
                Swal.fire({
                    title: "هشدار",
                    text: "نام کاربری شما حداقل باید 5 کاراکتر باشد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i1').value = "";
            }
            else if (document.getElementById('i1').value.length > 10) {
                Swal.fire({
                    title: "هشدار",
                    text: "نام کاربری شما حداکثر باید 10 کاراکتر باشد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i1').value = "";
            }
            else if (document.getElementById('i2').value == "") {
                Swal.fire({
                    title: "هشدار",
                    text: "گذرواژه را خالی رها نکنید",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
            }
            else if (pass.length < 6) {
                Swal.fire({
                    title: "هشدار",
                    text: "گذرواژه باید بیشتر از 6  کاراکتر باشد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i2').value = "";
            }
            else if (pass.length > 9) {
                Swal.fire({
                    title: "هشدار",
                    text: "گذرواژه باید کمتر از 9  کاراکتر باشد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i2').value = "";
            }
            else {
                document.getElementById('i2').value = pass;
                document.ourform.submit();
            }
        }

    </script>
</head>

<body>
    <!-- بخش لودینگ -->
    <div id="loading_control">
        <img id="loading" src="Images/com-optimize-1--unscreen-ezgif.com-optimize.gif" alt="error">
    </div>
    <div id="content">
    <form name="ourform" action="check_login.php" method="post" autocomplete="off">
        <img src="Images/human.jpg" id="img_style"><br>
        <div>
            <input type="text" id="i1" name="i1" placeholder="نام کاربری" autocomplete="off"><br><br>
            <input type="password" id="i2" name="i2" placeholder="گذرواژه" autocomplete="new-password"><br><br>
            <input type="checkbox" name="i3" id="i3" onclick="show()"><label style="color: aqua;">نمایش گذرواژه</label>
            <p id="p1">ثبت نام نکرده اید؟ <a href="registration.php" style="color:greenyellow">ثبت نام</a></p>

            <?php if ($errorMessage): ?>
                <div class="error"><?php echo $errorMessage; ?></div>
            <?php endif; ?>

            <button type="button" id="b1" onclick="f()">ورود</button>
            <button type="reset" id="b2">پاک کردن</button>
        </div>
    </form>
    </div>
</body>

</html>