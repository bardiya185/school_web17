<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#202741" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0B0B0BFF" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/x-icon" href="Icons/favicon.ico">
    <link rel="icon" type="image/png" href="Icons/icon.png">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="header/header.css">
    <title>پروفایل</title>
    <style>
        body {
            height: auto;
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg, #190a3d, #05021a);
            background-attachment: fixed;
            overflow: auto;

        }

        #profile1 {
            width: auto;
            height: auto;
            min-height: auto;
            max-height: auto;
        }

        label small {
            font-size: 11px;
            color: #1E2345FF;
            text-align: center;
            display: flex;
            justify-content: center;
            justify-items: center;
            justify-self: center;
            margin-left: -20px;
        }

        #profile {
            width: 480px;
            height: auto;
            display: flex;
            justify-self: center;
            justify-content: center;
            justify-items: center;
            text-align: center;
            flex-direction: column;
            flex-wrap: wrap;
            padding: 30px 50px 30px 50px;
            background-color: #4F4F79FF;
            border-radius: 20px;
            margin-top: 100px;
        }

        #user_profile {
            width: 100px;
            height: 100px;
            padding: 50px;
            border-radius: 50%;
            box-shadow: 0px 0px 0px 2px white;
            background-color: #4C5D7EFF;
            transition: 0.2s 0s;
            margin-right: 280px;
        }

        #user_profile strong {
            width: 80px;
            height: 80px;
            font-size: 80px;
            display: flex;
            justify-self: center;
            justify-content: center;
            margin-top: 5px;
            text-align: center;
            color: #FFFFFFFF;
        }

        #text_profile {
            color: #A1ACE2FF;
            text-align: left;
        }

        #text_profile1 {
            color: #BEC4E3FF;
            text-align: left;
        }

        #text_profile2 {
            color: #BEC4E3FF;
            text-align: left;
        }

        #all_text_profile {
            width: 200px;
            height: auto;
            margin-top: -180px;
            margin-right: 10px;
            text-align: left;
        }

        #box_colors {
            width: 35%;
            color: aliceblue;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            justify-self: left;
            justify-items: left;
            gap: 5px;
            border-radius: 50px;
            margin-right: 295px;
            margin-top: 30px;
        }

        .c {
            width: 25px;
            height: 25px;
            cursor: pointer;
            border-radius: 50px;
            border: 2px solid white;
            display: flex;
            justify-items: center;
            justify-content: center;
            align-items: center;
            transition: 0.2s 0s;
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

        #c1:hover {
            filter: brightness(80%);
        }

        #c2:hover {
            filter: brightness(80%);
        }

        #c3:hover {
            filter: brightness(80%);
        }

        #c4:hover {
            filter: brightness(80%);
        }



        #btn_exit {
            width: 120px;
            height: 50px;
            background-color: #FF6B6B;
            border: transparent;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            color: #FCF8F4FF;
            transition: 0.2s 0s;
            margin-top: -80px;
            margin-left: 70px;
        }

        #btn_exit:hover {
            background-color: #FF9F9FFF;
            cursor: pointer;
        }

        #btn_edit {
            width: 80px;
            height: 50px;
            background-color: #3ab0ff;
            border: transparent;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            color: #FCF8F4FF;
            transition: 0.2s 0s;
            margin-top: -70px;
            margin-right: 130px;
        }

        #btn_edit:hover {
            background-color: #7BC3F3FF;
            cursor: pointer;
        }

        #edit1 {
            height: 30px;
            background-color: #7E819EA2;
            color: #FFFFFFFF;
            border: transparent;
            border-radius: 5px;
            text-align: center;
            outline: 1px solid #C88962FF;
        }

        #edit2 {
            height: 30px;
            background-color: #7E819EA2;
            color: #FFFFFFFF;
            border: transparent;
            border-radius: 5px;
            text-align: center;
            outline: 1px solid #C88962FF;
        }

        #edit3 {
            height: 30px;
            background-color: #7E819EA2;
            color: #FFFFFFFF;
            border: transparent;
            border-radius: 5px;
            text-align: center;
                outline: 1px solid #C88962FF;
        }

        @media screen and (max-width:1024px) {
            #profile {
                width: 230px;
                height: auto;
                display: flex;
                justify-self: center;
                justify-content: center;
                justify-items: center;
                text-align: center;
                flex-direction: column;
                padding: 30px 50px 30px 50px;
                background-color: #4F4F79FF;
                border-radius: 20px;
                margin-top: 30px;
            }

            #user_profile {
                width: 50px;
                height: 50px;
                padding: 50px;
                border-radius: 50%;
                box-shadow: 0px 0px 0px 2px white;
                background-color: #4C5D7EFF;
                transition: 0.2s 0s;
                margin-right: 40px;
            }

            #user_profile strong {
                width: 80px;
                height: 80px;
                font-size: 65px;
                display: flex;
                justify-self: center;
                justify-content: center;
                margin-top: -10px;
                text-align: center;
                color: #FFFFFFFF;
            }
          

            #all_text_profile {
                width: 200px;
                height: auto;

                margin-top: 0px;
                margin-right: 5px;
                text-align: left;
            }

            #box_colors {
                width: 150px;
                color: aliceblue;
                border-radius: 50px;
                display: flex;
                gap: 10px;
                margin-top: -20px;
                margin-right: 35px;
            }

            .c {
                width: 200px;
                height: 25px;
                cursor: pointer;
                border-radius: 50px;
                border: 2px solid white;
                display: flex;
                justify-items: center;
                justify-content: center;
                align-items: center;
                transition: 0.2s 0s;
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

            #c1:hover {
                filter: brightness(80%);
            }

            #c2:hover {
                filter: brightness(80%);
            }

            #c3:hover {
                filter: brightness(80%);
            }

            #c4:hover {
                filter: brightness(80%);
            }



            #btn_exit {
                width: 130px;
                height: 50px;
                background-color: #FF6B6B;
                border: transparent;
                border-radius: 10px;
                font-size: 18px;
                font-weight: 600;
                color: #FCF8F4FF;
                transition: 0.2s 0s;
                margin-top: -0px;
                margin-left: 70px;
            }

            #btn_exit:hover {
                background-color: #FF9F9FFF;
                cursor: pointer;
            }

            #btn_edit {
                width: 80px;
                height: 50px;
                background-color: #3ab0ff;
                border: transparent;
                border-radius: 10px;
                font-size: 15px;
                font-weight: 600;
                color: #FCF8F4FF;
                transition: 0.2s 0s;
                margin-top: -70px;
                margin-right: 140px;
                opacity: 40%;
            }

            #btn_edit:hover {
                background-color: #7BC3F3FF;
                cursor: pointer;
            }
         
        }
    </style>
