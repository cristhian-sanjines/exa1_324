<?php 
    include("db.php");

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    session_start();
    $_SESSION['usuario'] = $usuario;
    

    $consulta = "SELECT * FROM ACCESO WHERE usuario = '$usuario' 
    and p_password = '$password'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location:home.php");
    }
    else{
        //vuelbe al index
        $_SESSION['error'] = "Error de autentificacion";
        include("index.php");
    }
    //para que bote el resultado
    mysqli_free_result($resultado);
    //para cerrar la conexion
    mysqli_close($conexion);
?>