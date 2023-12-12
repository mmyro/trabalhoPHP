<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <a href="#"><img src="img/logo.png" class="logo" id="logo"></a>
    <nav class="navbar">
        <?php 
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
            if (isset($_SESSION["user"])) {
                ?>
                <a href="main.php">Home</a>
                <a href="catalogo.php">Catalogo</a>
                <a href="profile.php" style="background-color: gray"><?php echo "Olá " . $_SESSION["user"] ?></a>
                <a href="logout.php">Sair</a>
                <?php
            } else {
                ?>
                <a class="active" href="login.php">Entrar</a>
                <?php 
            }  
        }
        ?>
    </nav>
</div>
</body>
</html>