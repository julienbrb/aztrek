<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

//Vérifier si le paramètre id est présent dans l'URL.
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getOneSejour($id);

getHeader($sejour["title"]);
?>



<?php getFooter();