
<?php
require ("connexion.php");
?>

<main>
        <section>
        <?php
        $reponse = $conn->query('select * from article ORDER BY idarticle desc');
        while ($item = $reponse->fetch()) {
                echo '<div class="article">';
                echo '<p>' . $item['titre'] . '</p>';
                echo '<p>' . $item['texte'] . '</p>';
                echo '<p>' . $item['creation'] . '</p>';
                
                if (isset($_SESSION['email'])) {
                    echo '<form method="post" action="./Views/supprimer_article.php">';
                    echo '<input type="hidden" name="idarticle" value="' . $item['idarticle'] . '">';
                    echo '<button type="submit">Supprimer</button>';
                    echo '</form>';
                }
                
                echo '</div>';
            }
            
?>
<div class="article">
    <h1>Bienvenue sur la page test PHP de Eric Venturino</h1>
    <h2>Pour la connexion le login est: test@test.fr et le mot de passe: test <br>
        amusé vous bien le projet et relié a une base de données mysql en ligne </h2p>
</div>

        </section>

