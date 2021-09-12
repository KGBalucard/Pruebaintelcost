<!DOCTYPE html>
<html>
<body>
<?php
//Crear base de datos previamente configurado o creado el ususario admin por defecto root
$servername = "localhost";
$username = "admin";
$password = "contraseña123";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Conexion erronea: " . $conn->connect_error);
}

$sql = "CREATE DATABASE bienesDB";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada con exito";
} else {
  echo "No se puedo crear la base de datos: " . $conn->error;
}

$conn->close();
?>



</body>
</html>