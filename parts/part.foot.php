<!--Import jQuery-->
<script type="text/javascript" src="<?php echo ($path_to_site); ?>/js/jquery-3.1.1.js"></script>

<!--Import Bootstrap-->
<script type="text/javascript" src="<?php echo ($path_to_site); ?>//js/bootstrap.js"></script>

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

