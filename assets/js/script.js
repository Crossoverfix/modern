$(document).ready(function () {
    var $switchSales = $('.top-sales__control');
    $switchSales.on('click', function () {
        $switchSales.removeClass('active');
        $(this).addClass('active');
        $('.top-sales__left__bg').css("background","url('" + $(this).attr('data-pic-left') + "')");
        $('.top-sales__left__title').html($(this).attr('data-name'));
        $('.top-sales__left__info a').html($(this).attr('data-price'));
        $('.top-sales__right__bg').css("background","url('" + $(this).attr('data-pic-right') + "')");
        return false;
    })
    var $switchSlider = $('.catalog__control');
    $switchSlider.on('click', function () {
        let $slider = $(this).attr('data-type');
        if($slider == 'first'){
            $('[data-slider-type]').removeClass('active');
            $('[data-slider-type="first"]').addClass('active');
            $('.catalog__switch__line__progress').css('width','8%');
            $('.catalog__switch__line__point').css('left','8%');
        } else  if($slider == 'second'){
            $('[data-slider-type]').removeClass('active');
            $('[data-slider-type="second"]').addClass('active');
            $('.catalog__switch__line__progress').css('width','29%');
            $('.catalog__switch__line__point').css('left','29%');
        } else if($slider == 'third'){
            $('[data-slider-type]').removeClass('active');
            $('[data-slider-type="third"]').addClass('active');
            $('.catalog__switch__line__progress').css('width','50%');
            $('.catalog__switch__line__point').css('left','50%');
        } else if($slider == 'four'){
            $('[data-slider-type]').removeClass('active');
            $('[data-slider-type="four"]').addClass('active');
            $('.catalog__switch__line__progress').css('width','71%');
            $('.catalog__switch__line__point').css('left','71%');
        } else if($slider == 'five'){
            $('[data-slider-type]').removeClass('active');
            $('[data-slider-type="five"]').addClass('active');
            $('.catalog__switch__line__progress').css('width','92%');
            $('.catalog__switch__line__point').css('left','92%');
        }
        return false;
    })
    ymaps.ready(function () {
        var myMap = new ymaps.Map("contact_map", {
            center: [59.928663, 30.406948],
            zoom: 18
        });
    });
    // var swiper = new Swiper('.swiper-container', {
    //     slidesPerView: 3,
    //     // spaceBetween: 30,
    //     loop: true,
    //     pagination: {
    //         el: '.swiper-pagination',
    //         clickable: true,
    //     },
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    // });
})