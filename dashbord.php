<?php
   session_start() ;
require("./Views/connexion.php");

require('./Views/header.php');
?>


<div class="module1">
  Bienvenue dans le dashboard
  <Form class="formboard" action="recup.php" method="post">
    <label for="titre">Titre</label>
    <input type="text" id="titre" name="titre"></input>
    <label for="texte">Message</label>
    <input type="text" id="texte" name="texte"></input>
    <div>
      <input type="submit" name="submit"></input>
  </Form>
</div>
</div>

<?php
require("./Views/footer.php");
?>