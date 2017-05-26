$(function() {

    $('.hamburger').click(function () {
        $('.mobile-nav-dropdown').toggle();
        $('.subnav-dropdown').hide();
        $('nav').hide();
    });

    $('.mobile-nav-dropdown img').click(function () {
       $('.mobile-nav-dropdown').toggle();
       $('nav').show();
    });

    $('.subnav ul li').click(function () {
        var which = $(this).data("id");

        $('.subnav-dropdown').toggle();

        $('.subnav-dropdown img').hide();
        $('.subnav-dropdown img.'+which).show();

        $('.subnav-dropdown p').hide();
        $('.subnav-dropdown p.'+which).show();

        $('#type').val(which);

    });

    $( window ).resize(function() {

        var height = $('.gallery-slider .slick-active img').height();

        $('.gallery-slider').height(height);
        $('.gallery-container').height(height);
        $('.slick-slide').height(height);

    });


    $('.mobile-nav-dropdown li.little').click(function () {
        var which = $(this).data("id");

        $('.mobile-nav-dropdown').hide();

        $('.subnav-dropdown').toggle();

        $('.subnav-dropdown img').hide();
        $('.subnav-dropdown img.'+which).show();

        $('.subnav-dropdown p').hide();
        $('.subnav-dropdown p.'+which).show();

        $('#type').val(which);

    });

});