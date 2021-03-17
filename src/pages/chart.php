<?php
    $sth = $dbh->prepare('SELECT * FROM `sondes` WHERE id = :id');
    $sth->execute(array(':id' => intval($_GET['id'])));
    $sonde = $sth->fetch();

    $sth = $dbh->prepare('SELECT * FROM `capteurs` WHERE sonde = :id');
    $sth->execute(array(':id' => intval($_GET['id'])));
    $capteurs = $sth->fetchAll();
?>
<div class="col-2">
    <div class="list-group list-group-flush">
        <?php
        foreach($capteurs as $capteur):
        ?>
            <a href="#capteur_<?php print $capteur['id']; ?>" class="list-group-item list-group-item-action"><?php print $capteur['definition']; ?></a>
        <?php
        endforeach;
        ?>
    </div>
</div>
<div class="col">
    <h1 class="m-0 text-dark"><?php print $sonde['nom']; ?></h1>
    <?php
    foreach($capteurs as $capteur):
    ?>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card" id="capteur_<?php print $capteur['id']; ?>">
                <div class="card-header">
                    <?php print $capteur['definition']; ?>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    <?php
    endforeach;
    ?>
</div>
