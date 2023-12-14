<?php
	include("menu.php");
	if (session_status() == PHP_SESSION_NONE) {
	session_start();}
	if(isset($_SESSION["user"])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="myscript.js">
</head>
<body>
    <div class="gallery">
        <div class="container1">
            <img src="img/spider.jpeg" alt="">
                <h3>Marvel's Spider-Man 2</h3>
                <h6>120€</h6>
                    <ul>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star"> </i></li>
                    </ul>
            <a href="#"><button class="btn-shop" onclick="togglePopup()">Trailer</button></a>
        </div>

        <div class="container1">
            <img src="img/fc24.jpg" alt="">
                <h3>Fifa 24</h3>
                <h6>35€</h6>
                    <ul>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                    </ul>
            <a href="#"><button class="btn-shop" onclick="togglePopup2()">Trailer</button></a>
        </div>

        <div class="container1">
            <img src="img/ghost.jpeg" alt="">
                <h3>Ghost of Tsushima</h6>
                <h6>46€</h3>    
                    <ul>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                        <li><i class="fa fa-star checked"> </i></li>
                    </ul>
            <a href="#"><button class="btn-shop" onclick="togglePopup3()">Trailer</button></a>
        </div>
    </div>


    <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup()">&times;</div>
            <iframe width="720" height="403" src="https://www.youtube.com/embed/nq1M_Wc4FIc" title="Marvel&#39;s Spider-Man 2 - Be Greater. Together. Trailer I PS5 Games" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

    <div class="popup" id="popup-2">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup2()">&times;</div>
            <iframe width="716" height="403" src="https://www.youtube.com/embed/XhP3Xh4LMA8" title="EA SPORTS FC™ 24 | Trailer Oficial de Apresentação da Jogabilidade" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>

    <div class="popup" id="popup-3">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopup3()">&times;</div>
            <iframe width="716" height="403" src="https://www.youtube.com/embed/Zbq7BnsQhrw" title="Ghost of Tsushima -The Ghost | PS4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    <?php
	} else {
		echo "<h3>Faça login para aceder ao nosso site</h3>";
		echo "<img src='img/login.png'>";
	}
	?>
<script src="myscript.js"></script>
</body>