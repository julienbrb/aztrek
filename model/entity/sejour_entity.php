<?php

function getAllSejours(int $limit = 999) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "SELECT
                sejour.*,
                pays.title AS pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            LIMIT :limit;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneSejour(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                sejour.*,
                DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart
            FROM sejour
            LEFT JOIN depart ON depart.sejour_id = sejour.id
            WHERE sejour.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function getAllSejoursByPays(int $id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "SELECT
                sejour.*,
                MIN(depart.price) AS price,
                MIN(depart.date_depart) AS date_depart,
                AVG(notation.grade) AS grade,
                FLOOR(AVG(depart.place_total)) AS nb_places
            FROM sejour
            LEFT JOIN depart ON depart.sejour_id = sejour.id
            LEFT JOIN notation ON notation.sejour_id = sejour.id
            WHERE sejour.pays_id = :id
            AND (depart.date_depart > NOW() OR depart.date_depart IS NULL)
            GROUP BY sejour.id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertSejour(string $title, int $pays, string $picture, string $description) {
        /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO sejour (title, picture, pays_id, description)
                VALUES (:title, :picture, :pays, :description);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":pays", $pays);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
}

function updateSejour(string $title, int $pays, string $picture, string $description) {
        /* @var $connection PDO */
    global $connection;

    $query = "UPDATE sejour
                SET title = :title,
                pays = :pays,
                picture = :picture,
                description = :description,
                price = :price,
                date_depart = :date_depart,
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":pays", $pays);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->execute();
}