<?php

function inscrireUtilisateur(string $nom, string $prenom, string $email, string $mdp,): bool
{
    $mdp = password_hash("$mdp", PASSWORD_DEFAULT);;

    if ($pdo = pdo()) {
        $requeteInscription = "INSERT INTO users
        ( email, mdp, nom, prenom )
        VALUES ( :email, :mdp, :nom, :prenom )";
        $query = $pdo->prepare($requeteInscription);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        // $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->execute();


        return true;
    } else {
        return false;
    }
}
