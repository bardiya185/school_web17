<!DOCTYPE html>
<html lang="fa" dir="rtl">

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
    <link rel="stylesheet" href="footer/footer.css">
    <title>درباره ما</title>
    <style>
        html,
        body {
            height: auto;
            overflow-y: auto;
            margin: 0;
            padding: 0;
        }



        .dots::after {
            content: "";
            display: inline-block;
            animation: dots 1.2s steps(3, end) infinite;
        }

        @keyframes dots {
            0% {
                content: "";
            }

            33% {
                content: ".";
            }

            66% {
                content: "..";
            }

            100% {
                content: "...";
            }
        }

        .loading-text {
            color: white;
            font-size: 24px;
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

        /* محتوای درباره ما */
        .about-section {
            max-width: 1100px;
            margin: 60px auto;
            background: rgba(255, 255, 255, 0.16);
            backdrop-filter: blur(12px);
            /* بلور شیشه‌ای */
            -webkit-backdrop-filter: blur(12px);
            /* پشتیبانی برای سافاری */
            border-radius: 20px;
            /*خمیده کردن */
            border: 1px solid rgba(255, 255, 255, 0.3);
            /* خط دور روشن */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            /* سایه ملایم */
            padding: 40px;
            line-height: 50px;
            display: flex;
            justify-self: center;
            justify-content: center;
            justify-items: center;
        }

        .about-logo {
            display: block;
            margin: 0 auto 20px auto;
            /* بالا و پایین فاصله، راست و چپ auto برای وسط‌چین */
            height: 95px;
            border-radius: 12px;
            /* اگه لوگو گرد یا نیمه‌گرده زیباتر می‌شه */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            /* سایه لطیف */
            margin-top: 30px;
        }

        .about-container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .about-image-wrapper {
            flex: 1 1 300px;
        }

        .about-image {

            width: 100%;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .about-caption {
            margin-top: 16px;
            font-size: 18px;
            text-align: center;
            font-weight: bold;
            color: #007bff;
            background: none;
            border-right: 4px solid #007bff;
            border-radius: 2px;
            padding: 10px 0;
        }

        /* متن درباره ما */
        .about-text {
            flex: 2 1 400px;
            color: aliceblue;
        }


        .about-text h1 {
            font-size: 20px;
            color: #007bff;
            margin-bottom: 20px;
            border-bottom: 4px solid red;
            width: 160px;
        }

        .p_highlight {
            display: inline;
            background: linear-gradient(to top, rgba(227, 28, 10, 0.84) 75%, transparent 25%);
            border-radius: 4px;
        }

        .about-text ul {
            padding-right: 20px;
            list-style: disc;
            margin-top: 10px;
        }

        .about-text ul li::marker {
            color: #ff0000ff;
            font-weight: bold;
        }

        .contact-hint {
            margin-top: 30px;
            background: #eef6ffee;
            padding: 15px;
            border-right: 4px solid #007bff;
            border-radius: 8px;
            color: #05021a;
        }

        .contact-hint a {
            color: #007bff;
            text-decoration: none;
        }

        /* انیمیشن ظاهر شدن */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out forwards;
            animation-delay: 0.2s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ریسپانسیو برای موبایل */
        @media screen and (max-width: 768px) {
            .about-container {
                flex-direction: column;
            }

            .about-section {
                width: 100%;
                max-width: 80%;
                padding: 20px;
                display: flex;
                justify-self: center;
            }
        }

        #first_text_in_search {
            color: white;
        }


        #manageres{
            width: 100%;
            height: auto;
            display: flex;
            justify-content: space-around;
            color: aliceblue;
            flex-direction: row;
            text-align: center;
            line-height: 20px;
            gap: 10px;
        }
        #manageres img{
            width: 50px;
            height: 50px;
            margin-bottom: -10px;
            border-radius: 50px;
        }
        #manageres strong{
background-color:#4452B8FF;
border-radius: 5px;
padding: 2px;
        }
        #manageres p{
  font-size: 15px;
        }
    </style>
    <?php include('check_login_alert.php'); ?>
</head>

<body id="body">
    <!-- بخش لودینگ -->
    <div id="loading_control">
        <img id="loading" src="Images/com-optimize-1--unscreen-ezgif.com-optimize.gif" alt="error">
    </div>
    <div id="content">
        <?php include('header/header.php'); ?>
        <!-- محتوای صفحه -->
        <main>
            <section class="about-section fade-in">
                <div class="about-container">
                    <div class="about-image-wrapper">
                        <img src="Images/logosci1Asset 4@4x.webp" alt="logo" class="about-logo">
                        <img src="Images/amozeshgah.jpg" alt="amozeshgah" class="about-image">
                        <p class="about-caption">آموزش خود را به ما بسپارید تا به هدف برسید.</p>
                    </div>
                    <div class="about-text">
                        <h1>درباره آموزشگاه ما</h1>
                        <p>آموزشگاه فنی و حرفه‌ای آزاد <strong style="color: #007bff;">صائمی‌فرد</strong> با هدف آموزش
                            مهارت‌های
                            کاربردی در حوزه فناوری اطلاعات فعالیت خود را آغاز کرده است.
                            ما با تکیه بر اساتید مجرب و روش‌های آموزشی روز دنیا، تلاش می‌کنیم تا هنرجویان را برای ورود
                            موفق
                            به
                            بازار کار آماده کنیم.
                        </p>
                        <h3>
                            <p class="p_highlight">نمونه مهارت هایی که به آن ها می پردازیم عبارتند از:</p>
                        </h3>
                        <ul>
                            <li>برنامه‌نویسی تحت وب و ویندوز (HTML, CSS, JavaScript, C#, SQL و ...)</li>
                            <li>آموزش هوش مصنوعی و کاربرد های آن از صفر تا صد</li>
                            <li>آموزش ICDL و مهارت‌های عمومی کامپیوتر</li>
                            <li>طراحی گرافیک، لوگو و محتوای دیجیتال</li>
                            <li>یادگیری مباحث سخت افزاری کامپیوتر به صورت حرفه ای</li>
                            <li>آموزش مباحث حسابداری به صورت حرفه ای</li>
                            <li>آماده‌سازی برای آزمون‌های فنی و حرفه‌ای و دریافت مدرک رسمی و بین المللی</li>
                        </ul>
                        <p>
                            ما باور داریم که آموزش با کیفیت، مسیر رسیدن به آینده‌ای روشن‌تر است.<br>
                            اگر به یادگیری مهارت‌های دنیای دیجیتال علاقه‌مند هستید، همین حالا به جمع هنرجویان ما
                            بپیوندید!
                        </p>
                        <p class="contact-hint"> برای دریافت مشاوره رایگان و آشنایی با دوره‌ها، به <a
                                href="contactus.php">صفحه
                                تماس با ما</a> مراجعه کنید.</p>
                    </div>
                    <div id="manageres">
                        <div><img src="Images/-2147483648_-210369.jpg" alt="error"><br><br><strong>نام مؤسس</strong><p>مهندس غلامعلی صائمی فرد</p></div>
                        <div><img src="Images/logosci1Asset 4@4x.webp" alt="error"><br><br><strong>مدیر خواهران</strong><p>مهندس آزاده پور ذاکر عربانی</p></div>
                    </div>
                </div>
            </section>
        </main>
        <?php include('footer/footer.php'); ?>
    </div>
    <script src="header/header.js"></script>
    <!--tippy-->
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
    <!--tippy-->
</body>

</html>