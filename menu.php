<?php session_start();
if (isset($_POST['menus'])) {
    $_SESSION['menu'] = $_POST['menus'];
}
if (isset($_SESSION['menu'])) {
    $conn = mysqli_connect("localhost", "scifre_sciuser", "sciweb18", "scifre_scidata");
    mysqli_set_charset($conn, "utf8");
}

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#202741" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0B0B0BFF" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/x-icon" href="Icons/favicon.ico">
    <link rel="icon" type="image/png" href="Icons/icon.png">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="alert.js"></script>
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="footer/footer.css">
    <title>منو</title>
    <style>
        @font-face {
            font-family: iran;
            src: url('font/IRANYekanXVF.woff');
            font-display: block;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Tahoma', sans-serif;
            color: #fff;
            background-color: #3E466CFF;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }


        #box_product {
            width: 60%;
            max-width: 60%;
            height: auto;
            background-color: #202741;
            gap: 10px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 10px;
            opacity: 100%;
            display: flex;
            align-items: start;
            align-self: start;
            align-content: center;
            justify-self: center;
            justify-content: center;
            justify-items: center;
            flex-direction: row;
            direction: ltr;
            transition: 0.5s 0s;
        }

        #product_img img {
            width: 100px;
            height: auto;
            display: flex;
            align-self: center;
            align-items: center;
            align-content: center;
            flex-direction: column;
            margin-top: 10px;
            margin-left: 10px;

        }

        #box_text_btn {
            width: 200%;
            height: auto;
            display: flex;
            align-self: end;
            align-content: end;
            flex-direction: column;
            gap: 0px;
        }

        #box_text_btn h1 {
            width: 100%;
            display: flex;
            justify-content: right;
            justify-self: right;
            justify-items: right;
            align-items: start;
            align-content: start;
            flex-direction: row;
            align-self: safe;
            color: #F9F2ED;
            text-align: right;
            font-size: 25px;
        }

        #box_text_btn button {
            width: auto;
            height: 50px;
            display: flex;
            justify-content: center;
            justify-self: right;
            justify-items: center;
            align-items: end;
            align-self: end;
            align-content: end;
            flex-direction: row;
            border: transparent;
            border-radius: 5px;
            font-size: 18px;
            padding: 10px;
            background-color: #F87474;
            color: #F9F2ED;
            cursor: pointer;
            font-weight: 600;
        }

        .show_hidden {
            width: 100%;
            height: 100vh;
            display: table;
        }


        @media screen and (max-width:1024px) {


            #box_product {
                width: 90%;
                max-width: 90%;
                height: auto;
                background-color: #202741;
                gap: 10px;
                margin-top: 10px;
                padding: 10px;
                border-radius: 10px;
                opacity: 100%;
                display: flex;
                align-items: start;
                align-self: start;
                align-content: center;
                justify-self: center;
                justify-content: center;
                justify-items: center;
                flex-direction: row;
                direction: ltr;
                transition: 0.5s 0s;
            }

            #product_img img {
                width: 90px;
                height: auto;
                display: flex;
                align-self: center;
                align-items: center;
                align-content: center;
                flex-direction: column;
                margin-top: 8px;
                margin-left: 10px;

            }

            #box_text_btn {
                width: 200%;
                height: auto;
                display: flex;
                align-self: end;
                align-content: end;
                flex-direction: column;
                gap: 0px;
            }

            #box_text_btn h1 {
                width: 100%;
                display: flex;
                justify-content: right;
                justify-self: right;
                justify-items: right;
                align-items: start;
                align-content: start;
                flex-direction: row;
                align-self: safe;
                color: #F9F2ED;
                text-align: right;
                font-size: 25px;
            }

            #box_text_btn button {
                width: auto;
                height: 40px;
                display: flex;
                justify-content: center;
                justify-self: right;
                justify-items: center;
                align-items: end;
                align-self: end;
                align-content: end;
                flex-direction: row;
                border: transparent;
                border-radius: 5px;
                font-size: 14px;
                padding: 10px;
                background-color: #F87474;
                color: #F9F2ED;
                cursor: pointer;
                font-weight: 600;
            }



        }
    </style>
</head>

<body id="body">
    <div id="loading_control">
        <img id="loading" src="Images/com-optimize-1--unscreen-ezgif.com-optimize.gif" alt="error">
    </div>

    <div id="content1">
        <?php
        if (isset($_SESSION['menu'])) {
            include("header/header.php"); ?>
            <main>
                <h2 style="text-align:center;width:auto; max-width: 280px;display:flex; justify-content: center;
        justify-self: center;border-bottom:2px solid orange;"><?php echo $_SESSION['menu']; ?></h2>
                <div class="show_hidden">
                    <?php
                    $sql = "SELECT * FROM product WHERE product_mode = '$_SESSION[menu]'";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div id="box_product">
                                <div id="product_img">
                                    <img src="<?php echo "Icons/" . $row['product_img']; ?>" alt="error">
                                </div>
                                <div id="box_text_btn">
                                    <h1><?php echo $row['product_name']; ?></h1>
                                    <button class="btn_information" type="button">اطلاعات بیشتر</button>
                                </div>
                            </div>
                            <?php
                        }
                    }

                    ?>
                    <br>
                </div>
        </div>
        </main>
        <?php
        include("footer/footer.php");
        ?>
        <!--tippy-->
        <script src="https://unpkg.com/popper.js@1"></script>
        <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
        <!--tippy-->
        <script src="header/header.js"></script>
        <?php include('check_login_alert.php');
        } ?>
</body>

</html>