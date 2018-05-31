<?php

function getAllSejours(int $limit = 999) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "SELECT
                sejour.id,
                sejour.title,
                sejour.picture,
                sejour.duree,
                DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart,
                AVG(notation.grade) AS grade
            FROM sejour
            LEFT JOIN depart ON depart.sejour_id = sejour.id
            LEFT JOIN reservation ON reservation.depart_id = depart.id
            LEFT JOIN notation on notation.sejour_id = sejour.id
            LIMIT 3;";

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

function insertSejour(string $title, string $picture, string $description, float $price, string $date_start, int $category_id) {
        /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO sejour (title, picture, description, price, date_start, date_end, category_id)
                VALUES (:title, :picture, :description, :price, :date_start, :date_end, :category_id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":date_start", $date_start);
    $stmt->bindParam(":date_end", $date_end);
    $stmt->bindParam(":category_id", $category_id);
    $stmt->execute();
}
