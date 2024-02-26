<?php

require_once __DIR__.'/fonctions.php';
$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');

if (! empty($_POST)) {
    updateFilm($pdo, intval($_GET['id']), $_POST['nom'], $_POST['extrait'], $_POST['pitch'], $_POST['affiche'],
    $_POST['annee']);
}

$film = getFilm(intval($_GET['id']), $pdo);

$title = "Update";
$fichier_css = "form";
include "./templates/header.php";
?>
    <a href='./index.php'><button id="bouton">Retour Page Accueil</button></a>
    <h1>Bienvenue dans la salle des machines<br/>Ici on peut modifier des films dans la BDD</h1>
    <br/>
    <form id="update" action="" method="post">
        <div>
            <label for="nom">Nom du film</label>
            <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($film['nom']) ?>">
        </div>
        <div>
            <label for="extrait">Extrait</label>
            <textarea name="extrait" id="extrait"><?= htmlspecialchars($film['extrait']) ?></textarea>
        </div>
        <div>
            <label for="pitch">Pitch</label>
            <textarea name="pitch" id="pitch"><?= htmlspecialchars($film['pitch']) ?></textarea>
        </div>
        <div>
            <label for="affiche">Affiche</label>
            <textarea name="affiche" id="affiche"><?= htmlspecialchars($film['affiche']) ?></textarea>
        </div>
        <div>
            <label for="annee">Annee</label>
            <input type="number" name="annee" id="annee" value="<?= htmlspecialchars($film['annee']) ?>">
        </div>
        <br/>
        <input type="submit" value="Modifier">
    </form>
<?php
    include "./templates/footer.php";
?>