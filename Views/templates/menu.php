<?php $menu = require("Configuration/Modules.php"); ?>
<ul>
    <hr style="height:1px; background-color:white">
    <li><a href="index.php?module=Index&action=index">Accueil</a></li>
    <?php
    foreach ($menu as $mk => $mv) { ?>
        <hr style="height:1px; background-color:white">
        <li><a href="index.php?module=<?= $mk ?>&action=liste"> <?= $mv ?></a></li>

    <?php } ?>
    <hr style="height:1px; background-color:white">
    <li><a href="Views/vLogout.php">Deconnecter</a></li>

</ul>