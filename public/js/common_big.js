$(function () {


    $('#navigation').removeClass('default');
    $(window).scroll(function () {
        if ($('.header').hasClass("content")) {
            if ($(this).scrollTop() > 240) {
                $('#navigation').addClass("default").fadeIn("fast");
            }
            else {
                $('#navigation').removeClass("default").fadeIn("fast");
            }
        }
        else {
            if ($(this).scrollTop() > $(window).height() - 60) {
                $('#navigation').addClass("default").fadeIn("fast");
            }
            else {
                $('#navigation').removeClass("default").fadeIn("fast");
            }
        }
    });

    $("#waypoint").on("click", "a", function (event) {

        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        if ($('#navigation').hasClass("default")) {
            //анимируем переход на верх за 1500 мс
            $('body,html').animate({scrollTop: 0}, 1500);
        }
        else {
            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top - 80}, 1500);
        }
    });
    $('.icon_menu').on('click', function () {
        $(this).closest('#navigation').toggleClass('menu_open');
        //нужно исправить чтбы меню открывалось правильно
        /*var id  = $('#waypoint').attr('href'), top = $(id).offset().top;
        if ($('#navigation').hasClass("default")) {
            $('body,html').animate({scrollTop: top}, 1500);
        }
        else {}*/
    });

    $('.title_quest').on('click', function () {
        $(this).closest('.quest').toggleClass('open');

    });


    //SVG Fallback
    /*if (!Modernizr.svg) {
        $("img[src*='svg']").attr("src", function () {
            return $(this).attr("src").replace(".svg", ".png");
        });
    }
    ;*/

    //Chrome Smooth Scroll
    try {
        $.browserSelector();
        if ($("html").hasClass("chrome")) {
            $.smoothScroll();
        }
    } catch (err) {

    }
    ;

    $("img, a").on("dragstart", function (event) {
        event.preventDefault();
    });


});

$(window).load(function () {

    /*$(".loader_inner").fadeOut();
    $(".loader").delay(400).fadeOut("slow");*/

    $(".phone").animated("fadeInRight", "fadeInDown");
    $(".address").animated("fadeInLeft", "fadeInDown");
    /* не появляеться на планшете пока не начнешь скролить*/
    /*$(".navigation").animated("fadeInUp", "fadeInDown");*/

    $(".logo").animated("zoomIn", "fadeInDown");

    $(".about .title").animated("fadeInDown", "fadeOutLeft");
    $(".about .text").animated("fadeInLeft", "fadeOutLeft");
    $(".about .advantage_1").animated("fadeInLeft", "fadeOutLeft");
    $(".about .advantage_2").animated("fadeInUp", "fadeOutLeft");
    $(".about .advantage_3").animated("fadeInRight", "fadeOutLeft");

    $(".team .title").animated("fadeInDown", "fadeOutLeft");
    $(".team .photo").animated("fadeInLeft", "fadeOutLeft");
    $(".team .info").animated("fadeInRight", "fadeOutLeft");

});


