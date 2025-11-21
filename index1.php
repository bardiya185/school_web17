<?php
session_start();
if (isset($_POST['menus'])) {
    $_SESSION['menu'] = $_POST['menus'];
    exit;
}

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#202741" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#0B0B0BFF" media="(prefers-color-scheme: dark)">
    <meta name="description"
        content="آموزشگاه فنی و حرفه ای آزاد صائمی فرد , آموزشگاه  , برنامه نویسی , طراحی وب , حسابداری , صنایع خودرو , تدریس دروس دانشگاهی , کامپیوتر , دوره مقدماتی , html , js , wordpress , php ,  ai , AI ,  css , هوش مصنوعی">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="Icons/favicon.ico">
    <link rel="icon" type="image/png" href="Icons/icon.png">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="alert.js"></script>
    <title>آموزشگاه فنی و حرفه ای آزاد صائمی فرد</title>
</head>

<body id="body">
<div id="loading_control">
    <img id="loading" src="Images/com-optimize-1--unscreen-ezgif.com-optimize.gif" alt="error">
</div>
    <div id="content">
        <?php include('header/header.php'); ?>
        <main>
            <div id="box_first_img">
            <img id="img_first" src="Images/background.webp" alt="error">
            </div>
            <!--box_title_rectangle-->
            <div id="box_title_rectangle">
                <div id="rectangle1">مهندسی مجرب</div>
                <i id="plas">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24.553" height="25.166" viewBox="0 0 24.553 25.166">
                        <g id="Group_25" data-name="Group 25" transform="translate(-334 -448)">
                            <path id="Path_6" data-name="Path 6" d="M0,0H21.553" transform="translate(335.5 460.549)"
                                fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3" />
                            <line id="Line_3" data-name="Line 3" y2="22.166" transform="translate(346.079 449.5)"
                                fill="none" stroke="#ffb562" stroke-linecap="round" stroke-width="3" />
                        </g>
                    </svg>
                </i>
                <div id="rectangle2">کلاس های با کیفیت</div>
                <i id="move">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22.557" height="48.535" viewBox="0 0 22.557 48.535">
                        <line id="Line_4" data-name="Line 4" x2="0.031" y2="6" transform="translate(5.248 13.5)"
                            fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3" />
                        <line id="Line_5" data-name="Line 5" x1="0.031" y2="20" transform="translate(17.278 3.5)"
                            fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3" />
                        <line id="Line_6" data-name="Line 6" y2="12" transform="translate(11.279 1.5)" fill="none"
                            stroke="#9a9a9a" stroke-linecap="round" stroke-width="3" />
                        <g id="Polygon_1" data-name="Polygon 1" transform="translate(22.557 48.535) rotate(180)"
                            fill="#ffb562">
                            <path
                                d="M 19.09318542480469 18.03518676757812 L 3.464104652404785 18.03518676757812 C 3.212934494018555 18.03518676757812 3.084994554519653 17.8785572052002 3.031094551086426 17.78518676757812 C 2.977184534072876 17.69181823730469 2.905504465103149 17.50270652770996 3.031094551086426 17.28518676757812 L 10.84563446044922 3.74999737739563 C 10.97121429443359 3.532477378845215 11.1708345413208 3.49999737739563 11.27864456176758 3.49999737739563 C 11.38645458221436 3.49999737739563 11.58607482910156 3.532477378845215 11.71165466308594 3.74999737739563 L 19.52619361877441 17.28518676757812 C 19.65178489685059 17.50270652770996 19.58010482788086 17.69181823730469 19.52620506286621 17.78518676757812 C 19.47229385375977 17.87854766845703 19.3443546295166 18.03518676757812 19.09318542480469 18.03518676757812 Z"
                                stroke="none" />
                            <path
                                d="M 11.27864742279053 6.000001907348633 L 5.196161270141602 16.53518676757812 L 17.36112976074219 16.53518676757812 L 11.27864742279053 6.000001907348633 M 11.27864456176758 2 C 11.95221996307373 2 12.62579441070557 2.333332061767578 13.01069450378418 2.999998092651367 L 20.82523536682129 16.53518676757812 C 21.59503364562988 17.86851692199707 20.63278388977051 19.53518676757812 19.09318542480469 19.53518676757812 L 3.464103698730469 19.53518676757812 C 1.924505233764648 19.53518676757812 0.9622440338134766 17.86851692199707 1.732053756713867 16.53518676757812 L 9.546594619750977 2.999998092651367 C 9.93149471282959 2.333332061767578 10.60506916046143 2 11.27864456176758 2 Z"
                                stroke="none" fill="#ffb562" />
                        </g>
                    </svg>
                </i>
                <div id="rectangle3">کارآموز ماهر</div>
            </div>
            <!--text-->
            <h1>
                <div id="box_title_text">
                    <p id="text">آموزش خود را به ما بسپارید<span style="color:#ffb562 ;">,</span>تا به <span
                            style="height: 20px;width: 40px;background-color:#F87474;border-radius: 2px; padding-left: 2px;padding-right: 2px;">هدف</span>
                        برسید</p>
                </div>
            </h1>
            <div id="box_spicial">
                <div id="box_text_bests_product">
                    <h1>محبوب ترین دوره ها</h1><img src="Icons/best-seller.png" alt="error">
                </div>
                <div id="spicial">
                    <?php
                    $conn = mysqli_connect("localhost","scifre_sciuser","sciweb18","scifre_scidata");
                    mysqli_set_charset($conn, "utf8");
                    $sql = "SELECT * FROM `product` ORDER BY product_view DESC LIMIT 3";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="show_hidden">
                                <div id="box_product">
                                    <div id="product_img">
                                        <img src="<?php echo "Icons/" . $row['product_img']; ?>" alt="error">
                                    </div>
                                    <div id="box_text_btn">
                                        <h1><?php echo $row['product_name']; ?></h1>
                                        <button class="btn_information" type="button">اطلاعات بیشتر</button>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div id="back_slider">
                <div id="box_location">
                    <h2 id="text_location">نگاهى به فضاهاى آموزشى ما</h2><img id="location"
                        src="Icons/logosciAsset 573x.webp" alt="error">
                </div>
                <!--slider-->
                <div id="box1">
                    <button id="p" onclick="prev()" aria-label="عقب رفتن در اسلایدر"><img
                            style="width: 25px;height: 25px;transform: rotate(-180deg);" src="Icons/Asset 454x.svg"
                            alt=""></button>
                    <div id="box2">
                        <div id="boximg">
                            <div id="positionimg">
                                <img id="photo1" loading="lazy" src="Images/IMG_20250712_092330.webp" alt="error">
                                <img id="photo2" loading="lazy" src="Images/IMG_20250712_093301.jpg" alt="error">
                                <img id="photo3" loading="lazy" src="Images/IMG_20250712_105153.jpg" alt="error">
                            </div>
                        </div>


                    </div>
                    <div id="sli3">
                        <button aria-label="اسلاید 1" id="d1"></button>
                        <button aria-label="اسلاید 2" id="d2"></button>
                        <button aria-label="اسلاید 3" id="d3"></button>
                    </div>

                    <button id="n" onclick="next()" aria-label="جلو رفتن در اسلایدر"><img
                            style="width: 25px;height: 25px;" src="Icons/Asset 454x.svg" alt="error"></button>
                </div>
            </div>



        </main>
        <footer>

            <div id="table_foter">
                <div id="logo_foter">
                    <img src="Images/logosci1Asset 4@4x.webp" alt="error">
                    <p id="text_down_logo_foter">آموزشگاه فنی و حرفه ای آزاد صائمی فرد</p>
                </div>
                <ul id="fast_call">
                    <h3 class="title1_forter">دسترسی سریع</h3>
                    <li><a href="aboutus.php">درباره ما </a></li>
                    <li><a href="contactus.php">تماس با ما</a></li>
                    <li><a href="https://web.rubika.ir/#c=u0BDt7m03fbb995549a8a55ea79d670f" target="_top"><img
                                id="robika" src="Images/logosciAsset 40.svg" alt="error"></a></li>
                    <li style="background-color: #F9F2ED;color:#F9F2ED;">.</li>
                </ul>
                <ul id="call">
                    <h3 class="title2_forter">تماس با ما</h3>
                    <li style="line-height: 30px;"><strong>آدرس : </strong>رشت - خیابان انقلاب(حاجی آباد) - بن بست صالحی
                        - ساختمان نازنین - طبقه
                        دوم - واحد5</li>
                    <li><strong>تلفن ثابت :</strong><span>33263694 - 013</span></li>
                    <li><strong>همراه : </strong>09112388013 - 09112313980</li>
                </ul>

                <div id="enemad">
                    <img src="Images/enemad.png" alt="error">
                </div>
            </div>
            <br>
            <br>
        </footer>

        <div id="box_up">
            <a href="#content"><img src="Icons/Asset 524x.svg" alt="error"></a>
        </div>
    </div>

    <!--tippy-->
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
    <!--tippy-->
    <script src="index.js"></script>
    <script src="header/header.js"></script>
    <?php include('check_login_alert.php'); ?>
</body>

</html>