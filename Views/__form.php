<form name="myForm" action="" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($element["id"] ?? '') ?>" />

    <table align="center" border="2" borderColor="#996633">
        <tr align="center">
            <td colspan="2"  style=" background-color: brown;color: white;">
                <span class="Err"> <?= htmlspecialchars($erreur ?? '') ?> </span>
            </td>
        </tr>
        <?php foreach ($keys as $key): ?>
            <?php if ($key != "id"): ?>
                <tr>
                    <td   style=" background-color: brown;color: white;" align="right" width="20%"><b><?= htmlspecialchars($key) ?></b></td>
                    <td align="left">
                        <input name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($element[$key] ?? '') ?>" />
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        <tr style=" background-color: brown;color: white;">
            <td colspan="2" align="center" >
                <input type="submit" value="Sauvegarder" />
                <input type="reset" value="Annuler" />
            </td>
        </tr>
    </table>
</form>