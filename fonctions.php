<?php

function getPDO($dsn, $username, $mdp) {

    $pdo = new PDO($dsn, $username, $mdp);
    return $pdo;
}

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

function getFilm(int $id, PDO $pdo): array|false {
    $query = $pdo->prepare('SELECT a.nom AS actnom, f.id, f.nom, f.annee, f.extrait, f.pitch, f.affiche, r.nom AS réal, c.nom  AS categ
        FROM films f
        JOIN realisateurs r ON f.real_id = r.id
        JOIN categories c ON f.cat_id = c.id
        LEFT JOIN jouentDans j on j.film_id = f.id
        LEFT JOIN acteurs a ON a.id = j.acteur_id
        WHERE f.id = :id
    ');
    $query->execute([
        'id' => $id
    ]);
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getRealisateurs(PDO $pdo): array{
    $query = $pdo->prepare('SELECT * FROM realisateurs');
    $query->execute();
    $realisateurs = $query->fetchAll(PDO::FETCH_ASSOC);
    return $realisateurs;
}
function getCategories(PDO $pdo): array{
    $query = $pdo->prepare('SELECT * FROM categories');
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
}

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

function deleteFilm(int $id, PDO $pdo): bool {

    $query = $pdo->prepare('DELETE FROM films WHERE id = :id');
    return $query->execute([
        'id' => $id,
    ]);
}

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