</head>

<body id="body">
    <div id="loading_control">
        <img id="loading" src="Images/com-optimize-1--unscreen-ezgif.com-optimize.gif" alt="error">
    </div><!--edit = == -> != -->
    <?php if (isset($_COOKIE['user_auto_login']) || isset($_COOKIE['user_auto_login']) != '') { ?>
        <div id="content">
            <?php include('header/header.php'); ?>
            <div id="profile1">
                <div id="profile">
                    <div id="user_profile"> <strong>
                            <?php
                            if (isset($_COOKIE['user_auto_login'])) {
                                echo substr(strtoupper($_COOKIE['user_auto_login']), 0, 1);
                            }
                            ?></strong></div>
                    <div id="all_text_profile">
                        <?php
                        $link = mysqli_connect("localhost", "scifre_sciuser", "sciweb18", "scifre_scidata");
                        //$link = mysqli_connect("localhost", "root", "root", "scidata");
                        $link->set_charset("utf8");
                        $myquery2 = "SELECT * FROM user WHERE username ='" . $_COOKIE['user_auto_login'] . "'";
                        $result2 = mysqli_query($link, $myquery2);
                        while ($row = $result2->fetch_assoc()) {
                            ?>
                            <h2 id="text_profile">
                                <label for="edit1"><small>نام و نام خانوادگی</small></label>
                                <strong><input type="text" id="edit1" value="<?php echo $row['fandlname']; ?>"></strong>
                            </h2>
                            <h2 id="text_profile1">
                                <label for="edit2"><small>نام کاربری</small></label>
                                <strong><input type="text" id="edit2" value="<?php echo $row['username']; ?>"></strong>
                            </h2>
                            <h2 id="text_profile2">
                                <label for="edit3"><small>شماره موبایل</small></label>
                                <strong><input type="text" id="edit3" value="<?php echo $row['phone']; ?>"></strong>
                            </h2>
                        <? } ?>
                    </div>
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
                    <br>
                    <button id="btn_edit" >ویرایش</button>
                </div>
            </div>
            <br>
            <br>
        </div>
        <!--tippy-->
        <script src="https://unpkg.com/popper.js@1"></script>
        <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
        <!--tippy-->
        <script src="header/header.js"></script>
        <script>

            var old_username = edit2.value;
            const regex = /^[آ-ی\s]+$/; // فقط حروف فارسی و فاصله
            const usernameRegex = /^[a-zA-Z_][a-zA-Z0-9_]*$/; // نام کاربری معتبر



            $(document).ready(function () {
                btn_edit.disabled = true;
                btn_edit.style.opacity = '40%';

                const old_name_profile = $('#edit1').val();
                const old_username_profile = $('#edit2').val();
                const old_phonenumber_profile = $('#edit3').val();


                window.addEventListener('keyup', (e) => {
                    if (old_name_profile != $('#edit1').val() ||
                    old_username_profile != $('#edit2').val() ||
                    old_phonenumber_profile != $('#edit3').val()) {
                        btn_edit.disabled = false;
                        btn_edit.style.opacity = '100%';
                    }
                    else{
                        btn_edit.disabled = true;
                        btn_edit.style.opacity = '40%';
                    }
                });


                $('#btn_edit').on('click', function () {
                    var name_profile = $('#edit1').val();
                    var username_profile = $('#edit2').val();
                    var phonenumber_profile = $('#edit3').val();
                    var text_profile_first;
                    $.ajax({
                        url: "edit_profile.php",
                        method: "post",
                        data: {
                            name_profile: name_profile
                            ,
                            username_profile: username_profile
                            ,
                            phonenumber_profile: phonenumber_profile
                        },
                        success: function (res) {
                            d = res;
                            var error = d.trim();
                            // alert(error);
                            console.log(error);
                            if (error == 'false') {

                                if (edit1.value == '') {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "لطفاً نام و نام خانوادگی را کامل وارد کنید.",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                }
                                else if (edit1.value.split(" ").filter(word => word !== "").length < 2) {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "لطفاً نام و نام خانوادگی را کامل وارد کنید (باید بین نام و نام خانوادگی یک فاصله وجود داشته باشد).",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                    document.getElementById('edit1').value = "";
                                    return;
                                }
                                else if (!regex.test(edit1.value)) {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "فقط از حروف فارسی و فاصله استفاده کنید.",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                    document.getElementById('edit1').value = "";
                                    return;
                                }
                                else if (!regex.test(edit1.value)) {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "فقط از حروف فارسی و فاصله استفاده کنید.",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                    document.getElementById('edit1').value = "";
                                    return;
                                }
                                else if (username_profile === "") {
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
                                else if (username_profile.length < 5) {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "نام کاربری شما حداقل باید 5 کاراکتر باشد",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                    document.getElementById('edit2').value = "";
                                    return;
                                }
                                else if (username_profile.length > 10) {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "نام کاربری شما حداکثر باید 10 کاراکتر باشد",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                    document.getElementById('edit2').value = "";
                                    return;
                                }
                                else if (!usernameRegex.test(username_profile)) {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "نام کاربری فقط باید شامل حروف انگلیسی، عدد و _ باشد و با عدد شروع نشود",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                    document.getElementById('edit2').value = "";
                                    return;
                                }
                                else if (phonenumber_profile.substring(0, 2) != "09") {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "شماره تلفن را به درستی وارد نکردید زیرا در ابتدای آن دو شماره 09 وجود ندارد",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                    document.getElementById('edit3').value = "";
                                    return;
                                }
                                else if (phonenumber_profile.length != 11 || !/^\d+$/.test(phonenumber_profile)) {
                                    Swal.fire({
                                        title: "هشدار",
                                        text: "تعداد ارقام شماره تلفن شما استاندارد نیست یا شامل حروف است",
                                        icon: "warning",
                                        showCancelButton: false,
                                        confirmButtonColor: "#3085d6",
                                        confirmButtonText: "ok"
                                    });
                                    document.getElementById('edit3').value = "";
                                    return;
                                }
                                else {
                                    text_profile_first = (username_profile[0] || '--').toUpperCase();
                                    $('#user_profile strong').fadeOut(300, function () {
                                        $(this).text(text_profile_first);
                                    }).fadeIn(300);
                                    $('#btn_in').fadeOut(500, function () {
                                        $(this).text(text_profile_first);
                                    }).fadeIn(500);

                                    old_username = username_profile;
                                    Swal.fire({
                                        title: "<strong>موفقیت</strong>",
                                        icon: "success",
                                        html: `
                    ویرایش با موفقیت انجام شد
                    `,
                                        showCloseButton: true,
                                        showConfirmButton: false,
                                        showDenyButton: false,
                                    });
                                }
                            }

                            else {
                                edit2.value = old_username;
                                text_profile_first = (old_username[0] || '--').toUpperCase();
                                $('#user_profile strong').fadeOut(300, function () {
                                }).fadeIn(300);
                                $(this).text(text_profile_first);

                                Swal.fire({
                                    title: "<strong>هشدار</strong>",
                                    icon: "warning",
                                    html: `
                    نام کاربری قبلا استفاده شده است
                    `,
                                    showCloseButton: true,
                                    showConfirmButton: false,
                                    showDenyButton: false,
                                });
                            }
                        }
                    });
                });

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
    <?php } ?>
</body>

</html>