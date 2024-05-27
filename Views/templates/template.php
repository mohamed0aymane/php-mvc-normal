<?php include("Publics/Vhaut.php"); ?>
<html>

<body>
    <table id="mainTable" border="1" bordercolor="#999999" width="100%" align="center" cellpadding="20">
        <tr>
            <td class="menu" style="background-color: brown;">
                <?php require("menu.php"); ?>
            </td>

            <td bgcolor="gray">
                <div>
                    <?= $view ?? "" ?>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
<?php include("Publics/vBas.php"); ?>