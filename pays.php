<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

//Vérifier si le paramètre id est présent dans l'URL.
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

//Déclaration des variables
$list_pays = getAllEntity("pays");

getHeader("Pays");
?>

<section id="voyages">
    <div class="accordion">
        <ul>
            <?php foreach ($list_pays as $pays) : ?>
            <li style="background-image: url('uploads/<?php echo $pays["picture"]; ?>')">
                <div>
                    <article>
                        <a href="#">
                            <h2><?php echo $pays["title"]; ?></h2>
                            <p><?php echo $pays["description"]; ?></p>
                        </a>
                        <a class="plus-voyages" href="onepays.php?id=<?php echo $pays["id"]; ?>"><img src="./images/plus-white.svg" alt="Plus d'infos"></a>
                    </article>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php getFooter();