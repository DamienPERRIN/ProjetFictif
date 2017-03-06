<?php
    $path_to_site = '/ProjetFictif';
    $page = isset($_GET['page']) ? $_GET['page'] : 'index';

    if ( $page === 'qui-sommes-nous'
    OR $page === 'devenir-franchise'
    OR $page === 'nos-restaurants') {
        $page = $page . '.php';
    } else {
        $page = 'index.php';
    }
?>

<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <!--HEAD import from parts-->
    <?php include('parts/part.head.php'); ?>
</head>

<body>
<header>
    <!--HEADER import from parts-->
    <?php include('parts/part.header.php'); ?>
</header>

<main>
    <?php include ('/pages/' . $page); ?>
</main>

<footer>
    <!--FOOTER import from parts-->
    <?php include('parts/part.footer.php'); ?>
</footer>

<!--FOOT import from parts-->
<?php include('parts/part.foot.php'); ?>
</body>
</html>
