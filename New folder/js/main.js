$(function () {

    setTimeout(function () {
        $('.jump-kvokka').fadeOut(600, function () { })
        $('body').addClass('load');
    }, 800)

    $('.burger-wrap').on('click', function () {
        $('.modal-wrapper').fadeIn(500, function () { })
    })

    $('.burger__modal').on('click', function () {
        $('.modal-wrapper').fadeOut(500, function () { })
    })

    $('.arrow-nav__prev').on('click', function () {
        var pathname = location.pathname ? location.pathname.split('/') : ['']
        var pathnameClear = pathname.filter(function (item) {
            return item != ''
        })
        if (pathnameClear.length <= 1) {
            location.href = '/'
        } else {
            var newUrl = pathnameClear.splice(0, pathnameClear.length - 1).join('/')
            location.href = '/' + newUrl
        }
    });

    $(".fade-item").click(function () {
        $(".fade-item.fade-item--active").removeClass("fade-item--active")
        $(this).addClass("fade-item--active");
        $(".fade-content.active").removeClass('active')
        $($(this).attr('href')).addClass('active')

        return false
    });
});

$(document).ready(function () {
    $('#01').on('click', function () {
        $('.steps ul li span').removeClass('active');
        $(this).addClass('active');
        $('.steps__text').css('display', 'none');
        $('.steps__text').removeClass('active');
        $('.steps__text--1').addClass('active');
    })
    $('#02').on('click', function () {
        $('.steps ul li span').removeClass('active');
        $(this).addClass('active');
        $('.steps__text').css('display', 'none');
        $('.steps__text').removeClass('active');
        $('.steps__text--2').addClass('active');
    })
    $('#03').on('click', function () {
        $('.steps ul li span').removeClass('active');
        $(this).addClass('active');
        $('.steps__text').css('display', 'none');
        $('.steps__text').removeClass('active');
        $('.steps__text--3').addClass('active');
    })
    $('#04').on('click', function () {
        $('.steps ul li span').removeClass('active');
        $(this).addClass('active');
        $('.steps__text').css('display', 'none');
        $('.steps__text').removeClass('active');
        $('.steps__text--4').addClass('active');
    })
    $('#05').on('click', function () {
        $('.steps ul li span').removeClass('active');
        $(this).addClass('active');
        $('.steps__text').css('display', 'none');
        $('.steps__text').removeClass('active');
        $('.steps__text--5').addClass('active');
    })
})

// slick slider
$(document).ready(function () {
    $('.slick-slider1').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: $('.formats__wrapper-arrow'),
        responsive: [

            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })
    $('.slick-slider2').slick({
        mobileFirst: true,
        nextArrow: $('.action__arrow'),
        responsive: [{
            breakpoint: 768,
            settings: 'unslick'
        }]
    })
})