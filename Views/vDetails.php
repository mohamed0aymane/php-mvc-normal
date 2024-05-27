<h1 style="color: brown;">Details de l'element <?= $element["id"] ?> de la table :<?= $module ?></h1>
<hr style="background-color: brown; border-color:brown;"><br><br>
<div>
    <?php foreach ($element as $key => $val) { ?>
        <b  style=" color: brown;"><?= $key ?> : </b>  <b  style=" color: white;"><?= $val ?></b> <br>
    <?php } ?> <br><br>

    <div>
        <a href="index.php?module=<?= $module ?>&action=edit&id=<?= $element["id"] ?>">
            modifier
        </a>|
        <a href="index.php?module=<?= $module ?>&action=delete&id=<?= $element["id"] ?>">
            supprimer
        </a>
    </div>
</div>