<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#202741" media="(prefers-color-scheme: light)">
  <meta name="theme-color" content="#0B0B0BFF" media="(prefers-color-scheme: dark)">
  <link rel="icon" type="image/x-icon" href="Icons/favicon.ico">
  <link rel="icon" type="image/png" href="Icons/icon.png">
  <link rel="stylesheet" href="header/header.css">
  <link rel="stylesheet" href="footer/footer.css">
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <title>صفحه تماس با ما</title>
  <style>


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

    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 1.2s ease-out forwards;
      animation-delay: 0.3s;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(180deg, #190a3d, #05021a);
      background-attachment: fixed;
      color: white;
    }

    #p1 {
      color: white;
      margin-top: 100px;
      font-size: 20px;
      background-color: red;
      width: 230px;
      text-align: center;
      border: 6px dotted white;
      border-radius: 10px;
      margin-right: auto;
      margin-left: auto;
      transition: all 0.1s;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      padding: 40px;
      flex-wrap: wrap;
    }

    .image-side {
      flex: 1 1 100px;
      text-align: center;
      order: 2;

    }

    .image-side img {
      max-width: 100%;
      height: auto;
      margin-top: -60px;
      margin-right: -35px;
    }

    .info-side {
      flex: 1 1 300px;
      color: rgb(67, 148, 168);
      order: 1;
    }

    .info-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .info-item img {
      width: 40px;
      margin-left: 10px;
    }

    .profile-menu {
      text-align: right;
      position: relative;
    }

    .icon-img {
      cursor: pointer;
      width: 55px;
    }

    .icon-img2 {
      cursor: pointer;
      width: 43px;
      padding-top: 20px;
    }

    .menu-content {
      display: none;
      position: absolute;
      top: 0;
      right: 60px;
      background-color: #f1f1f1;
      min-width: 180px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      border-radius: 6px;
      z-index: 100;
    }

    .menu-content a {
      color: black;
      padding: 10px 16px;
      text-decoration: none;
      display: block;
    }

    .menu-content a:hover {
      background-color: #ddd;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }

      .image-side {
        order: 1;
      }

      .info-side {
        order: 2;
      }

      header ul {
        line-height: normal;
        padding: 10px;
      }

      .profile-menu {
        text-align: center;
      }

      .menu-content {
        right: 0;
        left: 0;
        margin: auto;
      }
    }
  </style>
  <script>

    //شروع بخش loding
    window.addEventListener("load", function () {
      setTimeout(function () {
        document.getElementById("loading").style.display = "none";
      }, 2000); // تاخیر ۲ ثانیه‌ای برای تست
    });//پایان بخش loding

    function toggleMenu() {
      const menu = document.getElementById("telegramMenu");
      menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }

    document.addEventListener("click", function (event) {
      const menu = document.getElementById("telegramMenu");
      const icon = document.querySelector(".icon-img");
      if (!icon.contains(event.target) && !menu.contains(event.target)) {
        menu.style.display = "none";
      }
    });
  </script>
</head>

<body id="body">

  <!-- بخش لودینگ -->
  <div id="loading_control">
    <img id="loading" src="Images/com-optimize-1--unscreen-ezgif.com-optimize.gif" alt="error">
</div>
  <div id="content">
  <?php include('header/header.php'); ?>
  <main>
    <div class="fade-in">
      <p id="p1">صفحه تماس با ما</p>

      <div class="container">
        <div class="image-side">
          <img src="Images/file_00000000b18461f7aa15277d31b7905e.png" alt="نماینده پشتیبانی" />
        </div>

        <div class="info-side">
          <div class="info-item">
            <img src="Images/pin.png" alt="آدرس" />
            <span>آدرس: استان گیلان - رشت - خیابان انقلاب (حاجی آباد) - بن بست صالحی - ساختمان نازنین - طبقه دوم - واحد
              5</span>
          </div>
          <div class="info-item">
            <img src="Images/telephone.png" alt="تلفن" />
            <span>تلفن ثابت: 013-33263694</span>
          </div>
          <div class="info-item">
            <img src="Images/mobile-phone.png" alt="موبایل" />
            <span>تلفن همراه: 09112313980 - 09112388013</span>
          </div>
          <div class="info-item">
            <img src="Images/email.png" alt="ایمیل" />
            <span>جیمیل: faaz_saemifard@gmail.com</span>
          </div>
          <div class="info-item">
            <img src="Images/globe.png" alt="وب" />
            <span>آدرس وب‌سایت: www.saemifard.com</span>
          </div>

          <div class="profile-menu">
            <img src="Images/telegram_image.png" alt="Telegram" class="icon-img" onclick="toggleMenu()" />
            <div class="menu-content" id="telegramMenu">
              <a href="https://t.me/saemifardfaraz" target="_blank">حساب اول</a>
              <a href="https://t.me/narasg" target="_blank">حساب دوم</a>
            </div>
            <a href="https://web.rubika.ir/#c=u0BDt7m03fbb995549a8a55ea79d670f" target="_blank">
              <img src="Images/rubikapng.parspng.com_-300x300.png" alt="rubika" class="icon-img2"
                style="margin-bottom: 5px;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include('footer/footer.php'); ?>
  </div>
  <script src="header/header.js"></script>
    <!--tippy-->
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
    <!--tippy-->
    <?php include('check_login_alert.php'); ?>
</body>

</html>