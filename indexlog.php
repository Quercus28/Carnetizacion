<?php
    include("includes/header.php")


?>
    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Página principal </a>
    </header>


    <div class="container p-4 text-center">
    <form action ="form_official.php"  method="POST">
    <input type = "submit" name= "login" value = "formulario Funcionario"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg"></input>
    </form>
    </div>

    <div class="container p-4 text-center">
    <form action ="form_contractor.php"  method="POST">
    <input type = "submit" name= "login" value = "formulario Contratista"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg"></input>
    </form>
    </div>


    <div class="container p-4 text-center">
    <form action ="activo_carnet.php"  method="POST" >
    <input type = "submit" name= "list" value = "Listar Funcionarios"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg "></input>
    </form>
    </div>

    <div class="container p-4 text-center">
    <form action ="listar_contractor.php"  method="POST" >
    <input type = "submit" name= "list" value = "Listar Contratistas"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg "></input>
    </form>
    </div>

    <div class="container p-4 text-center">
    <form action ="index.php"  method="POST" >
    <input type = "submit" name= "list" value = "Cerrar seccion"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg "></input>
    </form>
    </div>

   


<?php
    include("includes/footer.php");
?>
