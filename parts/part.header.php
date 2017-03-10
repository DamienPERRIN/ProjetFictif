<div id="header" class="container navbar navbar-default sb-slide affix-top" role="banner">
    <div class="navbar-header">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div id="bloc_page">
                    <img src="img/cerf.png" href="#L'univers-Atypique" alt="Logo" id="logo"/>
                </div>
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <h1>LES RESTAURANTS ATYPIQUES</h1>
            </div>
        </div>
        <div class="row hidden-xs hidden-sm ">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <ul class="navbar-nav nav">
                    <li class="">
                        <a href="?page=index" class="<?php if (isset($_GET['page']) AND $_GET['page'] === 'index') {
                            echo('active-link');
                        } ?>">L'univers Atypique</a>
                    </li>
                    <li class="">
                        <a href="?page=nos-restaurants"
                           class="<?php if (isset($_GET['page']) AND $_GET['page'] === 'nos-restaurants') {
                               echo('active-link');
                           } ?>">Nos restaurants</a>
                    </li>
                    <li class="">
                        <a href="?page=recrutement"
                           class="<?php if (isset($_GET['page']) AND $_GET['page'] === 'recrutement') {
                               echo('active-link');
                           } ?>">Recrutement</a>
                    </li>
                </ul>
            </div>
            <div class="active col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <a href="?page=devenir-franchise"
                   class="<?php if (isset($_GET['page']) AND $_GET['page'] === 'devenir-franchise') {
                       echo('active-link');
                   } ?>">Devenir franchisé ?</a>
            </div>
        </div>
    </div>
    <div class="dropdown hidden-md hidden-lg dropdown-menu-right">
        <button id="dLabel" class="navbar-text navbar-right c-hamburger c-hamburger--htx" type="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span>toggle menu</span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dLabel">

            <ul class="navbar-nav nav">

                <li class="">
                    <a href="?page=index" class="<?php if (!isset($_GET['page']) OR $_GET['page'] === 'index') {
                        echo('active-link');
                    } ?>">L'univers Atypique</a>
                </li>
                <li class="">
                    <a href="?page=nos-restaurants"
                       class="<?php if (isset($_GET['page']) AND $_GET['page'] === 'nos-restaurants') {
                           echo('active-link');
                       } ?>">Nos restaurants</a>
                </li>
                <li class="">
                    <a href="?page=recrutement"
                       class="<?php if (isset($_GET['page']) AND $_GET['page'] === 'recrutement') {
                           echo('active-link');
                       } ?>">Recrutement</a>
                </li>
                <li class="">
                    <a href="?page=devenir-franchise" class="<?php if (isset($_GET['page']) AND $_GET['page'] === 'devenir-franchise') {
                        echo('active-link');
                    } ?>">Devenir franchisé ?</a>
                </li>
            </ul>
        </ul>
    </div>
</div>

