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
    ?>
    <div class="card-profile">
        <img src="img/user.png" class="img" id="profile-fic">
        <h1 class="name"><?php echo $_SESSION['user']; ?></h1>
        <p class="title">Funcionario</p><br>
        <label for="input-file" class="label-ABC">Update Photo</label>
        <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">
    </div>
    <script>
        let profileFic = document.getElementById("profile-fic");
        let inputFile = document.getElementById("input-file");

        inputFile.onchange = function(){
            profileFic.src = URL.createObjectURL(inputFile.files[0]);
        }
    </script>
</body>
</html>
