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
                    <input type="text" autocomplete="off" onkeyup="mostrarUsuario(this.value)" class="form-control my-2" name="formulario"
                    id="formulario" placeholder = "Buscar usuario">
                </div>
            </div>
        </div>
    </form><br>
    <!-- cierre barra de busqueda -->

    <div id="info">

    </div>


    <h1 align="center" style="margin: 20px 0";>Funcionarios</h1>

<table width="90%" border="1px" align="center">

    <tr align="center">
        <td>Cédula</td>
        <td>Nombres</td>
        <td>Apellidos</td>
        <td>Correo</td>
        <td width="15%">Acción </td>
    </tr>

<!-- etiqueta 1: uso de los datos de reportes para hacer pruebas -->
<?php
$query = "SELECT * FROM official";

$result = mysqli_query($conn, $query);
    while($datos=$result->fetch_assoc())
    {
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $datos["Identification"]?></td>
                <td style="text-align: center;"><?php echo $datos["Name"]?></td>
                <td style="text-align: center;"><?php echo $datos["LastName"]?></td>
                <td style="text-align: center;"><?php echo $datos["Email"]?></td>
                <td style="text-align: center;">
                    <!-- se comenta la opcion de facturar de la vista de listar -->
                    <a href="edit_registry_official.php?id=<?php echo $datos['Identification']?>" class="btn btn-light" title="Editar">Ver info</a>
                </td>
            </tr>
            <?php
    }
?>

<!-- cierre de la etiqueta 1 -->

</table>


    <form action ="indexlog.php"  method="POST" class= "text-center">
    <br>
    <input type = "submit" name= "ppal" value = "Volver al menú principal"  style="color:black"></input>
    </form><br><br><br><br><br><br><br>


<?php
    include("includes/footer.php");
?>