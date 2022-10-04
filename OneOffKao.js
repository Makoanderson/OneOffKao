/*$(function(){
    var $jsslider = $('#js-slider');
    $jsslider.on('init', function (event, slick, currentSlide, nextSlide){
        slideItem = $('#js-slider .slick-slice')
        for (var i = 0; i < slick.slideCount; i++) {
            var lideImg = slideItem.filter(function () {
                return $(this).data('slick-index') === i;
            }).find('img').clone();
            var dot = $('.thumbs_list').find("li").eq(i);
            var src = slideImg.attr('src');
            dot.css('background', "url(".concat(src,")"));
            dot.css('background-size', 'cover');
        }
    });
    $jsslider.slick({
        arrows: false,
        dots: true,
        dotsClass: 'thumbs_list',
        appedDots: $('.thumbs_dots'),
        customPaging: function (slick, index) {
            return '';
        },
        fade: true,
        autoplay: false,
        slidesToShow: 1,
    });
});*/

