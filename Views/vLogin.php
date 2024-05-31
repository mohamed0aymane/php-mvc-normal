
<?php
session_start();

require_once '../BaseManager.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = login($username, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../index.php");
        exit;
    } else {
        $error = "Coordonnes sont invalides";
    }
}

?>

<head>
    <meta charset="utf-8">
	
	 <link rel ="stylesheet" href="../Publics/style.css" >
</head>


<?php include("../Publics/vHaut.php"); ?>

<form action="vLogin.php" method="post">
    <div class="form-field">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="aymane" >
    </div>
    <div class="form-field">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="aymane" >
    </div>
    <button type="submit">Connecter</button>

    <?php if (isset($error)) {
        echo "<div class='error'>" . htmlspecialchars($error) . "</div>";
    } ?>
</form>

<?php include("../Publics/vBas.php"); ?>
