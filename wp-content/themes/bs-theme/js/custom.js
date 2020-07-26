$(function() {

    var flyOutHeader = $('header#header .menu.absolute');

    $(".checkToggleMaterial").click(function() {
        $(this).toggleClass('opacity-100');
    });

    $('.burger').on('click', function(e) {
        if(flyOutHeader.hasClass('left-full'))
        {
            flyOutHeader.removeClass('left-full').addClass('left-0');
        }
    });

    $("#primaryNav li a").on('click', function(e) {

        if(flyOutHeader.hasClass('left-0'))
        {
            flyOutHeader.removeClass('left-0').addClass('left-full');
        }
    });

    $("header#header .close-btn").on('click', function() {
        flyOutHeader.removeClass('left-0').addClass('left-full');
    });

});
