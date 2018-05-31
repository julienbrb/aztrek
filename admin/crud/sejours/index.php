<?php
require_once '../../../model/database.php';

$list_sejours = getAllSejours();

require_once '../../layout/header.php';
?>

<h1>Gestion des projets</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Séjour</th>
            <th>Date de départ</th>
            <th>Photo</th>
<!--            <th>Categorie</th>-->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_sejours as $sejour) : ?>
            <tr>
                <td><?php echo $sejour["title"]; ?></td>
                <td><?php echo $sejour["date_depart"]; ?></td>
                <?php $picture = (!empty($sejour["picture"])) ? "../../../uploads/" . $sejour["picture"] : "http://via.placeholder.com/150x150"; ?>
                <td><img src="<?php echo $picture; ?>" class="img-thumbnail"></td>
                <td>
                    <a href="update.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $sejour["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>