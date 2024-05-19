<?php
require 'ForoIB.php';

$sql = "INSERT INTO usuario (nombre, apellido, cedula, correo, rol, fecha_de_registro) VALUES ('Eduardo', 'Uzhca', '1101100832', 'edu.jho@hotmail.com','Tecnico', '2023-05-18')";
$sql = "INSERT INTO usuario (nombre, apellido, cedula, correo, rol, fecha_de_registro) VALUES ('Edu', 'U', '1101100832', 'edu.jho@hotmail.com','Tecnico', '2023-05-18')";
$sql = "INSERT INTO usuario (nombre, apellido, cedula, correo, rol, fecha_de_registro) VALUES ('Edu', 'U', '1101100832', 'edu.jho@hotmail.com','Tecnico', '2023-05-18')";
if (mysqli_query($ForoIB, $sql)) {

    echo "Persona Creada";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($ForoIB);
}
?>