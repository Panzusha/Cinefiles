<?php

if (! empty($_POST)) {
    require_once __DIR__.'/fonctions.php';

    $pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');
    
    createFilm($pdo, $_POST['nom'], $_POST['extrait'],$_POST['pitch'], $_POST['affiche'],
        $_POST['annee'], $_POST['real_id'], $_POST['cat_id'] );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="./CSS/form.css">
</head>
<body>
    <a href='./index.php'><button id="bouton">Retour Page Accueil</button></a>
    <h1>Bienvenue dans la salle des machines<br/>Ici on peut créer de nouveaux film dans la BDD</h1>
    <br/>
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
            <textarea name="affiche" id="affiche"></textarea>
        </div>
        <div>
            <label for="annee">Annee</label>
            <input type="number" name="annee" id="annee">
        </div>
        <div>
            <label for="real_id">Réalisateur</label>
            <input type="number" name="real_id" id="real_id">
        </div>
        <div>
            <label for="cat_id">Catégorie</label>
            <input type="number" name="cat_id" id="cat_id">
        </div>
        <br/>
        <input type="submit" value="Publier">
    </form>
    <p>Info : Dans le champ Réalisateur il faut rentrer un chiffre de 1 à 12 sinon il y aura un message d'erreur.<br/>
        Voir dans la BDD pour les correspondances chiffre<=>nom<br/>
        <br/>
        Si vous souhaitez ajouter un film réalisé par quelqu'un ne figurant pas dans la BDD<br/> vous pouvez ajouter
        ce réalisateur dans la table du même nom et utiliser l'ID auto incrémenté qui figurera après l'ajout<br/>
        <br/>
        Pour faire un ajout, cliquez sur la table désirée et ensuite onglet "Insérer" dans la partie haute de l'interface<br/>
        Même fonctionnement pour les catégories de films <br/>
        <br/>
        Les modalités d'accès à la BDD sont détaillées dans le README.md du repo github<br/>
        Pour le champ Affiche il est recommandé de mettre le lien URL vers une image de votre choix<br/>
        <br/>
        Les grands champs de texte sont étirables via l'icône en bas à droite

</body>
</html>