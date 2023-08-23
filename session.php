<?php 
session_start();
require('config.php');

if (isset($_POST['btn'])) {
    if (isset($_POST['email']) && isset($_POST['mdp'])) {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $erreur = "";

        try {

            $conn = new PDO("mysql:host={$dbConfig['servername']};dbname={$dbConfig['dbname']};charset=utf8mb4", $dbConfig['username'], $dbConfig['password']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE email = :email AND mdp = :mdp");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mdp', $mdp);
            $stmt->execute();

            $num_ligne = $stmt->rowCount();

            if ($num_ligne > 0) {
                header("Location: dashbord.php");
                $_SESSION['email'] = $email;
            } else {
                $erreur = "Adresse Mail ou Mot de passe incorrect !";
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
?>
