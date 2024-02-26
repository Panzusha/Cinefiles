<?php

include 'fonctions.php';

$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');

$films = getFilms($pdo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciné Files</title>
    <link rel="stylesheet" href="./CSS/index.css">
</head>
<body>
    <header>
        <img id="salle" src="./Ressources/Images/cinema.png" alt="icône salle de ciné"/>
        <h1>CINÉ FILES<br/>Le Blog Cinéma</h1>
        <img id="camera" src="./Ressources/Images/camera.png" alt="icône caméra"/>
    </header>
    <nav>
        <div id="barreNav">
            <a href="./create.php" class="glow-on-hover">Ajouter</a>
            <a href="./delete.php" class="glow-on-hover">Supprimer</a>
        </div>
    </nav>
    <?php foreach ($films as $film): ?>
    <main>
        <img class="affiche" src="<?=$film['affiche']?>"/>
        <div class="bloctexte">
            <p id="nomFilm"><?=$film['nom']?></p>
            <p><?=$film['annee']?></p>
            <p><?=$film['réal']?></p>
            <p id="categFilm"><?=$film['categ']?></p>
            <p><?=$film['extrait']?></p>
            <div id="boutons">
                <a href="./film.php?id=<?=$film['id']?>" id="lien">Lire la critique</a>
                <a href="./update.php?id=<?=$film['id']?>" id="lien2">Modifier</a>
            </div>
        </div>
    </main>
    <?php endforeach; ?>
    <footer>
        <img id="planet1" src="./Ressources/Images/planet.png" alt="icône planète terre"/>
        <p id="foot">Projet réalisé par Emmanuel Walther<br/>Étudiant DWWM Alençon<br/>Février 2024 / Tous droits réservés ©</p>
        <img id="planet2" src="./Ressources/Images/terre.png" alt="une autre icône de la planète"/>
    </footer>
</body>
</html>