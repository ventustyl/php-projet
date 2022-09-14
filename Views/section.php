<?php
require ("connexion.php");
?>

<main>
        <section>
        <?php
        $reponse = $conn->query('select * from article ORDER BY idarticle desc');
while($item = $reponse ->fetch()){
  echo '<div class="article" >';
  echo '<p>'.$item['titre'].'</p>';
  echo '<p>'.$item['texte'].'</p>';
  echo '<p>'.$item['creation'].'</p>';
  echo '</div>';
}
?>
        </section>