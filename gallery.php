<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#202741" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0B0B0BFF" media="(prefers-color-scheme: dark)">
    <link rel="shortcut icon" href="Images/logosci1Asset 4@4x.webp" type="image/x-icon">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="footer/footer.css">
    <title>گالری</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: iran;
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


        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            width: 60%;
            max-width: 1000px;
            margin: 0 auto;
            background-color: #202741;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.5s 0s;
        }

        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            transition: 0.5s 0s;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }



        @media screen and (max-width:1024px) {

            .gallery-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
                padding: 20px;
                width: 80%;
                max-width: 100%;
                margin: 0 auto;
                background-color: #202741;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

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
        include("header/header.php");
        ?>
        <div class="show_hidden">
            <h1
                style="width: 200px;text-align: center; border-bottom: 2px solid orange; display: flex; justify-self: center; justify-items: center; justify-content: center;">
                گالری تصاویر</h1>
            <div class="gallery-container">
                <div class="gallery-item">
                <a href="Images/IMG_20250712_092330.webp" target="_self"><img src="Images/IMG_20250712_092330.webp" alt="error"></a>
                </div>
                <div class="gallery-item">
                <a href="Images/IMG_20250712_093301.jpg" target="_self"><img src="Images/IMG_20250712_093301.jpg" alt="error"></a>
                </div>
                <div class="gallery-item">
                    <a href="Images/IMG_20250712_105153.jpg" target="_self"><img src="Images/IMG_20250712_105153.jpg" alt="error"></a>
                </div>
                <div class="gallery-item">
                <a href="Images/enemad.png" target="_self"><img src="Images/enemad.png" alt="error"></a>
                </div>
                <div class="gallery-item">
                <a href="Images/logosci1Asset 4@4x.webp" target="_self"><img src="Images/logosci1Asset 4@4x.webp" alt="error"></a>
                </div>
                <div class="gallery-item">
                <a href="Images/logosciAsset 5@4x.webp" target="_self"><img src="Images/logosciAsset 5@4x.webp" alt="error"></a>
                </div>
            </div>

            <br>
        </div>
    </div>

    <?php
    include("footer/footer.php");
    ?>
    <script src="header/header.js"></script>
    <!--tippy-->
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
    <!--tippy-->
    <?php include('check_login_alert.php'); ?>
</body>

</html>