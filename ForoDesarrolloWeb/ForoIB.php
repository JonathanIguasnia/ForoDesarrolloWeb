<?php
$servername = "localhost";
$username = "root";
$password = ""; // Cambia 'tu_contraseña' por la contraseña correcta
$database = "usuario"; // Cambia 'nombre_correcto_de_la_base_de_datos' por el nombre de tu base de datos

// Crear conexión
$ForoIB = mysqli_connect($servername, $username, $password, $database);

if (!$ForoIB) {
    die("Conexión fallida: " . mysqli_connect_error());
}
else
    echo "Conexion Exitosa"."<br>";
?>