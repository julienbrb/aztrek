<?php 
require_once __DIR__ . '/../lib/functions.php';

$utilisateur = currentUser();
?>
<nav id="main-nav">
    <div class="top-menu">
        <a href="#" class="close-btn">Fermer</a>
    </div>

    <ul >
        <li><a href="index.php">home</a></li>
        <li><a href="pays.php">pays</a></li>
        <li><a href="#">festival</a></li>
        <li><a href="#">communauté</a></li>
        <li><a href="#">about us</a></li>
        <?php if (!isset($utilisateur["id"])): ?>
        <li><a href="admin/index.php">Login</a></li>
        <?php else: ?>
        <li><a href="admin/index.php">Mon compte</a></li>
        <?php endif; ?>
    </ul>
</nav>