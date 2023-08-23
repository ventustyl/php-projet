<aside>
    <div class="module1">
        <?php
        if (!isset($_SESSION['email'])) {
        ?>
        <form action="./session.php" method="post">
            <label for="email">e-mail</label>
            <input type="email" placeholder="email" id="email" name="email">
            <br>
            <label for="mdp">mot de passe</label>
            <input type="password" name="mdp" id="mdp" placeholder="mot de passe">
            <div>
                <button type="submit" name="btn">Connexion</button>
            </div>
        </form>
        <?php
        } // Fin du if (isset($_SESSION['email']))
        ?>
    </div>
    <div class="minion">
        <img class="imgminion" src="./minion.gif" alt="Les minions">
    </div>
</aside>
</main>
