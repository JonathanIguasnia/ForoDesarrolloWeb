<?php

require 'conexiondb.php';

$sql = "DELETE FROM persona WHERE cedula = '1900555259'";

if(mysqli_query($conexion,$sql)) {
    echo "Persona Eliminada";
}
else {
    echo "Error". mysqli_connect_error();
}

?>