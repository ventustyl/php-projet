<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title><?= $title ?></title>

</head>
<body>
<header>
    <div class="logo">
        <img class="image1" src="./logo afpa.png" alt="Logo Afpa">
    </div>
    <nav>
        <a id="link" href="#"><span id="burger"></span></a>
        <ul class="list-unstyled">
            <li><a href="./">Accueil</a></li>
            <?php
            if (isset($_SESSION['email'])) {
                // Utilisateur connecté
                echo '<li><a href="./dashbord.php">Dashboard</a></li>';
            
                echo '<li><a href="./deconnexion.php">Déconnexion</a></li>';
                echo '<li>Bienvenue, ' . $_SESSION['email'] . '</li>';
            } else {
                // Utilisateur non connecté
                echo '<li>Connectez-vous en dessous</li>';
            }
            ?>
        </ul>
    </nav>
</header>

