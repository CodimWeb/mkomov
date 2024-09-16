setTimeout(function() {
    document.body.classList.remove('transition-off');
}, 50);


$(document).ready(function() {

    $(document).on('click', '.btn', function(){
        $(this).blur()
    });

    var mainNumContainer = $('.main-slider .num-container');

    $('.main-slider .slick-slider').on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
        mainNumContainer.text(i + '/' + slick.slideCount);
    });

    $('.main-slider .slick-slider').slick({
        dots: true,
        speed: 300,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.main-slider .slick-prev'),
        nextArrow: $('.main-slider .slick-next'),
        appendDots: $('.main-slider .dots-container')
    });

    $('.slider-gallery').slick({
        dots: false,
        speed: 300,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.main-gallery-arrows .slick-prev'),
        nextArrow: $('.main-gallery-arrows .slick-next'),
        variableWidth: true,
        centerMode: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    variableWidth: false,
                    centerMode: false,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                    centerMode: false,
                    dots: true,
                }
            },
        ]
    });

    $().fancybox({
        selector : '.main-gallery-fancy',
        backFocus : false,
        loop: true,
        transitionEffect: 'slide',
        afterShow : function( instance, current ) {
            var slickIndex = current.$thumb.prevObject.closest('.slick-slide').attr('data-slick-index');
            current.opts.$orig.closest(".slick-initialized").slick('slickGoTo', slickIndex, true);
        }
    });
})