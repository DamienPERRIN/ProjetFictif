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
                            <p><a href="" data-width="500" data-rel="popup<?php echo $record['id']; ?>" class="btn btn-default popup-trigger poplight">En savoir plus</a></p>
                        </div>
                    </div>

                    <div id="popup<?php echo $record['id']; ?>" class="popup_block">
                        <h3><?php echo $record['titre']; ?></h3>
                        <div class="popup-img">
                            <img src="<?php echo ($path_to_site)?>/img/restaurants/restaurant<?php echo $record['id'] . ".jpeg"; ?>"
                                 alt="Photo du restaurant <?php echo $record['titre']; ?>">
                            <p><?php echo $record['texte']; ?></p>
                        </div>
                    </div>
                </div> <!--end block-->
            <?php endforeach; ?>
    </div>
</div>
