<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
	include("menu.php");
	if (session_status() == PHP_SESSION_NONE) {
	session_start();}
	if(isset($_SESSION["user"])) {
?>
    <div class="card-profile">
        <img src="img/user.png" class="img" id="profile-fic">
        <h1 class="name"><?php echo $_SESSION['user']; ?></h1>
        <p class="title">Cliente</p><br>
        <label for="input-file" class="label-ABC">Update Photo</label>
        <input class="input-btn" type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
    </div>
    <?php
	} else {
		echo "<h3>Faça login para aceder ao nosso site</h3>";
		echo "<img src='img/login.png'>";
	}
	?>
    <script>
        let profileFic = document.getElementById("profile-fic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange = function(){
            profileFic.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>
</body>
</html>
