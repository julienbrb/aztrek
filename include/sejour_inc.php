 
<article class="action">
    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
        <img src="uploads/<?php echo $sejour["picture"]; ?>" alt="<?php echo $sejour["title"]; ?>">
        <footer class="overlay">
            <div class="info">
                <div class="tag">A partir de : <?php echo $sejour["price"]; ?> €</div>
                <br>
                <br>
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
                    <?php echo $sejour["date_depart"]; ?>
                </div>

                <div class="action-info">
                    <i class="fa fa-users"></i>
                    <?php echo $sejour["nb_places"]; ?>
                </div>
            </div>
        </footer>
    </a>
</article>