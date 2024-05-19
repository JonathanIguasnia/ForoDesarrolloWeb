<?php

require 'conexiondb.php';

$sql = "UPDATE persona SET nombre = 'Jonathan' WHERE cedula = '1900555259'";

if(mysqli_query($conexion,$sql)) {
    echo "Persona actualizada";
}
else {
    echo "Error". mysqli_connect_error();
}

?>