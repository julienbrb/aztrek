<?php

function getAllPicturesBySejour(int $id){
    /* @var $connection PDO */
    global $connection;    
    
    $query = "SELECT *
                FROM sejour_picture
                WHERE sejour_id = :id;";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
            
    return $stmt->fetchAll();
}