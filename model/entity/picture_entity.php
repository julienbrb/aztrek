<?php

function getAllPicturesByProject(int $id){
    /* @var $connection PDO */
    global $connection;    
    
    $query = "SELECT *
                FROM project_picture
                WHERE project_id = :id;";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
            
    return $stmt->fetchAll();
}