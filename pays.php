<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

//Déclaration des variables
$list_pays = getAllPays();

getHeader("Liste des pays");
?>

<section>
    <div class="accordion2">
        <ul>
            <?php foreach ($list_pays as $pays) : ?>
            <li style="background-image: url('uploads/<?php echo $pays["picture"]; ?>')">
                <div>
                    <article>
                        <a href="onepays.php?id=<?php echo $pays["id"]; ?>">
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