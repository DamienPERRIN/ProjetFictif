<script src="../../web/js/cbpFWTabs.js"></script>
<script>
    (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
        });

    })();
</script>

<!--Import facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!--Import twitter-->
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<!--Import jQuery-->
<script type="text/javascript" src="../../web/js/jquery-3.1.1.js"></script>

<!--Import Bootstrap-->
<script type="text/javascript" src="../../web/js/bootstrap.js"></script>

