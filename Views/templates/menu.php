<?php $menu=require("Configuration/Modules.php");?>
<ul>
    <hr style="height:1px; background-color:white">
    <a href ="index.php?module=Index&action=index">Accueil</a>
    <?php
    foreach($menu as $mk=>$mv){?>
    <hr style="height:1px; background-color:white"> 
    <a href="index.php?module=<?= $mk ?>&action=liste"> <?= $mv?></a>
    
    <?php } ?>
    <hr style="height:1px; background-color:white"> 
</ul>