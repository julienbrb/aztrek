<?php
require_once '../../../model/database.php';

// Récupérer la liste des pays pour la liste déroulante
$list_pays = getAllEntity("pays");

require_once '../../layout/header.php';
?>

<h1>Nouveau séjour</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="pays">Pays</label>
        <select id="pays" name="pays_id" class="form-control">
            <?php foreach ($list_pays as $pays) : ?>
                <option value="<?php echo $pays["id"]; ?>">
                    <?php echo $pays["title"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="duree">Durée</label>
        <input type="text" id="duree" name="duree" value="<?php echo $sejour["duree"]; ?>" class="form-control">
    </div>  
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>

<?php require_once '../../layout/footer.php'; ?>