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

<!--Import dropdown-->
<script type="text/javascript">
    $('#myDropdown').on('show.bs.dropdown', function () {
    $('.dropdown-toggle').dropdown()
})</script>

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

