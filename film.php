<?php

include 'fonctions.php';

$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');

$film = getFilm((int) $_GET['id'], $pdo);

$fichier_css = "film";
$title = "Read";
include "./templates/header.php";
?>
<a href='./index.php' id="bouton">Retour Page Accueil</a>
<img id="affiche" src="<?= $film['affiche'] ?>" />
<div class="bloctexte">
    <h1><?= $film['nom'] ?></h1>
    <p><?= $film['annee'] ?></p>
    <p>Réalisateur : <?= $film['réal'] ?></p>
    <p>Cast principal : <?= $film['actnom'] ?></p>
    <p id="categ"><?= $film['categ'] ?></p>
    <p><?= $film['pitch'] ?></p>
</div>
<?php
include "./templates/footer.php";
?>