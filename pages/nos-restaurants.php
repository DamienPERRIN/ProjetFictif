<?php
    require('src/log.bdd.php');

    $mysqli = getConnection();

    $sql    = "SELECT * FROM restaurant r INNER JOIN horaire h ON r.id = h.id";
    $data   = execSql($mysqli, $sql);
?>

<div id="restaurants" class="container">
    <div class="row">
        <div class="col-sm-10 col-md-10">
            <h2>Nos restaurants</h2>
        </div>
        <?php
            $loop = 0;
            foreach ($data as $record):
        ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div id="resto-<?php echo $record['id']; ?>" class="thumbnail">
                    <img src="<?php echo ($path_to_site)?>/img/restaurants/restaurant<?php echo $record['id'] . ".jpeg"; ?>"
                         alt="Photo du restaurant <?php echo $record['titre']; ?>">
                    <div class="caption">
                        <h3><?php echo $record['titre']; ?></h3>
                        <p><?php echo $record['texte']; ?></p>
                        <p><a id="animateModal-<?php echo $record['id']; ?>" href="#modal-<?php echo $record['id']; ?>" class="myModal">En savoir plus</a></p>
                    </div>
                </div>

                <div id="modal-<?php echo $record['id']; ?>">
                    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
                    <div id="btn-close-modal" class="my-closing-btn close-modal-<?php echo $record['id']; ?>">
                        <p>FERMER</p>
                    </div>

                    <div class="modal-content">
                        <h2 class="text-center"><?php echo $record['titre']; ?></h2>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-2">
                            <h3 class="text-center">Informations</h3>
                            <ul>
                                <li><label><span class="glyphicon glyphicon-asterisk"></span> Adresse</label><?php echo $record['adresse']; ?></li>
                                <li><label class="brd-top"><span class="glyphicon glyphicon-asterisk"></span> Téléphone</label><?php echo $record['telephone']; ?></li>
                                <li><label class="brd-top"><span class="glyphicon glyphicon-asterisk"></span>   Email</label><?php echo $record['email']; ?></li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <h3 class="text-center">Horaires</h3>
                            <table class="table">
                                <tbody>
                                <tr><td>Lundi</td><td><?php echo $record['lundi']; ?></td></tr>
                                <tr><td>Mardi</td><td><?php echo $record['mardi']; ?></td></tr>
                                <tr><td>Mercredi</td><td><?php echo $record['mercredi']; ?></td></tr>
                                <tr><td>Jeudi</td><td><?php echo $record['jeudi']; ?></td></tr>
                                <tr><td>Vendredi</td><td><?php echo $record['vendredi']; ?></td></tr>
                                <tr><td>Samedi</td><td><?php echo $record['samedi']; ?></td></tr>
                                <tr><td>Dimanche</td><td><?php echo $record['dimanche']; ?></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!--end block-->
        <?php
            $loop++;
            endforeach;
        ?>
    </div>
</div>