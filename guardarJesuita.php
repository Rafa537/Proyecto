<?php
// Datos de conexión a la base de datos
$servername = "18@1daw.esvirgua.com"; // Cambia si es necesario
$username = "user1daw_18"; // Usuario de MySQL
$password = "e+wmC@9y2x1}"; // Contraseña de MySQL
$dbname = "visitasDB"; // Nombre de la base de datos

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$codigo = $_POST["codigo"];
$nombre = $_POST["jesuita"];

// Insertar datos en la base de datos
$sql = "INSERT INTO jesuitas (codigo, nombre) VALUES ('$codigo', '$nombre')";

if ($conn->query($sql) === TRUE) {
    echo "Jesuita guardado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>