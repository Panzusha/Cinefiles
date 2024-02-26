<?php

require_once __DIR__.'/fonctions.php';
$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');

if (! empty($_POST)) {
    deleteFilm((int) $_POST['id'], $pdo);
}

$films = getFilms($pdo);



$title = "Delete";
$fichier_css = "form";
include "./templates/header.php";
?>

    <a href='./index.php' id="bouton">Retour Page Accueil</a>
    <h1>Bienvenue dans la salle des machines<br/>Ici on peut effacer des films de la BDD</h1>
    <br/>
    <form id="delete" action="" method="post">
        <label for="id">Film à supprimer</label>
        <select name="id" id="id">
            <?php foreach ($films as $film) : ?>
            <option value="<?= htmlspecialchars((string) $film['id']) ?>"><?= htmlspecialchars($film['nom']) ?></option>
            <?php endforeach ?>
        </select>
        <br/>
        <br/>
        <br/>
        <input type="submit" value="Supprimer">
    </form>
    <p>Message de la direction :<br/>
    Veuillez ne supprimer que les films "test" que vous ajouterez d'abord à la BDD<br/>
    Et donc svp ne pas toucher aux valeurs 1 à 10<br/>
    De "I saw the devil" à "Dobermann"<br/>
    Merci pour votre attention :-)</p>
<?php
    include "./templates/footer.php";
?>
