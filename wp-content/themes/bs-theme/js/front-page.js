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

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}


function adjustPostSlideDimensions(e)
{
    var clientDimensions = viewport();
    console.log('width:' + clientDimensions.width);
    console.log('height:' + clientDimensions.height);

    if(clientDimensions.width >= 1024)
    {

        /* activate slider */
        if( parseInt($(".posts").attr('data-slideindex')) <= 0 )
        {
            $("#postPreviousTrigger").hide();
        }

       if(document.querySelector("div[data-anchor=posts]") != undefined )
       {
            // POST SECTION ADJUSTMENTS
           var postItems = document.querySelectorAll('.post');
           var postsCount = parseInt(postItems.length);
           var postsContainerWidth = postsCount * 25;
           $(".posts").css({width: postsContainerWidth + '%'});
           $(".post").show();
           $(".post").css({width: (100 / postsCount) + '%'});
           $(".posts").attr('data-count', postsCount);
       }

       if(document.querySelector("div[data-anchor=white-papers]") != undefined )
       {
           console.log('doc adjustments for the white papers');
           var whitePaperItem = document.querySelectorAll('.white-paper');
           var whitePaperCount = parseInt(whitePaperItem.length);
           var whitePaperContainerWidth = whitePaperCount * 75;
           $(".white-papers").css({width: whitePaperContainerWidth + '%'});
           $(".white-paper").css({width: ( 100 / whitePaperCount) + '%'});
           $(".white-papers").attr('data-count', whitePaperCount);
           $(".white-paper").show();
       }

    }

    else if (clientDimensions.width >= 768 && clientDimensions.width <= 1023)
    {

        if(document.querySelector("div[data-anchor=posts]") != undefined )
        {
            $(".posts").css({width: 100 + '%'});
            $(".post").css({width: 50 + '%'});
            $(".post").each(function(index, item) {

                if(index < 3)
                {
                    $(this).show();
                }

                if(index > 3)
                {
                    $(this).hide();
                }

            });
        }

        if(document.querySelector("div[data-anchor=white-papers]") != undefined )
        {
            // white paper adjustments
            $(".white-papers").css({width: 100 + '%'});
            $(".white-paper").css({width: 50 + '%'});
            $(".white-paper").hide();
            $('.white-paper').eq(0).show();
        }

    }

    else {

        if(document.querySelector("div[data-anchor=posts]") != undefined )
        {
            $(".posts").css({width: 100 + '%'});
            $(".post").css({width: 100 + '%'});

            $(".post").each(function(index, item) {
                if(index < 3)
                {
                    $(this).show();
                }
                if(index > 3)
                {
                    $(this).hide();
                }
            });

        }

            if(document.querySelector("div[data-anchor=white-papers]") != undefined )
            {
                // white paper adjustments
                $(".white-papers").css({width: 100 + '%'});
                $(".white-paper").css({width: 100 + '%'});

                $(".white-paper").hide();
                $('.white-paper').eq(0).show();
            }
    }
};



window.addEventListener('resize', adjustPostSlideDimensions);
window.addEventListener('load', adjustPostSlideDimensions);


$("#postRightTrigger").on('click', function(e) {

    e.preventDefault();

    var postBox = document.querySelector('.post');
    var postWidth = parseInt(postBox.clientWidth);
    var currentSlidePosition = $(".posts").css("transform");
    currentSlidePosition = Math.abs(parseInt(currentSlidePosition.split(',')[4]));
    var slideValue = (currentSlidePosition + postWidth);

    if(slideValue % postWidth == 0)
    {
        $(".posts").css('transform', 'translate3d(-'+slideValue+'px, 0, 0)');
        $(".posts").attr('data-slideindex', Math.abs(slideValue / postWidth));
    }

    if(parseInt($(".posts").attr('data-slideindex')) >= parseInt($(".posts").attr('data-count') - 2))
    {
        $(this).hide();
    }

    if( parseInt($(".posts").attr('data-slideindex')) >= 1 )
    {
        $("#postPreviousTrigger").show();
    }

});


$("#postPreviousTrigger").on('click', function(e) {

    e.preventDefault();
    var postBox = document.querySelector('.post');
    var postWidth = parseFloat(postBox.clientWidth);
    var currentSlidePosition = $(".posts").css("transform");
    currentSlidePosition = Math.abs(parseInt(currentSlidePosition.split(',')[4]));
    var slideValue = (currentSlidePosition - postWidth);

    if(slideValue % postWidth == 0)
    {

        $(".posts").css('transform', 'translate3d(-'+slideValue+'px, 0, 0)');
        $(".posts").attr('data-slideindex', Math.abs(slideValue / postWidth));
    }

    if( parseInt($(".posts").attr('data-slideindex')) <= 0 )
    {
        $(this).hide();
    }

    if( parseInt($(".posts").attr('data-slideindex')) == 0 )
    {
        $("#postRightTrigger").show();
    }




});


