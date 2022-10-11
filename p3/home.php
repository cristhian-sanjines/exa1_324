<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <style>
        *{
            margin: 0;
        }
        h1{
            text-align: center;
            background-color: green;
            padding: 10px;
            color: white;
        }
    </style>
</head>
<body>
    <h1>
        <?php 
            SESSION_START();
            $usuario = $_SESSION['usuario'];
            echo "Bienvenid@ ".$usuario;
        ?>
    </h1>

    <a href="index.php">Volver a paguina princiap</a>
    
</body>
</html>