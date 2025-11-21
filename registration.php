<?php
$errorMessage = '';
if (isset($_GET['error']) && $_GET['error'] == 1) {
    $errorMessage = ' این نام کاربری از پیش انتخاب شده است لطفا اطلاعات را از ابتدا به درستی وارد کنید';
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
    <title>صفحه ثبت نام سایت</title>
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
            border: 4px solid rgb(67, 148, 168);
            border-radius: 50px;
            width: 260px;
            padding-right: 60px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding-top: 30px;
            padding-bottom: 80px;
            backdrop-filter: blur(100px);
            font-size: 15px;
        }

        #img_style {
            width: 100px;
            height: 100px;
            margin-right: 50px;
            border: 3px solid greenyellow;
            border-radius: 90px;
        }

        div {
            font-family: "ourfont";
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

        #i3 {
            color: rgb(67, 148, 168);
            background: none;
            border: 2px solid white;
            border-top: transparent;
            border-left: transparent;
            border-right: transparent;
            outline: none;
            width: 200px;
        }

        #i4 {
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
            padding-right: 30px;
            color: white;
        }

        .error {
            color: red;
            margin-left: 28px;
            padding-top: 1px;
        }

        #b1 {
            margin-right: 20px;
            width: 70px;
            height: 30px;
            border-radius: 20px;
            background: linear-gradient(45deg, #00cccc, #cc00cc);
            margin-top: 10px;
        }

        #b2 {
            width: 70px;
            height: 30px;
            border-radius: 25px;
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

        function show() {
            var input = document.getElementById("i4");
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }

        function f() {
            // دریافت مقادیر ورودی‌ها
            let input = document.getElementById('i1').value.trim();
            let username = document.getElementById('i2').value.trim();
            let phone = document.getElementById('i3').value.trim();
            let password = document.getElementById('i4').value;

            // regexها
            const regex = /^[آ-ی\s]+$/; // فقط حروف فارسی و فاصله
            const usernameRegex = /^[a-zA-Z_][a-zA-Z0-9_]*$/; // نام کاربری معتبر
            const passwordFormat = /^[a-zA-Z0-9]+$/; // فقط حروف انگلیسی و عدد
            const hasLetter = /[a-zA-Z]/;
            const hasNumber = /[0-9]/;

            // اعتبارسنجی نام و نام خانوادگی
            if (input === "") {
                Swal.fire({
                    title: "هشدار",
                    text: "لطفاً نام و نام خانوادگی را وارد کنید.",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                return;
            }
            else if (input.length > 30) {
                Swal.fire({
                    title: "هشدار",
                    text: "نام و نام خانوادگی نباید بیشتر از 50 کاراکتر باشد.",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i1').value = "";
                return;
            }
            else if (input.split(" ").filter(word => word !== "").length < 2) {
                Swal.fire({
                    title: "هشدار",
                    text: "لطفاً نام و نام خانوادگی را کامل وارد کنید (باید بین نام و نام خانوادگی یک فاصله وجود داشته باشد).",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i1').value = "";
                return;
            }
            else if (!regex.test(input)) {
                Swal.fire({
                    title: "هشدار",
                    text: "فقط از حروف فارسی و فاصله استفاده کنید.",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i1').value = "";
                return;
            }

            // اعتبارسنجی نام کاربری
            else if (username === "") {
                Swal.fire({
                    title: "هشدار",
                    text: "نام کاربری را خالی رها نکنید",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                return;
            }
            else if (username.length < 5) {
                Swal.fire({
                    title: "هشدار",
                    text: "نام کاربری شما حداقل باید 5 کاراکتر باشد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i2').value = "";
                return;
            }
            else if (username.length > 10) {
                Swal.fire({
                    title: "هشدار",
                    text: "نام کاربری شما حداکثر باید 10 کاراکتر باشد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i2').value = "";
                return;
            }
            else if (!usernameRegex.test(username)) {
                Swal.fire({
                    title: "هشدار",
                    text: "نام کاربری فقط باید شامل حروف انگلیسی، عدد و _ باشد و با عدد شروع نشود",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i2').value = "";
                return;
            }

            // اعتبارسنجی شماره تلفن
            else if (phone.substring(0, 2) != "09") {
                Swal.fire({
                    title: "هشدار",
                    text: "شماره تلفن را به درستی وارد نکردید زیرا در ابتدای آن دو شماره 09 وجود ندارد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i3').value = "";
                return;
            }
            else if (phone.length != 11 || !/^\d+$/.test(phone)) {
                Swal.fire({
                    title: "هشدار",
                    text: "تعداد ارقام شماره تلفن شما استاندارد نیست یا شامل حروف است",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i3').value = "";
                return;
            }

            // اعتبارسنجی گذرواژه
            else if (password === "") {
                Swal.fire({
                    title: "هشدار",
                    text: "گذرواژه را خالی رها نکنید",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                return;
            }
            else if (password.length < 6) {
                Swal.fire({
                    title: "هشدار",
                    text: "گذرواژه باید حداقل 6 کاراکتر باشد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i4').value = "";
                return;
            }
            else if (password.length > 9) {
                Swal.fire({
                    title: "هشدار",
                    text: "گذرواژه نباید بیشتر از 9 کاراکتر باشد",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                docu
                document.getElementById('i4').value = "";
                return;
            }
            else if (!passwordFormat.test(password)) {
                Swal.fire({
                    title: "هشدار",
                    text: "گذرواژه فقط باید شامل حروف انگلیسی و اعداد باشد. فاصله یا علائم خاص مجاز نیستند.",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i4').value = "";
                return;
            }
            else if (!hasLetter.test(password) || !hasNumber.test(password)) {
                Swal.fire({
                    title: "هشدار",
                    text: "گذرواژه باید حداقل شامل یک حرف انگلیسی و عدد باشد.",
                    icon: "warning",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "ok"
                });
                document.getElementById('i4').value = "";
                return;
            }

            // اگر همه چیز درست بود، ارسال فرم
            else {
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

    <form name="ourform" action="check_registration.php" method="post" autocomplete="off">
        <img src="Images/human.jpg" id="img_style"><br>
        <div>
            <input type="text" id="i1" name="i1" placeholder="نام و نام خانوادگی" autocomplete="off"><br><br>
            <input type="text" id="i2" name="i2" placeholder="نام کاربری" autocomplete="off"><br><br>
            <input type="text" id="i3" name="i3" placeholder="شماره تلفن" autocomplete="off"><br><br>
            <input type="password" id="i4" name="i4" placeholder="گذرواژه" autocomplete="new-password"><br><br>
            <input type="checkbox" name="i5" id="i5" onclick="show()"><label style="color: aqua;">نمایش
                گذرواژه</label><br><br>
            <a href="login.php" style="margin:37px">از پیش ثبت نام کردم</a>

            <?php if ($errorMessage): ?>
                <div class="error"><?php echo $errorMessage; ?></div>
            <?php endif; ?>

            <button type="button" id="b1" onclick="f()">ثبت نام</button>
            <button type="reset" id="b2">پاک کردن</button>
        </div>
    </form>
    </div>
</body>

</html>