<?php
require_once '../../../model/database.php';

$id = $_GET["id"];

$sejour = getOneEntity("sejour", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier séjour</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="<?php echo $sejour["title"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="pays">Pays</label>
        <input type="text" id="pays" name="pays" value="<?php echo $sejour["pays"]; ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
        <?php if (!empty($sejour["picture"])) : ?>
            <img src="../../../uploads/<?php echo $sejour["picture"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
     <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
        <div class="form-group">
        <label for="duree">Durée</label>
        <input type="text" id="duree" name="duree" value="<?php echo $sejour["duree"]; ?>" class="form-control">
    </div>    
    <input type="hidden" name="id" value="<?php echo $sejour["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>