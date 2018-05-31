<?php
require_once '../../../model/database.php';

$id = $_GET["id"];

$pays = getOneEntity("pays", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier pays</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Pays</label>
        <input type="text" id="title" name="title" value="<?php echo $pays["title"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" value="<?php echo $pays["description"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($pays["picture"])) : ?>
            <img src="../../../uploads/<?php echo $pays["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $pays["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>
