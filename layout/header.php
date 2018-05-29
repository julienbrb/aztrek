<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Thousands travelers, one community. Découvrez une nouvelle approche du voyage grâce à AZTREK et intégrez notre communauté !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AZTREK | <?php echo $title; ?> </title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="./css/jquery.sidr.light.min.css">
        <link rel="stylesheet" href="./css/owl.carousel.min.css">
        <link rel="stylesheet" href="./css/styles.css">
    </head>

    <body>

        <header id="page-header">
            <div id="header-top" class="container">
                <div id="mobile-header">
                    <a class="burger" href="#sidr-main"><i class="fa fa-bars" aria-hidden="true"></i>Menu</a>
                </div>

                <?php getMenu(); ?>

                <a class="backpack" href="#"><img src="./images/backpack.svg" alt="sac a dos">mon sac a dos</a>
            </div>
            <div id="logo-header">
                <div class="logo">
                    <a href="index.html" title="Accueil"><img src="./images/logo_aztrek_blanc-2.svg" alt="Logo"></a>
                </div>
                <h1 id="baseline">Thousands travelers, one community</h1>
                <form class="search-form container" action="#" method="get">
                    <input type="text" name="keywords" value="" placeholder="Rechercher">
                    <button type="submit" name="submit-btn"><i class="fa fa-search" aria-hidden="true"></i>Valider</button>
                </form>
            </div>
            <div class="discover container">
                <h3>Découvrez AZTREK</h3>
                <a href="#voyages"><i class="fas fa-angle-down"></i>Scroll</a>
            </div>
        </header>

        <main>
