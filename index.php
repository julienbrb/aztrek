<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

//Déclaration des variables
$list_projects = getAllProjects();

getHeader("Accueil");
?>

<?php foreach ($list_projects as $project) : ?>
    <?php include 'include/sejour_inc.php'; ?>
<?php endforeach; ?>

<!-- SECTION FESTIVAL -->
<section id="festival-aztrek">
    <h2>Le festival AZTREK</h2>
    <article id="festival-inner" class="container">
        <p id="concert" class="festival">AZTREK organise chaque année un festival sur le lieu d’une de ces destinations. Ce festival est ouvert à tout le monde. Aussi bien aux voyageurs qu’aux locaux.</p>
        <p id="communaute" class="festival">
            Notre communauté est notre richesse. Nous voulons partager notre bonheur avec le monde. Ce festival est une occasion rêver pour rencontrer anciens comme futurs voyageurs.</p>
        <p id="infos-festival" class="festival">
            Retrouvez plus d’informations sur le lieu, la date, la programmation ainsi que la billeterie du prochain festival dans le menu FESTIVAL de notre site.</p>

        <h3>Galerie</h3>
        <div id="slider" class="owl-carousel">
            <div class="item container">
                <div class="item-img">
                    <img src="./images/Tomorrowland2018_C3_J9cVWmh.jpg" alt="Festival" />
                </div>
            </div>
            <div class="item container">
                <div class="item-img">
                    <img src="./images/tomorrowland-2016-indian-girl.jpg" alt="Festival" />
                </div>
            </div>
        </div>
    </article>
</section>

<!-- SECTION ABOUT -->
<section id="about">
    <img class="logo-quadri" src="./images/logo_aztrek_QUADRI.svg" alt="aztrek">
    <article id="about-inner" class="container">
        <div id="voyage" class="about-us">
            <h2>Qu'est-ce qui rend nos voyages différents?</h2>
            <p>Nous croyons que les vacances devraient être plus qu'une chambre d'hôtel, un vol et une voiture de location. Nous croyons également qu'un défi peut vous aider à grandir et qu'un voyage peut éveiller l'âme. Nous créons des voyages qui valent
                la peine d’être vécu - pour le voyageur, pour l'hôte et pour le monde.</p>
        </div>
        <div id="agence" class="about-us">
            <h2>Recontrez notre équipe à l’agence</h2>
            <p>Notre communauté est notre richesse. Nous voulons partager notre bonheur avec le monde. Ce festival est une occasion rêver pour rencontrer anciens comme futurs voyageurs.</p>
            <div><img src="./images/agence.png" alt=""></div>
            <div id="adresse" class="infos-agence">17 avenue Janvier <br> 35000 Rennes</div>
            <div id="horaires" class="infos-agence">Lundi - Samedi <br> 9h - 18h</div>
            <div id="contact" class="infos-agence">02 99 99 99 22 <br> infos@aztrek.com</div>
        </div>
    </article>
</section>

<?php getFooter();
