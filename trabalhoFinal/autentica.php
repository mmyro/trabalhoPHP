<!DOCTYPE html>
<center>
<meta charset="utf-8">
<?php
session_start();
include ("menu.php");
$us=$_POST["user"];
$ps=$_POST["password"];
if ($us=="Myro" && $ps=="123")
{

$_SESSION["user"]=$_POST["user"];
echo "<center><span style='color: white;'>Autenticação correta</span></center>";
header("Refresh:2; url=main.php");

}
else
{ echo "<center><span style='color: white;'>Tente novamente</span></center>";
  echo "<a href='login.php'> <b><span style='color: white;'>Login</span></b>";
}
?>