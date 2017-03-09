<!--Import jQuery-->
<script type="text/javascript" src="<?php echo ($path_to_site); ?>/js/jquery-3.1.1.js"></script>

<!--Import Bootstrap-->
<script type="text/javascript" src="<?php echo ($path_to_site); ?>/js/bootstrap.js"></script>

<!--Import functions-->
<script type="text/javascript" src="<?php echo ($path_to_site); ?>/js/function.js"></script>

<!--Import Unslider-->
<script type="text/javascript" src="<?php echo ($path_to_site); ?>/js/unslider.js"></script>
<script type="text/javascript">
    $('.automatic-slider').unslider({
        autoplay: true,
        infinite: true
    });
</script>

<!--Import dropdown burger-->
<script>
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
</script>

<!--Import modal-->
<script type="text/javascript" src="<?php echo ($path_to_site); ?>/js/animatedModal.min.js"></script>
<script>
    for (var i=1; i <= 9; i++){
        $("#animateModal-"+i).animatedModal({
            modalTarget:'modal-'+i,
            animatedIn:'lightSpeedIn',
            animatedOut:'bounceOutDown'
        });
    }
</script>

