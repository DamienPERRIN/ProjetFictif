<?php
    require('src/log.bdd.php');

    $mysqli = getConnection();

    $sql    = "SELECT * FROM restaurant INNER JOIN horaire";
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
                        <p><a id="animateModal-<?php echo $record['id']; ?>" href="#modal-<?php echo $record['id']; ?>">DEMO02</a></p>
                    </div>
                </div>

                <div id="modal-<?php echo $record['id']; ?>">
                    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
                    <div  id="btn-close-modal" class="close-modal-<?php echo $record['id']; ?>">
                        CLOSE
                    </div>

                    <div class="modal-content">e
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-2">
                            <h3>Information</h3>
                            <ul>
                                <li><label>Adresse</label></li>
                                <li><label>Téléphone</label></li>
                                <li><label>Email</label></li>
                            </ul>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <h3>Horaires</h3>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Lundi</td><td><?php echo $record['lundi']; ?></td>
                                </tr>
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