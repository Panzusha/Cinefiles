<!-- Template des balises HTML standards qui seront appelées en haut des pages adéquates par un include php -->
<!-- Type du document -->
<!DOCTYPE html>
<!-- Langue du site -->
<html lang="fr">
<head>
    <!-- Détermine la façon dont le texte est transmis et stocké -->
    <meta charset="UTF-8"> 
    <!-- Paramètres visuels -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page qui apparaitra sur l'onglet du navigateur -->
    <!-- Incluant un lien dynamique php qui auta une valeur différente selon les pages -->
    <title><?= $title ?></title>
    <!-- Lien page CSS pour la mise en forme -->
    <!-- Même mécanisme dynamique php que pour le titre  -->
    <link rel="stylesheet" href="./CSS/<?= $fichier_css ?>.css">
</head>
<body>