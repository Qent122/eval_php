<h1>Utilisateurs</h1>

<?php

if (verifierAdmin()) {
    if ($pdo = pdo()) {

        $requeteArticles = "SELECT * FROM users ";


        $tableauResultats = "<table>";
        $tableauResultats .= "<thead>";
        $tableauResultats .= "<tr>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "ID Users";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Nom";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Prenom";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Email";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Pseudo";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Role";
        $tableauResultats .= "</th>";
        $tableauResultats .= "<th>";
        $tableauResultats .= "Date creation";
        $tableauResultats .= "</th>";
        $tableauResultats .= "</tr>";
        $tableauResultats .= "</thead>";
        $tableauResultats .= "<tbody>";

        $resultatRequeteArticles = $pdo->query($requeteArticles)->fetchAll();


        foreach ($resultatRequeteArticles as $row) {
            $tableauResultats .= "<tr>";
            $tableauResultats .= "<td>#" . $row['iduser'] . "</td>";
            $tableauResultats .= "<td>" . $row['nom'] . "</td>";
            $tableauResultats .= "<td>" . $row['prenom'] . "</td>";
            $tableauResultats .= "<td>" . $row['email'] . "</td>";
            $tableauResultats .= "<td>" . $row['pseudo'] . "</td>";
            $tableauResultats .= "<td>" . $row['role'] . "</td>";
            $tableauResultats .= "<td>" . $row['create_time'] . "</td>";
            $tableauResultats .= "<td>&Eacute;diter</td>";
            $tableauResultats .= "<td>Supprimer</td>";
            $tableauResultats .= "</tr>";
        }

        $tableauResultats .= "</tbody>";
        $tableauResultats .= "</table>";

        echo $tableauResultats;

    }else {
        $codeJs = "<p>Vous allez être redirigé dans 5 secondes.<br />Si la redirection n'est pas automatique, <a href=\"http://localhost:8888/evalPHP\">cliquez ici</a></p>";
        $codeJs .= "
        <script>
            setTimeout(function() {
                window.location.replace('http://localhost:8888/evalPHP/')
            }, 5000);
        </script>
        ";
        echo $codeJs;
    }}