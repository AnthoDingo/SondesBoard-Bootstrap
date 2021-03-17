<?php

    $sondes = $dbh->query('SELECT * FROM `sondes`');
    foreach( $sondes as $sonde):
?>
<a class="dropdown-item" href="/?page=sonde&id=<?php print $sonde['id']; ?>">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <?php print $sonde['nom']; ?>
</a>
<?php
    endforeach;
?>