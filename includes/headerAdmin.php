<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eval PHP - Administration</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <?php
        if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
            echo "<h2>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "</h2>";
        }
        ?>
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=categoriesAdmin">Catégories</a></li>
                <li><a href="index.php?page=articlesAdmin">Articles</a></li>
                <li><a href="index.php?page=commandesAdmin">Commandes</a></li>
                <li><a href="index.php?page=clientsAdmin">Clients</a></li>
            </ul>
        </nav>
    </header>