$("#whiteSlider-Next").on('click', function(e) {

    var whiteItemBox = document.querySelector('.white-paper');
    var whiteBoxWidth = parseInt(whiteItemBox.clientWidth);
    var currentSlidePosition = $(".white-papers").css("transform");
    currentSlidePosition = Math.abs(parseInt(currentSlidePosition.split(',')[4]));
    var slideValue = (currentSlidePosition + whiteBoxWidth);

    if(slideValue % whiteBoxWidth == 0)
    {
        $(".white-papers").css('transform', 'translate3d(-'+slideValue+'px, 0, 0)');
        $(".white-papers").attr('data-slideindex', Math.abs(slideValue / whiteBoxWidth));

    }

    if( parseInt($(".white-papers").attr('data-slideindex')) >= 1 )
    {
        $("#whiteSlider-Previous").show();
    }

    if(parseInt($(".white-papers").attr('data-slideindex')) >= parseInt($(".white-papers").attr('data-count') - 1))
    {
        $(this).hide();
    }

});

$("#whiteSlider-Previous").on('click', function(e) {
    var whiteItemBox = document.querySelector('.white-paper');
    var whiteBoxWidth = parseInt(whiteItemBox.clientWidth);
    var currentSlidePosition = $(".white-papers").css("transform");
    currentSlidePosition = Math.abs(parseInt(currentSlidePosition.split(',')[4]));
    var slideValue = (currentSlidePosition - whiteBoxWidth);
    if(slideValue % whiteBoxWidth == 0)
    {
        $(".white-papers").css('transform', 'translate3d(-'+slideValue+'px, 0, 0)');
        $(".white-papers").attr('data-slideindex', Math.abs(slideValue / whiteBoxWidth));
    }

    if( parseInt($(".white-papers").attr('data-slideindex')) <= 0 )
    {
        $(this).hide();
    }

    if(parseInt($(".white-papers").attr('data-count')) > parseInt($(".white-papers").attr('data-slideindex')) )
    {
        $('#whiteSlider-Next').show();
    }

});





$(".contact-reasons .reason").on('click', function(e) {
    $(this).toggleClass('reason-selected');
});


    var fpOptions = {
        licenseKey: '2060D6A4-01C34274-AA00B453-309E5CB4',
        anchors: ["main", "about", "work", "clients", "reviews", "services", "skills", "contact-form", "posts", "white-papers", "contact-details"],
        controlArrows: !1,
        lazyLoading: !1,
        paddingTop: "5rem",
        scrollOverflow: !0,
        sectionsColor: ["#3924fb", "#ffffff", "#ffffff", "#3924fb", "#607D8B", "#ffffff", "#ffffff", "#ffffff", "#3924fb", "#1f1a3a", "#ffffff"],
        slidesNavigation: 1,
        slidesNavPosition: "bottom",
        onLeave : function(origin, destination, direction)
        {

            if(destination.anchor == 'about' && direction == 'down')
            {
                $("div[data-anchor=about] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'work' && direction == 'down')
            {
                $("div[data-anchor=work] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'clients' && direction == 'down')
            {
                $("div[data-anchor=clients] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'awards' && direction == 'down')
            {
                $("div[data-anchor=awards] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'services' && direction == 'down')
            {
                $("div[data-anchor=services] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'skills' && direction == 'down')
            {
                $("div[data-anchor=skills] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'contact-form' && direction == 'down')
            {
                $("div[data-anchor=contact-form] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'posts' && direction == 'down')
            {
                $("div[data-anchor=posts] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'white-papers' && direction == 'down')
            {
                $("div[data-anchor=white-papers] .animated").addClass('fadeInUpBig');
            }

            if(destination.anchor == 'contact-details' && direction == 'down')
            {
                $("div[data-anchor=contact-details] .animated").addClass('fadeInUpBig');
            }

            },
        afterLoad : function(origin, destination, direction)
        {

            if(origin.anchor == 'about' && destination.anchor == 'work' && direction == 'down')
            {

            }
        }
    };

    var myScroll = new IScroll('.section');
    new fullpage('.fullpage-wrapper', fpOptions);

    $("#contact-form-body").submit(function(e) {

        e.preventDefault();

        var formAction = $(this).attr('action');

        var action = $('input[name="action"]').val();

        var nonce = $('input[name="nonce"]').val();

        var sender_name = $('input[name="sender_name"]').val();

        var sender_company = $('input[name="sender_company"]').val();

        var sender_email = $('input[name="sender_email"]').val();

        var sender_number = $('input[name="sender_number"]').val();

        var found_via = $('select[name="found_via"]').val();



        var payload = {

            "action": action,
            "_ajax_nonce" : nonce,
            "sender_name" : sender_name,
            "sender_company" : sender_company,
            "sender_email" : sender_email,
            "sender_number" : sender_number,
            "found_via" : found_via

        };

        payload = JSON.stringify(payload);

        $.ajax({
            url : formAction+'?action='+action,
            method : "POST",
            dataType : "json",
            contentType: "application/json; charset=utf-8",
            data : payload
        });




    });





});
