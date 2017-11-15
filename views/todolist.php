<?php
session_start(); 
if ($_SESSION) {
    $username = $_SESSION['user_name'];
} else {

    echo "<h1>no has iniciado sesion,se detendrá la ejecución</h1>";
    die(); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario todolist</title>
    </head>
    <body>
        <h1>Este espacio corresponde al usuario <?php echo $_SESSION['user_name'] ?></h1>
        

<?php if (!$_POST) { 
    ?>

            <form action="todolist.php" method="POST">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">
                <br/>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="">
                <br/>
                <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>
                <br/>
                <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
            </form>
    <?php
} else {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    echo $nombre . "<br/>";
    echo $correo . "<br/>";
    echo $mensaje . "<br/>";
}
?>


        <a href="logout.php">CERRAR SESION</a> 
    </body>
</html>

