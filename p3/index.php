<?php 
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessiones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="validar.php" method="post">
        <ul>
            <li>
                <br>
                <br>
                <p>Usuario</p>
                <input type="text"
                name="usuario">
            </li>
            <li>
                <br>
                <br>
                <p>Password</p>
                <input type="password"
                name="password">
            </li>
            <li>
                <br>
                <br>
                <input id="boton" type="submit" value="Ingresar">
            </li>
        </ul>
    </form>
    <section id="error_session">
        <?php
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
        ?>
    </section>
</body>
</html>