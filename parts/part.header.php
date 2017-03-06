<div id="my-header" class="page-header container-fluid">
    <div class="row">
        <div id="my-title" class="col-xs-12 col-sm-12 col-md-1 col-lg-2 pull-left">
            <h1>L'atypique</h1>
        </div>

        <div id="my-header-nav" class="">
            <nav id="my-menu-1" class="pull-right hidden-xs hidden-sm">
                <ul class="my-nav-list">
                    <li><a href="?page=index" class="hvr-sweep-to-right <?php if($_GET['page']==='index'){echo ('active-link');} ?>">
                            <span class="glyphicon glyphicon-home"></span>Accueil</a>
                    </li>
                    <li><a href="?page=qui-sommes-nous" class="hvr-sweep-to-right <?php if($_GET['page']==='qui-sommes-nous'){echo ('active-link');} ?>">
                            <span class="glyphicon glyphicon-user"></span>Qui sommes nous ?</a>
                    </li>
                    <li><a href="?page=nos-restaurants" class="hvr-sweep-to-right <?php if($_GET['page']==='nos-restaurants'){echo ('active-link');} ?>">
                            <span class="glyphicon glyphicon-flag"></span>Nos restaurants</a>
                    </li>
                    <li><a href="?page=devenir-franchise" class="hvr-sweep-to-right <?php if($_GET['page']==='devenir-franchise'){echo ('active-link');} ?>">
                            <span class="glyphicon glyphicon-user"></span>Devenir franchisé ?</a>
                    </li>
                </ul>
            </nav>

            <nav id="my-menu-2" class="hidden-lg hidden-md">
                <ul class="my-nav-list">
                    <li class=""><a href="#" class="hvr-sweep-to-left"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li class=""><a href="#" class="hvr-sweep-to-left"><span class="glyphicon glyphicon-user"></span></a></li>
                    <li class=""><a href="#" class="hvr-sweep-to-left"><span class="glyphicon glyphicon-flag"></span></a></li>
                    <li class=""><a href="#" class="hvr-sweep-to-left"><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
            </nav>
        </div><!--end header nav-->
    </div><!--end row-->
</div>
