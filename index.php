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
            <a href="./create.php" class="btnNav">Ajouter</a>
            <a href="./delete.php" class="btnNav">Supprimer</a>
            <a href="./update.php" class="btnNav">Modifier</a>
        </div>
    </nav>
    <?php foreach ($films as $film): ?>
    <main>
        <section>
            <p><?=$film['nom']?></p>
            <p><?=$film['extrait']?></p>
            <p><?=$film['annee']?></p>
        </section>
    </main>
    <?php endforeach; ?>
    <footer>
        <img id="planet1" src="./Ressources/Images/planet.png" alt="icône planète terre"/>
        <p id="foot">Projet réalisé par Emmanuel Walther<br/>Étudiant DWWM Alençon<br/>Février 2024 / Tous droits réservés ©</p>
        <img id="planet2" src="./Ressources/Images/terre.png" alt="une autre icône de la planète"/>
    </footer>
</body>
</html>