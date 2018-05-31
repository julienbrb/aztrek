<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

//Vérifier si le paramètre title est présent dans l'URL.
if (!isset($_GET["id"]) ||!is_numeric($_GET["id"])) {
header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getOneSejour($id);
$list_users = getAllUsersBySejour($id);
$list_pictures = getAllPicturesBySejour($id);

getHeader($sejour["title"]);
?>

<section class="container">  
    
    <h2><?php echo $sejour["title"]; ?></h2> 
    
    <h2> Date de départ : <?php echo $sejour["date_depart"]; ?></h2> 
    
    <h2>Durée du séjour : <?php echo $sejour["duree"]; ?> jours</h2>

    <img src="uploads/<?php echo $sejour["picture"]; ?>">
    
    <h2>Description : </h2>
    <p><?php echo $sejour["description"]; ?></p>
    
    <h2>Voyageurs participants au séjour : </h2>
    <?php foreach ($list_users as $user) : ?>
        <article>
            <h3> <?php echo $user["fullname"]; ?> </h3>
            <img src="uploads/<?php echo $user["picture"]; ?>">
        </article>
    <?php endforeach; ?>
     
    <?php foreach ($list_pictures as $picture): ?>
    <img src="uploads/<?php echo $picture["filename"]; ?>">
    <?php endforeach; ?>
    
</section>

<?php getFooter(); ?>