<?php
include("js/script.js");
include("BD/db.php");

$nombre = $_GET['nombre'];
$salida = "";


if(!empty($nombre)){
     $persona = mysqli_real_escape_string($conn, $nombre);
     $resultadoBD = mysqli_query($conn, "SELECT * FROM reportes WHERE name LIKE '%".$persona."%' OR id LIKE '%".$persona."%' OR lastname LIKE '%".$persona."%' OR email LIKE '%".$persona."%'" );

     $query = "SELECT * FROM reportes WHERE name LIKE '%".$persona."%' OR id LIKE '%".$persona."%' OR lastname LIKE '%".$persona."%' OR email LIKE '%".$persona."%'";

     $resultad = $conn->query($query);

    if ($resultad->num_rows>0) {
     $salida.="<h1 align='center' margin='20px' >Informacion encontrada</h1>";    
     $salida.="<table width='90%' border='1px' align='center'>
     <thead>
          <tr style='text-align: center;''>
               <td>Nombre</td>
               <td>Apellidos</td>
               <td>Cedula</td>
               <td>Correo</td>
               <td>Accion</td>
          </tr>

     </thead>
     <tbody>";
    

     while($fila = $resultad->fetch_assoc()){
          $salida.="
               <tr>
                <td style='text-align: center;'>".$fila['name']."</td>
                <td style='text-align: center;'>".$fila['lastname']."</td>
                <td style='text-align: center;'>".$fila['id']."</td>
                <td style='text-align: center;'>".$fila['email']."</td>
                <td style='text-align: center;'><a href='edit_registry.php?id=".$fila['id']."' class='btn btn-light' title='Editar'>Ver info</a></td>
                
               </tr>";
     }
     $salida.="</tbody></table>";

     } else {
          $salida.="No se encontro registro";
     }

     echo $salida;
     // $respuesta = array(
     //      'salida' => $salida
     // );

     // echo json_encode($respuesta);

}

// if(!empty($nombre)){
//      $persona = mysqli_real_escape_string($conn, $nombre);
//      $resultadoBD = mysqli_query($conn, " SELECT * FROM reportes WHERE name LIKE '%".$persona."%' OR id LIKE '%".$persona."%' OR lastname LIKE '%".$persona."%' OR email LIKE '%".$persona."%'");

//      while($fila = mysqli_fetch_assoc($resultadoBD)){
//           echo $fila['name'] . " ";
//      }

//      mysqli_close($conn);
// }


?>