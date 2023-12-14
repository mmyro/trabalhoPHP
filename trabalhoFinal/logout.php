<meta charset="utf-8">
<?php
    include("menu.php");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();}
        if(isset($_SESSION["user"])) {
    session_destroy();
    echo "<center><span style='color: white;'>Sessão terminada</span></center>";
    header("Refresh:2; url=main.php");
	} else {
		echo "<h3>Faça login para aceder ao nosso site</h3>";
		echo "<img src='img/login.png'>";
	}
?>