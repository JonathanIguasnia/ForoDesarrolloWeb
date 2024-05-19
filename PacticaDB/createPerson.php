<?php

require 'conexiondb.php';

$sql = "INSERT INTO persona (cedula, nombre, apellido, fecha) VALUES('1900555259','Eduardo', 'Iguasnia', '1985-07-30')";

if(mysqli_query($conexion,$sql)) {
    echo "Persona creada";
}
else {
    echo "Error". mysqli_connect_error();
}

?>