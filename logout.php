<?php
session_start();
session_destroy();
unset($_SESSION['email']);
$url = "Login-SignUp/loginPage.php";
header("Location: ".$url);
exit();
 ?>
