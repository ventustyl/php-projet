<?php

require('config.php');
   
            
            //On essaie de se connecter
            try{
              $conn = new PDO("mysql:host={$dbConfig['servername']};dbname={$dbConfig['dbname']};charset=utf8mb4", $dbConfig['username'], $dbConfig['password']);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo 'Connexion réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        ?>