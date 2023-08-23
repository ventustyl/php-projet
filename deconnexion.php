<?php
// Démarrez la session
session_start();

// Supprimez toutes les variables de session
$_SESSION = array();

// Détruisez la session
session_destroy();

// Redirigez vers la page de connexion ou autre page appropriée
header("Location: index.php");

exit();
?>
