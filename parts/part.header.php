<div id="header" class="container navbar navbar-default sb-slide affix-top" role="banner">
    <div class="navbar-header">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div id="bloc_page">
                    <img src="img/logo.png" href="#L'univers-Atypique" alt="Logo" id="logo"/>

                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h1>LES RESTAURANTS ATYPIQUES</h1>
            </div>
        </div>
        <div class="row hidden-xs hidden-sm ">
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-lg-offset-1">
                <ul class="navbar-nav nav">

                    <li class="">
                        <a href="?page=index" class="<?php if(isset($_GET['page']) AND $_GET['page']==='index'){echo ('active-link');} ?>">L'univers Atypique</a>
                    </li>
                    <li class="">
                        <a href="?page=nos-restaurants" class="<?php if(isset($_GET['page']) AND $_GET['page']==='nos-restaurants'){echo ('active-link');} ?>">Nos restaurants</a>
                    </li>
                    <li class="">
                        <a href="?page=contact" class="<?php if(isset($_GET['page']) AND $_GET['page']==='contact'){echo ('active-link');} ?>">Contact</a>
                    </li>
                    <li class="active">
                        <a href="?page=devenir-franchise" class="<?php if(isset($_GET['page']) AND $_GET['page']==='devenir-franchise'){echo ('active-link');} ?>">Devenir franchisé ?</a>
                    </li>
                </ul>
            </div>
        </div>

        <!--<a href="/" class="navbar-brand"><img src="" alt="" width="225" height="65"></a>

        <div class="navbar-account">
            <a href="">Inscrivez-vous à la newsletter</a>
        </div>-->
    </div>


    <div class="dropdown hidden-md hidden-lg dropdown-menu-right">
        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dLabel">

            <ul class="navbar-nav nav">

                <li class="">
                    <a href="?page=index" class="<?php if(isset($_GET['page']) AND $_GET['page']==='index'){echo ('active-link');} ?>">L'univers Atypique</a>
                </li>
                <li class="">
                    <a href="?page=nos-restaurants" class="<?php if(isset($_GET['page']) AND $_GET['page']==='nos-restaurants'){echo ('active-link');} ?>">Nos restaurants</a>
                </li>
                <li class="">
                    <a href="?page=contact" class="<?php if(isset($_GET['page']) AND $_GET['page']==='contact'){echo ('active-link');} ?>">Contact</a>
                </li>
                <li class="active">
                    <a href="?page=devenir-franchise" class="<?php if(isset($_GET['page']) AND $_GET['page']==='devenir-franchise'){echo ('active-link');} ?>">Devenir franchisé ?</a>
                </li>
            </ul>

        </ul>
    </div>

        <nav class="navbar-collapse collapse" role="navigation">

    </nav> <!-- end navbar -->
</div> <!-- end container -->
