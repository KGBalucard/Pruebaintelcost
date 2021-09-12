<!DOCTYPE html>
<html>
<body>
<?php
insert(){
    $servername = "localhost";
    $username = "admin";
    $password = "contraseña123";
    $dbname = "bienesBD";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Conexion erronea: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO misbienes (Direccion, Ciudad, Telefono,Codigo_Postal,Tipo,Precio,fecha)
    VALUES (insertar_luego)";
    
    if ($conn->query($sql) === TRUE) {
      echo "Registro creado";
    } else {
      echo "error ala gregar: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
detele(){
    $servername = "localhost";
    $username = "admin";
    $password = "contraseña123";
    $dbname = "bienesBD";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Conexion erronea: " . $conn->connect_error);
    }
    $sql = "DELETE FROM misbienes WHERE id=insertar_luego";
    
    if ($conn->query($sql) === TRUE) {
      echo "registro eleminado";
    } else {
      echo "Error al eliminar: " . $conn->error;
    }
    
    $conn->close();
}

modify(){
    $servername = "localhost";
    $username = "admin";
    $password = "contraseña123";
    $dbname = "bienesBD";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Conexion erronea: " . $conn->connect_error);
    }
    
    $sql = "UPDATE misbienes SET Codigo_Postal= WHERE id=insertar_luego";
    
    if ($conn->query($sql) === TRUE) {
      echo "actualizado exitoso";
    } else {
      echo "error al actualizar: " . $conn->error;
    }
    
    $conn->close();
}
?>
</body>
</html>