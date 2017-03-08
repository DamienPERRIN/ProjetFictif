<?php
    require('src/log.bdd.php');

    $mysqli = getConnection();

    $sql    = "SELECT * FROM restaurant";
    $data  = execSql($mysqli, $sql);

    $sql    = "SELECT * FROM avis";
    $data1  = execSql($mysqli, $sql);
?>

<div id="restaurants" class="container">
    <div class="row">
        <div class="col-sm-10 col-md-10">
            <h2>Nos restaurants</h2>
        </div>

            <?php foreach ($data as $record): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div id="resto-<?php echo $record['id']; ?>" class="thumbnail">
                        <img src="<?php echo ($path_to_site)?>/img/restaurants/restaurant<?php echo $record['id'] . ".jpeg"; ?>"
                             alt="Photo du restaurant <?php echo $record['titre']; ?>">

                            <div class="caption">
                                <h3><?php echo $record['titre']; ?></h3>
                                <p><?php echo $record['texte']; ?></p>
                            <p><a id="pop-<?php echo $record['id']; ?>" class="btn btn-default popup-trigger">En savoir plus</a></p>
                        </div>
                    </div>
                </div> <!--end block-->
            <?php endforeach; ?>

    </div>
</div>