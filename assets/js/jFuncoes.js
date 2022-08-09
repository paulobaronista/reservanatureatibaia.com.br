$(document).on('ready', function () {

    $(".glr01").slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 4000,
    });

    $(".glr02").slick({
        dots: false,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 4000,
    });
});

$(document).ready(function () {
    $('#cookies').show();
    if (window.localStorage.getItem('accept_cookies')) {
        $('#cookies').hide();
        return false;
    }
    $(".btn_cookie").click(function () {
        window.localStorage.setItem('accept_cookies', true);
        $('#cookies').hide();
        return false;
    });
});

// Script Scroll OnPage
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        $(".menu").addClass('active');
        var scroll_pos = 0;
        $(document).scroll(function () {
            scroll_pos = $(this).scrollTop();
            if (scroll_pos > 100) {
                $(".menu").addClass('active');
            } else {
                $(".menu").removeClass('active');
            }
        });

        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({ scrollTop: $target.offset().top + 8 }, 500, 'swing', function () {
            // window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 100) {
            $(".menu").addClass('active');
        } else {
            $(".menu").removeClass('active');
        }
    });
});

$(document).on('ready', function () {
    $('.navbar-collapse a').click(function () {
        $(".navbar-collapse").collapse('hide');
    });
});

$(document).ready(function () {
    $("#close").click(function () {
        $("#aviso").hide();
        window.location.href = "https://www.reservaelementum.com.br/"
    });
});

$(function () {
    $('.nome').clear();
    $('.email').clear();
    $('.telefone').clear();
    $('.msg').clear();

    $('.btn_enviar').on('click', function () {
        var n, e, t, m;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.telefone').val();
        m = $('.msg').val();
    });
});