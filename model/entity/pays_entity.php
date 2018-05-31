<?php

function getAllPays(int $limit = 999) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "SELECT *
            FROM pays
            LIMIT :limit;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOnePays(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                pays.*
            FROM pays
            WHERE pays.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertPays(string $title, string $picture, string $description) {
        /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO pays (title, picture, description)
                VALUES (:title, :picture, :description);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
}
