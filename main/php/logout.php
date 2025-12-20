<?php
session_start();

$_SESSION = [];
session_unset();
session_destroy();

header("Location: ../../login&register/html/login.php");
exit();
?>