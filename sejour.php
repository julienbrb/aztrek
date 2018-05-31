<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

//Vérifier si le paramètre title est présent dans l'URL.
if (!isset($_GET["id"]) ||!is_numeric($_GET["id"])) {
header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getOneSejour($id);
$list_sejour = getAllSejours();
$list_users = getAllUsersBySejour();
$list_pictures = getAllPicturesBySejour();

getHeader($project["title"]);
?>

<section class="container">  
    
    <h1> <?php echo $sejour["title"]; ?> </h1>
    <p> Date de départ : </p> <?php echo $sejour["date_depart_format"]; ?>

    <img src="uploads/<?php echo $sejour["picture"]; ?>">
    <p><?php echo $sejour["description"]; ?></p>
    
    <h2>Membres ayant participés au projet</h2>
    <?php foreach ($list_members as $member) : ?>
        <article>
            <h3> <?php echo $member["fullname"]; ?> </h3>
            <img src="uploads/<?php echo $member["picture"]; ?>">
        </article>
    <?php endforeach; ?>
     
    <?php foreach ($list_pictures as $picture): ?>
    <img src="uploads/<?php echo $picture["filename"]; ?>">
    <?php endforeach; ?>
    
</section>

<?php getFooter(); ?>