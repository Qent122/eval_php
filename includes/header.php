<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvalPHP</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <?php
        if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
            echo "<h2>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "</h2>";
        }else{
            echo "<h2>Bonjour Visiteur</h2>";
        }
        ?>
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=articles">Articles</a></li>
                <li><a href="index.php?page=inscription">Inscription</a></li>
                <?php
                if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                    echo '<li><a href="index.php?page=logout">Logout</a></li>';
                } else {
                    echo '<li><a href="index.php?page=login">Login</a></li>';                    
                }
                ?>
            </ul>
        </nav>
    </header>