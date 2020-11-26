<?php
    include("includes/header.php")


?>
    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Página principal </a>
    </header>


    <div class="container p-4 text-center">
    <form action ="form_carnet.php"  method="POST">
    <input type = "submit" name= "login" value = "formulario"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg"></input>
    </form>
    </div>


    <div class="container p-4 text-center">
    <form action ="activo_carnet.php"  method="POST" >
    <input type = "submit" name= "list" value = "Listar"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg "></input>
    </form>
    </div>

    <div class="container p-4 text-center">
    <form action ="activo_carnet.php"  method="POST" >
    <input type = "submit" name= "list" value = "Consultar registro"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg "></input>
    </form>
    </div>

    <div class="container p-4 text-center">
    <form action ="print_carnet.php"  method="POST" >
    <input type = "submit" name= "print" value = "imprimir carné"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg "></input>
    </form>
    </div>
    

<?php
    include("includes/footer.php");
?>
   