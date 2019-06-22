jQuery(document).ready(function ($) {
    var frontTopSliderText = new Swiper('#frontTopSliderText', {
        pagination: {
            el: '.frontTopPagination',
            clickable: true
        },
        navigation: {
            nextEl: '.frontTopNext',
            prevEl: '.frontTopPrev',
        },
        slidesPerView: 1,
        observer: true,
        simulateTouch: false,
    });
    var frontTopSliderImg = new Swiper('#frontTopSliderImg', {
        slidesPerView: 1,
        observer: true,
        simulateTouch: false,
    });
    frontTopSliderText.controller.control = frontTopSliderImg;
    frontTopSliderImg.controller.control = frontTopSliderText;

    var servicesSliderCards = new Swiper('#servicesSliderCards', {
        effect: 'coverflow',
        slidesPerView: 3,
        centeredSlides: true,
        observer: true,
        spaceBetween: -200,
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 300,
            modifier: 1,
            slideShadows : false,
        },
        simulateTouch: false,
    });
    var servicesSliderText = new Swiper('#servicesSliderText', {
        pagination: {
            el: '.servicesPagination',
            clickable: true
        },
        navigation: {
            nextEl: '.servicesNext',
            prevEl: '.servicesPrev',
        },
        slidesPerView: 1,
        observer: true,
        simulateTouch: false,
    });
    servicesSliderCards.controller.control = servicesSliderText;
    servicesSliderText.controller.control = servicesSliderCards;


    var newsSlider = new Swiper('#newsSlider', {
        pagination: {
            el: '.newsPagination',
            type: 'fraction',
        },
        scrollbar: {
            el: '.newsScrollbar',
            hide: false,
            draggable: true
        },
        observer: true,
        mousewheel: true,
        slidesPerView: 4,
        spaceBetween: 30,
        breakpoints: {
            // when window width is <= 320px
            480: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            // when window width is <= 480px
            600: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            // when window width is <= 480px
            992: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            // when window width is <= 480px
            1140: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1600: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is <= 640px
            1920: {
                slidesPerView: 4,
                spaceBetween: 30,
            }
        }
        // simulateTouch: false,
    });

});