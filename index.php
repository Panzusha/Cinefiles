<?php
// Appel et exécution du fichier fonctions
include 'fonctions.php';
// Connection à la Base De Données
$pdo = getPDO('mysql:host=db;dbname=cinefiles', 'root', '');
// Appel de la fonction qui permettra de remplir les champs de films
$films = getFilms($pdo);
// Propriétés dynamiques pour le template header
$title = "Ciné Files";
$fichier_css = "index";
// Appel et exécution du template header
include "./templates/header.php";
?>
    <!-- Block header: 2 icônes + texte -->
    <header>
        <img id="salle" src="./ressources/images/cinema.png" alt="icône salle de ciné"/>
        <h1>CINÉ FILES<br/>Le Blog Cinéma</h1>
        <img id="camera" src="./ressources/images/camera.png" alt="icône caméra"/>
    </header>
    <!-- Block navbar: 2 boutons / liens -->
    <nav>
        <div id="barreNav">
            <a href="./create.php" class="glow-on-hover">Ajouter un film</a>
            <a href="./delete.php" class="glow-on-hover">Supprimer un film</a>
        </div>
    </nav>
    <!-- Boucle foreach qui itère dans la table BDD des films pour remplir dynamiquement les champs html -->
    <!-- Il y aura autant de bloc films que de film dans la BDD -->
    <?php foreach ($films as $film): ?>
    <main>
        <!-- Chaque entrée d'un film mélange html et php pour se remplir automatiquement -->
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
    <!-- Fermeture de la boucle foreach -->
    <?php endforeach; ?>
    <!-- Appel et exécution du template footer -->
<?php
    include "./templates/footer.php";
?>