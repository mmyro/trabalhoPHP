<meta charset="utf-8">
<?php
session_start();
include("menu.php");
session_destroy();
echo "<center><span style='color: white;'>Sessão terminada</span></center>";
header("Refresh:2; url=main.php");
?>