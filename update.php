<?php
// Appel et exécution du fichier fonctions
require_once __DIR__.'/fonctions.php';
// Connection à la Base De Données
$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');
// Utilisation de la fonction qui modifiera un film lors du clic sur le bouton Modifier
// Si la superglobale $_POST n'est pas vide
// Avec les valeurs attendues en paramètres
if (! empty($_POST)) {
    updateFilm($pdo, intval($_GET['id']), $_POST['nom'], $_POST['extrait'], $_POST['pitch'], $_POST['affiche'],
    $_POST['annee']);
}
// Appel de la fonction qui vas remplir dynamiquement les champs en fonction de l'id dans l'URL ( superglobale $_GET )
$film = getFilm(intval($_GET['id']), $pdo);
// Propriétés dynamiques pour le template header
$title = "Update";
$fichier_css = "form";
// Appel et exécution du template header
include "./templates/header.php";
?>
    <a href='./index.php' id="bouton">Retour Page Accueil</a>
    <h1>Bienvenue dans la salle des machines<br/>Ici on peut modifier des films dans la BDD</h1>
    <br/>
    <!-- Formulaire avec les champs des caractéristiques du film à modifier -->
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
    <p>Message de la direction :<br/>
    Veuillez remettre les valeurs initiales si vous modifiez un des 10 premiers films<br/>
    De "I saw the devil" à "Dobermann"<br/>
    Vous êtes libres concernant les films que vous ajouterez<br/>
    Merci pour votre attention :-)</p>
<!-- Appel et exécution du template footer -->
<?php
    include "./templates/footer.php";
?>