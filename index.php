<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SondesBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/bootstrap@4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/fontawesome@5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body class="container-fluid">
    <div class="row header">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" class="d-inline-block align-top logo rounded-circle">
                    SondesBoard
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-server"></i>
                                Sondes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-plus-circle"></i>
                                    Ajouter
                                </a>
                                <div class="dropdown-divider"></div>
                                <?php
                                    include 'src/menu.php';
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


    </div>

    <div class="row content mt-3">
        <?php
            include 'src/pages.php';
        ?>
    </div>

    <div class="row footer">

    </div>

    <script src="lib/jquery@3.6.0/jquery.min.js"></script>
    <script src="lib/bootstrap@4.6.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>