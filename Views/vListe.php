<h1> Les informations de la table : <?=$module?></h1>
<hr style="background-color: brown; border-color:brown;"><br><br>
<div>
    <?php
        if(count($liste)>0){
             $keys = array_keys($liste[0]);
    ?>
    <table border="2" borderColor="#996633" width="80%" >
        <tr>
            <?php foreach($keys as $k) {?>
                <th><?= $k ?></th>
            <?php }?>
            <th colspan="2">Action</th>
        </tr>
        <?php 
            foreach($liste as $e) {?>
                <tr>
                    <?php 
                    foreach($keys as $k) {?>
                    <td> 
                        <a href="index.php?module=<?= $module ?>&action=detail&id=<?= $e["id"] ?>">
                        <?=$e[$k]?>
                    </a>
                    </td>
                    <?php }?>
                    <td>
                        <a href="index.php?module=<?= $module ?>&action=edit&id=<?= $e["id"] ?>">
                            modifier
                        </a>
                    </td>
                    <td>
                        <a href="index.php?module=<?= $module ?>&action=delete&id=<?= $e["id"] ?>">
                            supprimer
                        </a>
                    </td>
                </tr>
            <?php }?>
    </table>
<?php }
    else echo"<b>Aucun element dans cette table !</b>"; ?>
    </div>
<div align="right">
        <a href="index.php?module=<?=$module ?>&action=edit">
                            Ajouter Nouveau <?=$module ?> 
                        </a>

</div>