<?php
// Appel et exécution du fichier fonctions
require_once __DIR__.'/fonctions.php';
// Connection à la Base De Données
$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');
// Appel des fonctions qui serviront à remplir les 2 derniers champs du formulaire
$realisateurs = getRealisateurs($pdo);
$categories = getCategories($pdo);
// Si la superglobale $_POST n'est pas vide, appel de la fonction qui ajoute un film dans la BDD
if (!empty($_POST)) {
    
    createFilm($pdo, $_POST['nom'], $_POST['extrait'],$_POST['pitch'], $_POST['affiche'],
        $_POST['annee'], $_POST['real_id'], $_POST['cat_id'] );
}
// Propriétés dynamiques pour le template header
$title = "Create";
$fichier_css = "form";
// Appel et exécution du template header
include "./templates/header.php";

?>

    <a href='./index.php' id="bouton">Retour Page Accueil</a>
    <h1>Bienvenue dans la salle des machines<br/>Ici on peut créer de nouveaux film dans la BDD</h1>
    <br/>
    <!-- Formulaire correspondant aux colonnes de la table films dans la BDD, pour faire des ajouts -->
    <form id="create" action="" method="post">
        <div>
            <label for="nom">Nom du film</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="extrait">Extrait</label>
            <textarea name="extrait" id="extrait"></textarea>
        </div>
        <div>
            <label for="pitch">Pitch</label>
            <textarea name="pitch" id="pitch"></textarea>
        </div>
        <div>
            <label for="affiche">Affiche</label>
            <textarea name="affiche" id="affiche" placeholder="lien url image"></textarea>
        </div>
        <div>
            <label for="annee">Annee</label>
            <input type="number" name="annee" id="annee">
        </div>
        <div>
        <label for="real_id">Réalisateur</label>
        <select name="real_id" id="real_id">
            <?php
            // Boucle foreach itérant dans la table realisateurs de la BDD afin de présenter une liste d'options
            foreach ($realisateurs as $realisateur) {
                ?>
                <option value="<?= $realisateur['id'] ?>">
                    <?= $realisateur['nom'] ?>
                    </option>
                    <?php
            }
            ?>
        </select>
        </div>
        <div>
        <label for="cat_id">Catégorie</label>
        <select name="cat_id" id="cat_id">
            <?php
            // Boucle foreach itérant dans la table categories de la BDD afin de présenter une liste d'options
            foreach ($categories as $categorie) {
                ?>
                <option value="<?= $categorie['id'] ?>">
                    <?= $categorie['nom'] ?>
                    </option>
                    <?php
            }
            ?>
        </select>
        </div>
        <br/>
        <!-- Bouton pour envoyer les infos des champs dans la superglobale $_POST, utilisée dans la fonction en haut de page -->
        <input type="submit" value="Publier">
    </form>
    <p>Info : 
        Si vous souhaitez ajouter un film réalisé par quelqu'un ne figurant pas dans la BDD<br/> vous pouvez ajouter
        ce réalisateur dans la table du même nom<br/>
        <br/>
        Pour faire un ajout, cliquez sur la table désirée et ensuite onglet "Insérer" dans la partie haute de l'interface<br/>
        Même fonctionnement pour les catégories de films <br/>
        <br/>
        Les modalités d'accès à la BDD sont détaillées dans le README.md du repo github<br/>
        <br/>
        Les grands champs de texte sont étirables via l'icône en bas à droite
    </p>
<!-- Appel et exécution du template footer -->
<?php
    include "./templates/footer.php";
?>