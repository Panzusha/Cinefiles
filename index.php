<?php

include 'fonctions.php';

$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');

$films = getFilms($pdo);

$title = "Ciné Files";
$fichier_css = "index";

include "./templates/header.php";
?>
    <header>
        <img id="salle" src="./ressources/images/cinema.png" alt="icône salle de ciné"/>
        <h1>CINÉ FILES<br/>Le Blog Cinéma</h1>
        <img id="camera" src="./ressources/images/camera.png" alt="icône caméra"/>
    </header>
    <nav>
        <div id="barreNav">
            <a href="./create.php" class="glow-on-hover">Ajouter un film</a>
            <a href="./delete.php" class="glow-on-hover">Supprimer un film</a>
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
<?php
    include "./templates/footer.php";
?>