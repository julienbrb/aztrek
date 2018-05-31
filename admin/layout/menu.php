<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?php echo (CURRENT_URL == ADMIN_URL) ? "active" : ""; ?>" href="<?php echo ADMIN_URL; ?>">
            <i class="fa fa-home"></i>
            Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/pays/">
            <i class="fa fa-briefcase"></i>
            Pays
        </a>
    </li>    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/users/">
            <i class="fa fa-users"></i>
            Membres
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/sejours/">
            <i class="fa fa-briefcase"></i>
            Séjours
        </a>
    </li>
</ul>