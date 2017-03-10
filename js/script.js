$(document).ready(function() {
    $('.automatic-slider').unslider({
        autoplay: true,
        infinite: true
    });
    (function() {
        "use strict";
        var toggles = document.querySelectorAll(".c-hamburger");
        for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
        };
        function toggleHandler(toggle) {
            toggle.addEventListener( "click", function(e) {
                e.preventDefault();
                (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
            });
        }
    })();
    for (var i=1; i <= 9; i++){
        $("#animateModal-"+i).animatedModal({
            modalTarget:'modal-'+i,
            animatedIn:'lightSpeedIn',
            animatedOut:'bounceOutDown'
        });
    }
});