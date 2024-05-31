<?php
session_start();
session_destroy();
header("Location: vLogin.php");
exit;
