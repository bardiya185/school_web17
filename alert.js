$(document).ready(function () {
    $('.btn_information').on('click', function () {
        if(localStorage.getItem('status_login') == 'true'){
        Swal.fire({
            title: "<strong>اطلاعیه</strong>",
            icon: "info",
            html: `
         برای اطلاع بیشتر و ثبت سفارش به لینک زیر مراجعه کنید
        `,
            showCloseButton: true,
            showConfirmButton: false,
            showDenyButton: true,
            denyButtonText: "<a style='color:#FFFFFFFF;'href='https://web.rubika.ir/#c=u0BDt7m03fbb995549a8a55ea79d670f' target='_top'>لینک</a>",
        });
    }
    else{
        Swal.fire({
            title: "<strong>هشدار</strong>",
            icon: "warning",
            html: `
         برای ادامه فرایند باید ورود کنید
        `,
            showCloseButton: true,
            showConfirmButton: false,
            showDenyButton: true,
            denyButtonText: "<a style='color:#FFFFFFFF;'href='login.php' target='_top'>ورود</a>",
        });
    }
    });
});