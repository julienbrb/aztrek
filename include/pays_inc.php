<section class="container">  
    <article class="action">
        <a href="project.php?id=<?php echo $pays["id"]; ?>">
            <img src="uploads/<?php echo $pays["picture"]; ?>" alt="<?php echo $sejour["title"]; ?>">
            <footer class="overlay">
                <div class="info">
                    <div class="tag"><?php echo number_format($depart["price"], 0, ",", " "); ?> €</div>
                    <?php if (is_numeric($sejour["grade"])) : ?>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <?php if ($sejour["grade"] > $i) : ?>
                                <i class="fa fa-star"></i>
                            <?php else: ?>
                                <i class="fa fa-star-o"></i>
                            <?php endif; ?>
                        <?php endfor; ?>
                    <?php endif; ?>
                    <h3><?php echo $sejour["title"]; ?></h3>              
                </div>
                <div class="more-info">
                    <div class="action-info">
                        <i class="fa fa-calendar"></i>
                        <?php echo $depart["date_depart"]; ?>
                    </div>
<!--                    <div class="action-info">
                        <i class="fa fa-tag"></i>
                        <?php echo $project["category"]; ?>
                    </div>-->
                    <div class="action-info">
                        <i class="fa fa-users"></i>
                        <?php echo $reservation["nb_personnes"]; ?>
                    </div>
                </div>
            </footer>
        </a>
    </article>
</section>