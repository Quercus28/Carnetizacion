<?php
include("js/script.js");
include("BD/db.php");

$nombre = $_GET['nombre'];
$salida = "";

if(!empty($nombre)){
     $persona = mysqli_real_escape_string($conn, $nombre);

     $query = "SELECT * FROM official WHERE Name LIKE '%".$persona."%' OR Identification LIKE '%".$persona."%' OR LastName LIKE '%".$persona."%' OR Email LIKE '%".$persona."%'";

     $resultad = $conn->query($query);

    if ($resultad->num_rows>0) {
     $salida.="<h1 align='center' margin='20px' >Informacion encontrada</h1>";
     $salida.="<table width='90%' border='1px' align='center'>
     <thead>
          <tr style='text-align: center;''>
               <td>Cedula</td>
               <td>Nombre</td>
               <td>Apellidos</td>
               <td>Correo</td>
               <td>Accion</td>
          </tr>
     </thead>
     <tbody>";

     while($fila = $resultad->fetch_assoc()){
          $salida.="
               <tr>
                <td style='text-align: center;'>".$fila['Identification']."</td>
                <td style='text-align: center;'>".$fila['Name']."</td>
                <td style='text-align: center;'>".$fila['LastName']."</td>
                <td style='text-align: center;'>".$fila['Email']."</td>
                <td style='text-align: center;'><a href='edit_registry.php?id=".$fila['Identification']."' class='btn btn-light' title='Editar'>Ver</a></td>
               </tr>";
     }
     $salida.="</tbody></table>";
     } else {
          $salida.="<h1 align='center' margin='20px' >Informacion no encontrada</h1>";
     }
     echo $salida;
}
?>