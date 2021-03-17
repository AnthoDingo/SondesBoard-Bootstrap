<?php
    $sth = $dbh->prepare('SELECT COUNT(id) as total FROM `sondes`');
    $sth->execute();
    $sondes = $sth->fetch();

    $sth = $dbh->prepare('SELECT COUNT(id) as total FROM `capteurs`');
    $sth->execute();
    $capteurs = $sth->fetch();

?>
<div class="col-12">
    <div class="row row-cols-6">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-server"></i>
                    Sondes
                </div>
                <div class="card-body">
                    <?php print $sondes['total']; ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-eye-dropper"></i>
                    Capteurs
                </div>
                <div class="card-body">
                    <?php print $capteurs['total']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
