<h1>Articles Admin</h1>

<?php


// Affichage des articles pour les utilisateurs connectés avec les droits admin

if (verifierAdmin()) {
    if ($pdo = pdo()) {
        $champ = $_GET['champ'] ?? "designation";
        $orderby = $_GET['orderby'] ?? "asc";

        $requeteArticles = "SELECT * FROM articles ";

        $tableauResultats = "<table>";
        $tableauResultats .= "<thead>";
        $tableauResultats .= "<tr>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "ID Article";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Titre";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Contenu";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Date Creation";
        $tableauResultats .= "</th>";
        $tableauResultats .= "</tr>";
        $tableauResultats .= "</thead>";
        $tableauResultats .= "<tbody>";

        $resultatRequeteArticles = $pdo->query($requeteArticles)->fetchAll();

        foreach ($resultatRequeteArticles as $row) {
            $tableauResultats .= "<tr>";
            $tableauResultats .= "<td>#" . $row['idarticles'] . "</td>";
            $tableauResultats .= "<td>" . $row['title'] . "</td>";
            $tableauResultats .= "<td>" . $row['content'] . "</td>";
            $tableauResultats .= "<td>" . $row['created_at'] . "</td>";

            // $tableauResultats .= "<td><a href=\"index.php?page=articleDetailAdmin&amp;articleId=" . $row['idarticles'] . "\"></a></td>";
            $tableauResultats .= "<td>&Eacute;diter</td>";
            $tableauResultats .= "<td>Supprimer</td>";
            $tableauResultats .= "</tr>";
        }

        $tableauResultats .= "</tbody>";
        $tableauResultats .= "</table>";

        echo $tableauResultats;
    } else {
        echo "<p>Erreur PDO</p>";
    }
} else {
    $codeJs = "<p>Vous allez être redirigé dans 5 secondes.<br />Si la redirection n'est pas automatique, <a href=\"http://localhost:8888/evalPHP\">cliquez ici</a></p>";
    $codeJs .= "
    <script>
        setTimeout(function() {
            window.location.replace('http://localhost:8888/evalPHP/')
        }, 5000);
    </script>
    ";
    echo $codeJs;
}
