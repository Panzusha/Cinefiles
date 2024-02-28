<?php
// Appel et exécution du fichier fonctions
require_once __DIR__.'/fonctions.php';
// Connection à la Base De Données
$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');
// Utilisation de la fonction qui effacera un film lors du clic sur le bouton Supprimer
// Si la superglobale $_POST n'est pas vide
if (! empty($_POST)) {
    deleteFilm((int) $_POST['id'], $pdo);
}

$films = getFilms($pdo);
// Propriétés dynamiques pour le template header
$title = "Delete";
$fichier_css = "form";
// Appel et exécution du template header
include "./templates/header.php";
?>

    <a href='./index.php' id="bouton">Retour Page Accueil</a>
    <h1>Bienvenue dans la salle des machines<br/>Ici on peut effacer des films de la BDD</h1>
    <br/>
    <!-- Formulaire rempli avec les infos "id" et "nom" obtenu par la fonction getFilm -->
    <form id="delete" action="" method="post">
        <label for="id">Film à supprimer</label>
        <select name="id" id="id">
            <!-- Boucle foreach itérant dans la table films pour récupérer une liste -->
            <?php foreach ($films as $film) : ?>
            <option value="<?= htmlspecialchars((string) $film['id']) ?>"><?= htmlspecialchars($film['nom']) ?></option>
            <?php endforeach ?>
        </select>
        <br/>
        <br/>
        <br/>
        <!-- Bouton Supprimer pour envoyer les données dans la superglobale $_POST -->
        <input type="submit" value="Supprimer">
    </form>
    <p>Message de la direction :<br/>
    Veuillez ne supprimer que les films "test" que vous ajouterez d'abord à la BDD<br/>
    Et donc svp ne pas toucher aux valeurs 1 à 10<br/>
    De "I saw the devil" à "Dobermann"<br/>
    Merci pour votre attention :-)</p>
<!-- Appel et exécution du template footer -->
<?php
    include "./templates/footer.php";
?>
