
# Projet Connexion BDD
![Minion](https://github.com/ventustyl/php-projet/blob/main/minion.gif?raw=true)

Ce projet est une application web permettant de gérer des articles et des utilisateurs.

## Fonctionnalités

- Affichage d'articles
- Connexion et déconnexion des utilisateurs
- Ajout d'articles par les utilisateurs connectés
- Suppression d'articles par les utilisateurs connectés

## Installation

1. Cloner ce dépôt :

git clone https://github.com/ventustyl/php-projet.git
cd votre-projet` 

2.  Configuration de la base de données :
    
    -   Copiez le fichier `config-sample.php` en `config.php` dans le dossier `Views`.
    -   Modifiez les informations de connexion à la base de données dans `config.php`.

3.  Utilisez un serveur web (Apache, Nginx, etc.) pour servir le contenu de ce répertoire.
    

## Utilisation

1.  Accédez à l'URL de l'application dans votre navigateur.
2.  Explorez les différentes fonctionnalités :
    -   Consultez les articles sur la page d'accueil (`section.php`).
    -   Connectez-vous en utilisant le formulaire de connexion dans la barre latérale (`aside.php`).
    -   Ajoutez des articles en étant connecté sur la page du tableau de bord (`dashboard.php`).
    -   Supprimez des articles en cliquant sur le bouton "Supprimer" sur la page d'accueil.

## Technologies Utilisées

-   HTML, CSS
-   PHP avec PDO (pour la connexion à la base de données)
-   JavaScript (pour les interactions utilisateur)

## Auteur

Eric Venturino

## Licence

Ce projet est sous licence MIT 
