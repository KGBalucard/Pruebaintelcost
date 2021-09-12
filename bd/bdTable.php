<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "admin";
$password = "contrsaeña123";
$dbname = "bienesDB";

// se hace la coneccion
$conn = new mysqli($servername, $username, $password, $dbname);
// verificacion
if ($conn->connect_error) {
  die("Conexion erronea: " . $conn->connect_error);
}

// crear tabla
$sql = "CREATE TABLE misbienes (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Direccion VARCHAR(30) NOT NULL,
Ciudad VARCHAR(30) NOT NULL,
Telefono VARCHAR(50),
Codigo_Postal VARCHAR(50),
Tipo VARCHAR(50),
Precio VARCHAR(50),
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Se creo la tabla de mis bienes";
} else {
  echo "No se creo la tabla: " . $conn->error;
}
//cerrar conexion 
$conn->close();
?>
</body>
</html>