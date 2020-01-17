<?php
session_start();

if(isset($_POST['email']))
{
  if(isset($_POST['Password']))
  {
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $_SESSION['email'] = $email;
    $_SESSION['Password'] = $password;
    $url = "../FuelQuoteInformation/FuelQuotePage.php";
    header("Location: ".$url);
    exit();
  }
}
 ?>
