📘 ABS – Matériaux de Construction :

    Application web de gestion et d’affichage de produits de matériaux de construction

📋 Description du projet

      Ce projet est une application web permettant de consulter des produits de matériaux de construction, de les ajouter à un panier et de simuler un achat.
Il est développé en PHP, utilise une base de données MySQL, ainsi qu’un ensemble de fichiers CSS/JS pour l’interface utilisateur.

🚀 Fonctionnalités principales

📦 Affichage des produits

🛒 Gestion d’un panier

🔍 Recherche de produits

📄 Pages dynamiques en PHP

🗂 Structure MVC simplifiée

💾 Base de données MySQL

🎨 Interface utilisateur responsive

🧰 Technologies utilisées :

-PHP 7+

-MySQL 

-HTML5 / CSS3

-Apache / XAMPP / WAMP / Laragon

-FontAwesome (icônes)

🛠 Guide d’installation
1️⃣ Prérequis

Avant installation, assure-toi d’avoir :

Un serveur Apache (XAMPP, WAMP, Laragon ou Linux)

PHP 7.4 ou supérieur

MySQL / MariaDB

phpMyAdmin (optionnel mais recommandé)

Git (optionnel)

2️⃣ Installation du projet
🔹 Cloner le dépôt
git clone https://github.com/Rayanemksm1/abs.git

Ou télécharger le ZIP depuis GitHub et l’extraire dans ton dossier web :

    Windows (XAMPP) : C:/xampp/htdocs/abs/

    Linux : /var/www/html/abs/

3️⃣ Configuration de la Base de données
🔹 1. Créer une base de données

Dans phpMyAdmin ou en terminal :

CREATE DATABASE abs_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

🔹 2. Importer les fichiers SQL

Le dépôt contient des fichiers .sql à importer (ex. constructionstore.sql ou products.sql).

Exemple terminal :

mysql -u root -p abs_db < constructionstore.sql

Ou via phpMyAdmin → Importer → Sélectionner le fichier .sql.
4️⃣ Configuration de la connexion MySQL

Ouvre le fichier de configuration (ex. config.php, db.php, ou similaire) et adapte :

$servername = "localhost";
$username   = "root";     // ou votre utilisateur MySQL
$password   = "";         // ou votre mot de passe MySQL
$dbname     = "abs_db";

Assure-toi que les paramètres correspondent à ta configuration locale.
5️⃣ Lancer l'application

Dans ton navigateur, ouvre :

http://localhost/abs/

Tu devrais voir la page d’accueil du projet.
🧪 Tests & Vérifications

Vérifie que :

    Les produits s'affichent correctement

    Le panier fonctionne

    Aucun message d'erreur PHP n’apparaît

    Les images et CSS sont bien chargés

Si quelque chose ne fonctionne pas, vérifie :

    Les chemins des fichiers

    Les logs PHP

    La configuration MySQL

    Les permissions des dossiers
