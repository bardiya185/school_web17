document.addEventListener('DOMContentLoaded', () => {
    const loader = document.getElementById('loading');
    const content = document.getElementById('content');
    if (content) {
        content.style.display = 'block';
    }
    else {
        content1.style.opacity = '0%';
    }
    setTimeout(function () {
        if (loader) {
            loader.style.opacity = '0%';
            loader.style.display = 'none';
        }
        if (content) {
            content.style.opacity = '100%';
        }
        else {
            content1.style.opacity = '100%';
        }
    }, 800);

});

//controler//
menu_head.addEventListener('click', (e) => {
    menuid.style.opacity = "100%";
    menuid.style.visibility = "visible";
    body.style.overflow = "hidden";

});
x_head.addEventListener('click', (e) => {
    menuid.style.opacity = "0%";
    menuid.style.visibility = "hidden";
    body.style.overflow = "auto";
});

var nonesub1 = "open";
var nonesub2 = "open";

function departman() {
    if (nonesub1 === "open") {
        sub1.style.display = "block";
        nonesub1 = "close";
    }
    else {
        sub1.style.display = "none";
        sub2.style.display = "none";
        nonesub1 = "open";
        nonesub2 = "open";
    }

}

function computer() {
    if (nonesub2 === "open") {
        sub2.style.display = "block";
        nonesub2 = "close";
    }
    else {
        sub2.style.display = "none";
        nonesub2 = "open";
    }
}
//search_box//
var ibox11 = document.querySelectorAll('.ibox');
var index = 0;
box_search.addEventListener('click', (e) => {
    a = setInterval(aa, 200);
    search_page.style.display = "flex";
    body.style.overflow = "hidden";
    function aa() {
        if (index <= 3) {
            ibox11[index].style.opacity = '100%';
            index++;
        }
    };
});

search_menu.addEventListener('click', (e) => {
    a = setInterval(aa, 200);
    search_page.style.display = "flex";
    body.style.overflow = "hidden";
    function aa() {
        if (index <= 3) {
            ibox11[index].style.opacity = '100%';
            index++;
        }
    };
});
x_box_search.addEventListener('click', (e) => {
    search_page.style.display = "none";
    body.style.overflow = "auto";
    clearInterval(a);
    index = 0;
    ibox11[0].style.opacity = '0';
    ibox11[1].style.opacity = '0';
    ibox11[2].style.opacity = '0';
    ibox11[3].style.opacity = '0';
});




$(document).ready(function () {


    $('#btn_search').on('click', function () {
        var searchValue = $('#search_box').val();
        searchValue = $.trim(searchValue);
        if (searchValue != "") {
            $(".show_hidden1").css("display", "none");
            $("#first_text_in_search").css("opacity", "0");
            $("#output_search").css("font-size", "0px");
            $("#loading_ajax1").css("opacity", "100%");
            $.ajax({
                url: "search.php",
                method: "post",
                data: { search: searchValue }, // Use the input value as the key
                success: function (response) {
                    setTimeout(function () {
                        $('#output_search').html(response); // Display response in the output_search div
                    }, 500);
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error, status);
                    alert("An error occurred while processing your request.");
                },
                complete: function () {
                    setTimeout(function () {
                        $("#loading_ajax1").css("opacity", "0");
                        $("#output_search").css("font-size", "15px");
                    }, 500);
                }
            });
        }
        else {
            $("#first_text_in_search").css("opacity", "100%");
            $.ajax({
                url: "search.php",
                method: "post",
                data: { search1: '' }, // Use the input value as the key
                success: function (response) {
                    $('#output_search').html(response); // Display response in the output_search div
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error, status);
                    alert("An error occurred while processing your request.");
                },
                complete: function () {
                    $("#first_text_in_search").css("opacity", "100%");
                }
            });
        }
    });



    $('#search_box').on('keyup', function (event) {
        if (event.key === "Enter") {
            $('#btn_search').click();
        }
        const searchValue = $('#search_box').val(); // Get the value from the input field
        if (searchValue === '') {
            $.ajax({
                url: "search.php",
                method: "post",
                data: { search1: '' }, // Use the input value as the key
                success: function (response) {
                    $('#output_search').html(response); // Display response in the output_search div
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error, status);
                    alert("An error occurred while processing your request.");
                },
                complete: function () {
                    $("#first_text_in_search").css("opacity", "100%");
                }
            });


        }
    });


    $('.ibox').on('click', function () {
        const value = $(this).text();
        $('#search_box').val(value);
        $('#btn_search').click();

    });


    $('#x_box_search').on('click', function () {
        const value = '';
        $('#search_box').val(value);
        $('#btn_search').click();
    });


    $('.menu_select').on('click', function () {
        $('#loading').css("display", "block");
        $('#content1').css("opacity", "0%");
        if (window.innerWidth < 1024) {
            $('#x_head').click();
        }
        var $product = $(this).closest('li');
        const value = $product.find('.menu_select').text();
        var menu = value;
        $.ajax({
            url: "menu.php",
            method: "POST",
            data: { menus: menu }, // Use the input value as the key
            success: function (response) {
                console.log("Success:");
                window.location.href = "menu.php";
            }

        });

    });
});




