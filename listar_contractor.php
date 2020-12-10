<?php

    include("BD/db.php");
?>

<?php
    include("includes/header.php")    
?>

    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Nombre página </a>
    </header><br><br>

    <!-- barra de busqueda -->
    <form action="" method="POST" style= "padding-left:15%;">    
        <div class="container-fluid">
            <div class="row" id="map_section">
                <div class="col-4">
                <label for="formulario">Buscar usuario: </label>
                <input type="text" autocomplete="off" onkeyup="mostrarUsuario1(this.value)" class="form-control my-2" name="formulario" id="formulario" placeholder = "  Identificación">
                <!-- <button id="boton" class="btn btn-info mb-2">Buscar</button> -->
                </div>
            </div>
        </div>    
    </form><br>
    <!-- cierre barra de busqueda -->

    <div id="info">
        
    </div>
    

    <h1 align="center" style="margin: 20px 0";>Contratistas</h1>

<table width="90%" border="1px" align="center">

    <tr align="center">
        <!-- <td>Fecha de atención</td>
        <td>Hora de atención</td>
        <td>Toma</td>
        <td>Código</td> -->
        <td>Nombres</td>
        <td>Apellidos</td>
        <!-- <td>Cargo</td>
        <td>Secretaría</td>
        <td>Vence</td> -->
        <td>Cédula</td>
        <!-- <td>Teléfono</td> -->
        <td>Correo</td>
        <!--<td>Autorización</td>
        <td>Observaciones</td>
        <td>Dependencia</td>
        <td>Tipo de vinculación</td>
        <td>Valor</td>       -->
        <td width="15%">Acción </td>
    </tr>

<?php

$query = "SELECT * FROM contractor";

$result = mysqli_query($conn, $query);
    while($datos=$result->fetch_assoc())
    {
        ?>
            <tr> 
                <!-- <td><?php echo $datos["date_of_attention"]?></td>
                <td><?php echo $datos["attention_time"]?></td>           
                <td><?php echo $datos["photo_id"]?></td>
                <td><?php echo $datos["photo_code"]?></td> -->
                <td style="text-align: center;"><?php echo $datos["Name"]?></td>
                <td style="text-align: center;"><?php echo $datos["LastName"]?></td>
                <!-- <td><?php echo $datos["job_title"]?></td>
                <td><?php echo $datos["secretary"]?></td>
                <td><?php echo $datos["contract_expiration"]?></td> -->
                <td style="text-align: center;"><?php echo $datos["Identification"]?></td>                
                <!-- <td><?php echo $datos["phone"]?></td> -->
                <td style="text-align: center;"><?php echo $datos["Email"]?></td>
                <!-- <td><?php echo $datos["authorization"]?></td>
                <td><?php echo $datos["observation"]?></td>
                <td><?php echo $datos["dependency"]?></td>
                <td><?php echo $datos["type_of_bonding"]?></td>
                <td><?php echo $datos["payment_value"]?></td> -->
                <td style="text-align: center;">
                <?php $id = $datos["Identification"]?>
                    <!-- se comenta la opcion de facturar de la vista de listar -->
                    <!-- <a href="bill_registry.php?id=<?php //echo $datos['Identification']?>" class="btn btn-light" title="Facturar">Facturar</a> -->
                    <a href="edit_registry_contractor.php?id=<?php echo $datos['Identification']?>" class="btn btn-light" title="Editar">Ver info</a>
                    
                </td>
            </tr>
            <?php   
    } 
?>
<!-- etiqueta 1: uso de los datos de reportes para hacer pruebas -->

<!-- cierre de la etiqueta 1 -->

</table>


    <form action ="indexlog.php"  method="POST" class= "text-center">
    <br>
    <input type = "submit" name= "ppal" value = "Volver al menú principal"  style="color:black"></input>
    </form><br><br><br><br><br><br><br>


<?php
    include("includes/footer.php");
?>