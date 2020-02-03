<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=php;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO livredor (nom, email, message) VALUES(?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['email'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: essaitemoignage.php');
?>