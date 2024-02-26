<?php

include 'fonctions.php';

$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');

$film = getFilm((int) $_GET['id'], $pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="./CSS/film.css">
</head>
<body>
    <a href='./index.php'><button id="bouton">Retour Page Accueil</button></a>
    <img id="affiche" src="<?=$film['affiche']?>"/>
    <div class="bloctexte">
        <h1><?=$film['nom']?></h1>
        <p><?=$film['annee']?></p>
        <p>Réalisateur : <?=$film['réal']?></p>
        <p>Cast principal : <?=$film['actnom']?></p>
        <p id="categ"><?=$film['categ']?></p>
        <p><?=$film['pitch']?></p>
    </div>
</body>
</html>