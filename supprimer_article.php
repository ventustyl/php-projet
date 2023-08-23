<?php
require("connexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idarticle'])) {
    $articleId = $_POST['idarticle'];

    try {
        $stmt = $conn->prepare("DELETE FROM article WHERE idarticle = :id");
        $stmt->bindParam(":id", $articleId);

        if ($stmt->execute()) {
            // Rediriger vers la même page pour rafraîchir
            header("Location: dashbord.php");
            exit();
        } else {
            echo "Erreur lors de la suppression de l'article.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>