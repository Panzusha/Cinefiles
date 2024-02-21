<?php

function getPDO($dsn, $username, $mdp) {

    $pdo = new PDO($dsn, $username, $mdp);
    return $pdo;
}

function getFilms($pdo) {
    $query = $pdo->query('SELECT * FROM films', PDO::FETCH_ASSOC);
    $films = $query->fetchAll();
    return $films;
}