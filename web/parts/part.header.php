<header id="header" class="navbar navbar-default sb-slide affix-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <div id="bloc_page">
                <img src="../img/logo.pdf" href="#L'univers-Atypique" alt="Logo" id="logo"/>
            </div>

            <a href="/" class="navbar-brand"><img src="" alt="" width="225" height="65"></a>

            <div class="navbar-account">
                <a href="">Inscrivez-vous à la newsletter</a>
            </div>
        </div>
        <nav class="navbar-collapse collapse" role="navigation">
            <ul class="navbar-nav nav">

                <li class="">
                    <a href="">L'univers Atypique</a>
                </li>
                <li class="">
                    <a href="">Nos restaurants</a>
                </li>
                <li class="">
                    <a href="">Recrutements</a>
                </li>
                <li class="">
                    <a href="">Contact</a>
                </li>

                <li class=" active">
                    <a href="">Devenir franchise</a>

                </li>
                <fieldset>
                    <div class="form-item form-type-textfield form-item-keys-1">
		                <span class="aui-field aui-field-text aui-field-inline lfr-search-keywords">
		                    <span class="aui-field-content">
				                <span class="aui-field-element ">
				                    <input class="aui-field-input aui-field-input-text" id="keywords" name="keywords" value="" onblur="if (this.value == '') { this.value = ''; }" size="30" onfocus="if (this.value == '') { this.value = ''; }" type="text">
			                    </span>
		                    </span>
	                    </span>
                    </div>
                    <button type="submit" id="edit-submit-1" name="op" value="RECHERCHE" class="form-submit">RECHERCHE</button>
                    <input name="form_build_id" value="" type="hidden">
                </fieldset>
            </ul>
        </nav> <!-- end navbar -->
    </div> <!-- end container -->
</header>



<section>
    <div class="tabs tabs-style-iconbox">
        <div class="row">
            <div class="col-xs-3">

            </div>

            <div class="col-xs-6">
                <h1 class="text-center">Restaurants Atypiques</h1>
            </div>

            <div class="col-xs-3">

            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#acceuil" class="icon icon-home"><span>Acceuil</span></a></li>
                <li><a href="#restaurant" class="icon icon-coffee"><span>Nos restaurants</span></a></li>
                <li><a href="#nous-rejoindre" class="icon icon-upload"><span>Nous rejoindre ?</span></a></li>
                <li><a href="#qui-sommes-nous" class="icon icon-gift"><span>Qui sommes nous ?</span></a></li>
            </ul>
            <div class="navbar-account">
                <a href="">Inscrivez-vous à la newsletter</a></div>
        </nav>
        <div class="content-wrap">
            <section id="acceuil">
                <?php
                    include ('../parts/');
                ?>
            </section>

            <section id="restaurant">
                <?php include ('page.resto.php'); ?>
            </section>

            <section id="nous-rejoindre">
                <p>3</p>
            </section>

            <section id="qui-sommes-nous">
                <p>4</p>
            </section>
        </div><!-- /content -->
    </div><!-- /tabs -->
</section>