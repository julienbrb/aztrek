<?php
require_once '../../../model/database.php';
// Récupérer les données du formulaire
$title = $_POST["title"];
$description = $_POST["description"];
$picture = "";
// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}
// Insertion des données en BDD
insertPays($title, $picture, $description);
// Redirection vers la liste
header("Location: index.php");