<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

//Vérifier si le paramètre title est présent dans l'URL.
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

//$id = $_GET["id"];
$list_sejours = getAllSejours($id);
//$list_members = getAllMembersBySejour($id);
//$list_pictures = getAllPicturesBySejours($id);

getHeader($pays["title"]);
?>

        <?php foreach ($list_sejours as $sejour) : ?>
            <?php include 'include/pays_inc.php'; ?>
        <?php endforeach; ?>

<?php getFooter();