<?php

    include("BD/db.php");
?>
<html>
<body>
<?php
    include("includes/header.php")
?>

    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#0E8EC9; color:white" >
        <a> BUSCAR REGISTRO </a>
    </header><br><br>
    
<form action ="search_registry.php"  method="POST">>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Buscar usuario</a>
    <input type="number" name="busqueda"  placeholder = "Identificación" required>
    <input type = "submit" name= "search" value = "Buscar"></input>
    </form><br><br>


<table width="90%" border="1px" align="center">

    <tr align="center">
        <td>Fecha de atención</td>
        <td>Hora de atención</td>
        <td>Toma</td>
        <td>Código</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Cargo</td>
        <td>Secretaría</td>
        <td>Vence</td>
        <td>Cédula</td>
        <td>Teléfono</td>
        <td>Correo</td>
        <td>Autorización</td>
        <td>Observaciones</td>
        <td>Dependencia</td>
        <td>Tipo de vinculación</td>
        <td>Valor</td>      
        <td width="15%">Acción </td>
    </tr>

<?php     

    if(isset($_POST['search']))
    {
    $busqueda = $_POST['busqueda'];
    $query = "SELECT * FROM reportes WHERE id = '$busqueda'";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'No se pudo ejecutar la consulta: ';
        exit;
    }

    while($datos=$result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $datos["date_of_attention"]?></td>
                <td><?php echo $datos["attention_time"]?></td>           
                <td><?php echo $datos["photo_id"]?></td>
                <td><?php echo $datos["photo_code"]?></td>
                <td><?php echo $datos["name"]?></td>
                <td><?php echo $datos["lastname"]?></td>
                <td><?php echo $datos["job_title"]?></td>
                <td><?php echo $datos["secretary"]?></td>
                <td><?php echo $datos["contract_expiration"]?></td>
                <td><?php echo $datos["id"]?></td>                
                <td><?php echo $datos["phone"]?></td>
                <td><?php echo $datos["email"]?></td>
                <td><?php echo $datos["authorization"]?></td>
                <td><?php echo $datos["observation"]?></td>
                <td><?php echo $datos["dependency"]?></td>
                <td><?php echo $datos["type_of_bonding"]?></td>
                <td><?php echo $datos["payment_value"]?></td>
                <td tyle="text-align: center;">
                    <a href="bill_registry.php?id=<?php echo $datos['id']?>" class="btn btn-light" title="Facturar">Facturar</a>
                    <a href="edit_registry.php?id=<?php echo $datos['id']?>" class="btn btn-light" title="Editar">Editar</a>
                    <a href="delete_registry.php?id=<?php echo $datos['id']?>" class="btn btn-light" title="Eliminar">Eliminar</a>
                    
                </td>
            </tr>
            <?php   
        } 
}
?>
</table>

    <form action ="indexlog.php"  method="POST" class= "text-center ">
    <input type = "submit" name= "ppal" value = "Volver al menú principal"  style="color:black"></input>
    </form><br><br><br><br><br><br><br>

    
<?php
    include("includes/footer.php");
?>