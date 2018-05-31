<?php
require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];

$title = $_POST["title"];

$date_depart = $_POST["date_depart"];

$sejour = getOneSejour("sejour", $id);

$picture = !is_null($sejour["picture"]) ? $sejour["picture"] : ""; // Image présente avant update
//
// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}
// Insertion des données en BDD
updateSejour($id, $title, $date_depart, $picture);

// Redirection vers la liste
header("Location: index.php");