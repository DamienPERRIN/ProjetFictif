<section>
    <div class="tabs tabs-style-iconbox">
        <div class="row">
            <div class="col-xs-3"></div>

            <div class="col-xs-6">
                <h1 class="text-center">Restaurants Atypiques</h1>
            </div>

            <div class="col-xs-3"></div>
        </div>
        <nav id="my-main-nav">
            <ul>
                <li><a href="#acceuil" class="icon icon-home"><span>Acceuil</span></a></li>
                <li><a href="#restaurant" class="icon icon-gift"><span>Qui sommes nous ?</span></a></li>
                <li><a href="#qui-sommes-nous" class="icon icon-coffee"><span>Nos restaurants</span></a></li>
                <li><a href="#nous-rejoindre" class="icon icon-upload"><span>Nous rejoindre ?</span></a></li>
            </ul>
        </nav>
        <div id="main-page" class="content-wrap">
            <section id="acceuil">
                <p>1</p>
            </section>

            <section id="qui-sommes-nous">
                <p>2</p>
            </section>

            <section id="restaurant">
                <div class="spacer-header"></div>
                <?php include ('page.resto.php'); ?>
            </section>

            <section id="nous-rejoindre">
                <div class="spacer-header"></div>
                <?php include ('page.contact.php'); ?>
            </section>
        </div><!-- /content -->
    </div><!-- /tabs -->
</section>