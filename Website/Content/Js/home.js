$(document).ready(function () {
    $('#firstname,#lastname').hide();

    $('.popup-container').click(function (event) {
        if ($(event.target).hasClass("popup-container")) {
            $(".popup-container").fadeOut('slow');
            return true;
        }
    });

    $('#close-popup').click(function(){
        $(".popup-container").fadeOut('slow');
        return false;
    });

    $('#isCompany2,#isCompany3').click(function () {
        $('#companyName, #companySiret').hide();
        $('#firstname,#lastname').show();
        $('.right-column.fix-size').height($('.left-column.fix-size').height() + "px");
    });

    $('#isCompany1').click(function () {
        $('#companyName, #companySiret').show();
        $('#firstname,#lastname').hide();
        $('.right-column.fix-size').height($('.left-column.fix-size').height() + "px");
    });

    $('.right-column.fix-size').height($('.left-column.fix-size').height() + "px");

    setTimeout(function () {
        $('.tooltip').fadeOut(1000);
    }, 3000);

    $('p.button a, nav a').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var div = $(this).attr('href');
        var height = $(div).offset().top;

        $('#global').stop().animate({
            scrollTop: $('#global').scrollTop() + height
        }, 1000);

        return false;
    });
    $('#global').scroll(function () {
        var currentPosition = $('#global').scrollTop();

        if ($('#group-strat').offset().top - 71 < 0) {
            $('nav a.active').removeClass('active');
            $('nav a[href="#group-strat"]').addClass('active');
        }
        else if ($('#form-strat').offset().top - 71 < 0) {
            $('nav a.active').removeClass('active');
            $('nav a[href="#form-strat"]').addClass('active');
        }
        else if ($('#menu-strat').offset().top - 71 < 0) {
            $('nav a.active').removeClass('active');
            $('nav a[href="#menu-strat"]').addClass('active');
        }
        else if ($('#place-strat').offset().top - 71 < 0) {
            $('nav a.active').removeClass('active');
            $('nav a[href="#place-strat"]').addClass('active');
        }
        else if ($('#presentation-strat').offset().top - 71 < 0) {
            $('nav a.active').removeClass('active');
            $('nav a[href="#presentation-strat"]').addClass('active');
        }
        else {
            $('nav a.active').removeClass('active');
            $('nav a[href="#carousel-strat"]').addClass('active');
        }
    });
    
    $('.hamburger').click(function(){
        $('#mobile-nav').fadeIn('fast');
    });
    $('#mobile-nav').click(function(){
        $('#mobile-nav').fadeOut('fast');
    });
});