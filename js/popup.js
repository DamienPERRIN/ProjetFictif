// Popup Window
function getMyPopUp(my_button, my_view) {
    var scrollTop = '';
    var newHeight = '100';

    $(window).bind('scroll', function () {
        scrollTop = $(window).scrollTop();
        newHeight = scrollTop + 100;
    });

    $(my_button).click(function (e) {
        e.stopPropagation();
        if (jQuery(window).width() < 767) {
            $(this).after($(my_view));
            $(my_view).show().addClass('popup-mobile').css('top', 0);
            $('html, body').animate({
                scrollTop: $(my_view).offset().top
            }, 500);
        } else {
            $(my_view).removeClass('popup-mobile').css('top', newHeight).toggle();
        }
        ;
    });

    $('html').click(function () {
        $(my_view).hide();
    });


    $('.popup-btn-close').click(function (e) {
        $(my_view).hide();
    });

    $(my_view).click(function (e) {
        e.stopPropagation();
    });
}

for (var i=1; i<=9; i++) {
    getMyPopUp('#pop-'+i, '#popup-'+i);
}


