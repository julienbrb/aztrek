<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

//Vérifier si le paramètre id est présent dans l'URL.
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
$list_sejours = getAllSejoursByPays($id);

getHeader($pays["title"]);
?>

<section class="container actions"> 
    <?php foreach ($list_sejours as $sejour) : ?>
        <?php include 'include/sejour_inc.php'; ?>
    <?php endforeach; ?>
</section>

<?php
getFooter();
