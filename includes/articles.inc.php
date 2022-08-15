<h1>Articles</h1>

<?php
if($pdo = pdo()){
    $requeteArticles = "SELECT * FROM articles ";

    $tableauResultats = "<div class=\"container\">";


        $resultatRequeteArticles = $pdo->query($requeteArticles)->fetchAll();

        foreach ($resultatRequeteArticles as $row) {
            $tableauResultats .= "<div class=\"card\">";
            $tableauResultats .= "<h2>" . $row['title'] . "</h2>";
            $tableauResultats .= "<p>" . $row['content'] . "</p>";
            $tableauResultats .= "<button>Voir plus</button>";
            $tableauResultats .= "</div>";
        }

        $tableauResultats .= "</div>";

        echo $tableauResultats;
}
