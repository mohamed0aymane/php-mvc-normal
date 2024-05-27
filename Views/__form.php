<form name="myForm" action="" method="post">
    <input type="hidden" name="id" value="<?= htmlspecialchars($element["id"] ?? '') ?>" />

    <table align="center" border="2" borderColor="#996633">
        <tr align="center">
            <td colspan="2">
                <span class="Err"> <?= htmlspecialchars($erreur ?? '') ?> </span>
            </td>
        </tr>
        <?php foreach ($keys as $key): ?>
            <?php if ($key != "id"): ?>
                <tr>
                    <td align="right" width="20%"><b><?= htmlspecialchars($key) ?></b></td>
                    <td align="left">
                        <input name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($element[$key] ?? '') ?>" />
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Sauvegarder" />
                <input type="reset" value="Annuler" />
            </td>
        </tr>
    </table>
</form>