<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "loggin";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$nombre_usuario = $_POST['username'];
$clave = $_POST['password'];

$clave_hash = password_hash($clave, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, correo, nombre_usuario, clave) 
        VALUES ('$nombre', '$correo', '$nombre_usuario', '$clave_hash')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='text-align: center; font-size: 24px; font-weight: bold; color: pink;'>Registro exitoso</div>";
    echo "<div style='text-align: center;'><a href='index.html' class='btn btn-primary'>Regresar al inicio de sesión</a></div>";
} else {
    echo "<div style='text-align: center; font-size: 24px; font-weight: bold; color: brown;'>Error al registrar usuario: " . $conn->error . "</div>";
    echo "<div style='text-align: center;'><a href='index.html' class='btn btn-primary'>Regresar al inicio de sesión</a></div>";
}

$conn->close();
?>
