<?php
$host = "localhost";
$db   = "biblioteca";
$user = "root";
$pass = "";

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Recoger los datos del formulario
$nombre = $_POST['nombre'];
$dui_usuario = $_POST['dui_usuario'];
$direccion = $_POST['direccion'];
$password = $_POST['password'];
$rol = $_POST['rol']; // Nuevo campo para el tipo de rol

// Insertar los datos en la base de datos según el rol
if ($rol == 'administrador') {
    $sql = "INSERT INTO administrador (nombre, dui_usuario, direccion, password) 
    VALUES ('$nombre', '$dui_usuario', '$direccion', '$password')";
} else {
    $sql = "INSERT INTO usuario (nombre, dui_usuario, direccion, password) 
    VALUES ('$nombre', '$dui_usuario', '$direccion', '$password')";
}

if ($conn->query($sql) === TRUE) {
    // Redirigir a otra vista
    echo "<script>location.href='/home';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>