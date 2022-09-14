<?php
  session_start() ;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require ("./Views/connexion.php");


if (isset($_POST['submit'])) {
  $titre = !empty($_POST["titre"]) ? $_POST["titre"] : NULL;
  $texte = !empty($_POST["texte"]) ? $_POST["texte" ] : NULL;


$insert1 = $conn->prepare("INSERT INTO article(titre, texte) VALUES (:titre, :texte)") or die(print_r($conn->errorInfo()));

$insert1->bindParam(':titre',$titre);
$insert1->bindParam(':texte',$texte);
// $insert1->bindParam(':int',$id);
$insert1-> execute();

header("location:index.php");
} else {
    header("location:dashbord.php");
}

?>