$(() => {
    /* Loading AOS */
    // AOS.init();
    $('.student-feedbacks').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: false,
        nextArrow: false
    });
    $('.hero-banner').slick({
        dots: true, infinite: true, speed: 500, fade: true, autoplay: true, autoplaySpeed: 2000, cssEase: 'linear'
    });
})
