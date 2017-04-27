$(function () {


    if($(window).width() < 768){
        $('a.anchor').click(function (){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top - 83;
            $('html,body').animate({
                scrollTop: destination
            }, 800);
            return false;
        });
    }
    else {
        $('a.anchor').click(function () {
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top - $('.main_menu').height();
            $('html,body').animate({
                scrollTop: destination
            }, 800);
            return false;
        });

    }



    $('.main_menu .hamburger').on('click', function () {
        $('.menu').toggleClass('open');
    });
// закрытие гамбургера после клика по ссылке
    $('.menu>li>a').on('click', function () {
        $('.menu').toggleClass('open');

    });

    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 0
    });

    $('.buy_one').hover(
        function () {
            $('.one').css("background-color", "#49cbcd");
        },
        function () {
            $('.one').css("background-color", "#485460");
    });

    $('.buy_second').hover(
        function () {
            $('.second').css("background-color", "#49cbcd");
        },
        function () {
            $('.second').css("background-color", "#485460");
        });

    $('.buy_third').hover(
        function () {
            $('.third').css("background-color", "#49cbcd");
        },
        function () {
            $('.third').css("background-color", "#485460");
        });

});
