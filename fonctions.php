<?php

// Les termes en majuscules (SELECT FROM JOIN etc) sont du langage SQL
// La plupart des fonctions mélangent PHP et SQL

// Fonction pour la connexion à la BDD
function getPDO($dsn, $username, $mdp) {

    $pdo = new PDO($dsn, $username, $mdp);
    return $pdo;
}
// Fonction pour l'affichage des films dans la boucle foreach de la page index.php
// SELECT vas chercher les données en paramètres de requête (query)
// On utilise des jointures pour obtenir les infos des tables realisateurs et categories
// Pour avoir un affichage propre des films dans l'ordre, on précise le order by asc (ordre ascendant)
// On récupère un tableau de données par le fetchAll qui sera utilisé par le foreach de la page index
function getFilms($pdo) {
    $query = $pdo->query('SELECT f.id, f.nom, f.annee, f.extrait, f.affiche, r.nom AS réal, c.nom  AS categ
    FROM films f
    JOIN realisateurs r ON f.real_id = r.id
    JOIN categories c ON f.cat_id = c.id
    ORDER BY f.id ASC
    ');
    $films = $query->fetchAll(PDO::FETCH_ASSOC);
    return $films;
}
// Fonction similaire à la précédente avec cette fois préparation puis exécution de la requête
// la table pivot (ou table intermédiaire) jouentDans est cette fois ci utilisée
// elle fait le lien entre les tables films et acteurs
// execute prend un tableau associatif car l'id sera sollicité pour savoir quel film sera chargé dans la page film.php
function getFilm(int $id, PDO $pdo): array|false {
    $query = $pdo->prepare('SELECT a.nom AS actnom, f.id, f.nom, f.annee, f.extrait, f.pitch, f.affiche, r.nom AS réal, c.nom  AS categ
        FROM films f
        JOIN realisateurs r ON f.real_id = r.id
        JOIN categories c ON f.cat_id = c.id
        LEFT JOIN jouentDans j ON j.film_id = f.id
        LEFT JOIN acteurs a ON a.id = j.acteur_id
        WHERE f.id = :id
    ');
    $query->execute([
        'id' => $id
    ]);
    return $query->fetch(PDO::FETCH_ASSOC);
}
// Fonction utilisée dans la page update.php afin d'afficher une liste des réalisateurs
// retourne un tableau (: array) utilisé par fetchAll
function getRealisateurs(PDO $pdo): array{
    $query = $pdo->prepare('SELECT * FROM realisateurs');
    $query->execute();
    $realisateurs = $query->fetchAll(PDO::FETCH_ASSOC);
    return $realisateurs;
}
// Idem que la fonction ci-dessus mais avec les catégories de films
// retourne un tableau (: array) utilisé par fetchAll
function getCategories(PDO $pdo): array{
    $query = $pdo->prepare('SELECT * FROM categories');
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
}

// Fonction pour l'ajout de nouveaux films (bouton ajouter, page create)
// INSERTion SQL dans la table films, tableau associatif dans execute pour faire matcher les valeurs de paramètres
function createFilm(PDO $pdo, string $nom, string $extrait, string $pitch, string $affiche, int $annee, int $real_id, int $cat_id):bool {

        $query = $pdo->prepare('INSERT INTO films (nom, extrait, pitch, affiche, annee, real_id, cat_id) VALUES (:nom, :extrait, :pitch, :affiche, :annee, :real_id, :cat_id)');

        return $query->execute([
            'nom' => $nom,
            'extrait' => $extrait,
            'pitch' => $pitch,
            'affiche' => $affiche,
            'annee' => $annee,
            'real_id' => $real_id,
            'cat_id' => $cat_id,
        ]);
}
// Fonction pour la suppression de films dans la BDD (bouton supprimer)
// On utilise la commande SQL DELETE pour effacer dans la BDD une entrée de la table films
// On utilise la commande SQL WHERE et un tableau associatif execute pour que l'id serve de point de référence
// Pour cibler le film voulu
function deleteFilm(int $id, PDO $pdo): bool {

    $query = $pdo->prepare('DELETE FROM films WHERE id = :id');
    return $query->execute([
        'id' => $id,
    ]);
}

// Fonction pour modifier une ou plusieurs caractéristiques d'un film
// On utilise la commande SQL UPDATE pour modifier dans la BDD une ou plusieurs entrées de la table films
// Utilisation d'un tableau associatif dans execute pour faire matcher les valeurs de paramètres
function updateFilm(PDO $pdo, int $id, string $nom, string $extrait, string $pitch, string $affiche,
    int $annee) {
    
    $query = $pdo->prepare('UPDATE films SET nom = :nom, extrait = :extrait, pitch = :pitch,
        affiche = :affiche, annee = :annee WHERE id = :id');

    return $query->execute([
        'id' => $id,
        'nom' => $nom,
        'extrait' => $extrait,
        'pitch' => $pitch,
        'affiche' => $affiche,
        'annee' => $annee,
    ]);
}

