<?php
// Appel et exécution du fichier fonctions
include 'fonctions.php';
// Connection à la Base De Données
$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');
// Appel de la fonction qui permettra de remplir les champs de films en fonction de l'id dansl'URL
$film = getFilm((int) $_GET['id'], $pdo);
// Propriétés dynamiques pour le template header
$fichier_css = "film";
$title = "Read";
// Appel et exécution du template header
include "./templates/header.php";
?>
<a href='./index.php' id="bouton">Retour Page Accueil</a>
<!-- Chaque détail du film est rempli dynamiquement par l'appel de la fonction getFilm et des échos php -->
<img id="affiche" src="<?= $film['affiche'] ?>" />
<div class="bloctexte">
    <h1><?= $film['nom'] ?></h1>
    <p><?= $film['annee'] ?></p>
    <p>Réalisateur : <?= $film['réal'] ?></p>
    <p>Cast principal : <?= $film['actnom'] ?></p>
    <p id="categ"><?= $film['categ'] ?></p>
    <p><?= $film['pitch'] ?></p>
</div>
<!-- Appel et exécution du template footer -->
<?php
include "./templates/footer.php";
?>