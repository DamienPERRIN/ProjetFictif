$(document).ready(function() {
    jQuery(function($){
        // On poplight click
        $('a.poplight').on('click', function() {
            var popID = $(this).data('rel');
            var popWidth = $(this).data('width'); // get width

            // Get windows
            $('#' + popID).fadeIn().css({ 'width': popWidth})
                .prepend('<a href="#" class="close"><span class="glyphicon glyphicon-remove close-popup"></span></a>');

            // Get centered windows
            var popMargTop = ($('#' + popID).height() + 100) / 2;
            var popMargLeft = ($('#' + popID).width() + 100) / 2;

            // Apply Margin to Popup
            $('#' + popID).css({
                'margin-top' : -popMargTop,
                'margin-left' : -popMargLeft
            });

            // Get background - .css({'filter' : 'alpha(opacity=80)'}) for I.E
            $('body').append('<div id="fade"></div>');
            $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

            return false;
        });

        // Close Popups and Fade Layer
        $('body').on('click', 'a.close, #fade', function() { //On body click
            $('#fade , .popup_block').fadeOut(function() {
                $('#fade, a.close').remove();
            });

            return false;
        });
    });
});