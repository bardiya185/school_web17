//rectangle//
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(function () {
        box_title_text.style.top = '40%';
        box_title_text.style.opacity = '100%';
        rectangle1.style.opacity = '100%';
    }, 1100);
    setTimeout(function () {
        plas.style.opacity = '100%';
    }, 1100);
    setTimeout(function () {
        rectangle2.style.opacity = '100%';
    }, 1200);
    setTimeout(function () {
        move.style.opacity = '100%';
    }, 1400);
    setTimeout(function () {
        rectangle3.style.opacity = '100%';
    }, 1500);
    setTimeout(function () {
        rectangle3.style.boxShadow = '0px 0px 30px 1px #F87474';
        //window.location.href = '#location';
    }, 1700);
});
//show up site btn//
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        box_up.style.opacity = '100%';
        box_up.style.left = '20px';
    } else {
        box_up.style.opacity = '0';
        box_up.style.left = '-50px';
    }

    if (window.scrollY > 300) {

    }


});
//slider//
var index_photo = 0;
var time = 1;
function next() {
    index_photo++;
    if (index_photo == 0)
        positionimg.style.marginLeft = 305 + "px";

    if (index_photo == 1)
        positionimg.style.marginLeft = 0 + "px";

    if (index_photo == 2)
        positionimg.style.marginLeft = -610 + "px";
    time = 0;

    setTimeout(function () {
        time = 1;
    }, 2000);

}

function prev() {
    index_photo--;

    if (index_photo == 0)
        positionimg.style.marginLeft = 305 + "px";

    if (index_photo == 1)
        positionimg.style.marginLeft = 0 + "px";

    if (index_photo == 2)
        positionimg.style.marginLeft = -610 + "px";

    time = 0;

    setTimeout(function () {
        time = 1;
    }, 2000);
}

function process() {
    if (index_photo > 2) {
        index_photo = 0;
        positionimg.style.marginLeft = 305 + "px";
    }
    if (index_photo < 0) {
        index_photo = 2;
        positionimg.style.marginLeft = -610 + "px";
    }

    if (index_photo == 0) {
        document.getElementById('d1').style.background = "white";
        document.getElementById('d2').style.background = "rgb(130, 130, 130)";
        document.getElementById('d3').style.background = "rgb(130, 130, 130)";
    }
    if (index_photo == 1) {
        document.getElementById('d2').style.background = "white";
        document.getElementById('d3').style.background = "rgb(130, 130, 130)";
        document.getElementById('d1').style.background = "rgb(130, 130, 130)";
    }
    if (index_photo == 2) {
        document.getElementById('d3').style.background = "white";
        document.getElementById('d2').style.background = "rgb(130, 130, 130)";
        document.getElementById('d1').style.background = "rgb(130, 130, 130)";
    }



    if (index_photo == 0)
        positionimg.style.marginLeft = 305 + "px";

    if (index_photo == 1)
        positionimg.style.marginLeft = 0 + "px";

    if (index_photo == 2)
        positionimg.style.marginLeft = -610 + "px";

}
setInterval(process, 100);
function Time() {
    if (time == 1) {
        index_photo++;

        if (index_photo == 0)
            positionimg.style.marginLeft = 305 + "px";
        if (index_photo == 1)
            positionimg.style.marginLeft = 0 + "px";
        if (index_photo == 2)
            positionimg.style.marginLeft = -610 + "px";
    }
}
setInterval(Time, 8000);

document.getElementById('d1').addEventListener('click', (e) => {
    index_photo = 0;
    time = 1;
});
document.getElementById('d2').addEventListener('click', (e) => {
    index_photo = 1;
    time = 1;
});
document.getElementById('d3').addEventListener('click', (e) => {
    index_photo = 2;
    time = 1;
});








