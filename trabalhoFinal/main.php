<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container2">
    <?php
	include("menu.php");
	if (session_status() == PHP_SESSION_NONE) {
	session_start();}
	if(isset($_SESSION["user"])) {
?>
<div class="home">
    <?php
    echo "<h1>Seja bem-vindo ".$_SESSION["user"]. " ao melhor site do mundo<br><br></h1>";
    echo "<p> Descubra uma incrível gama de jogos para se divertir, ";
    echo "<br>desde jogos de simulação até jogos de tabuleiros e muito mais</p>";  
    ?>
</div>
    <div class="home">
    <?php
	echo "<img src='img/t.png'>";    
    ?>
    </div>
<div class="home">
    <?php
	} else {
		echo "<h3>Faça login para aceder ao nosso site</h3>";
		echo "<img src='img/login.png'>";
	}
	?>
</div>
</div>
</body>

</html>