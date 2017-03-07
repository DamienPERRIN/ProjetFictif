<div id="header" class="container navbar navbar-default sb-slide affix-top" role="banner">
    <div class="navbar-header">
        <div id="bloc_page">
            <img src="img/logo.png" href="#L'univers-Atypique" alt="Logo" id="logo"/>
        </div>

        <a href="/" class="navbar-brand"><img src="" alt="" width="225" height="65"></a>

        <div class="navbar-account">
            <a href="">Inscrivez-vous à la newsletter</a>
        </div>
    </div>
    <nav class="navbar-collapse collapse" role="navigation">
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
    </nav> <!-- end navbar -->
</div> <!-- end container -->
