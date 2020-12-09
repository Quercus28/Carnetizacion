<?php include("includes/header.php"); ?>

    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Página principal </a>
    </header>

    <br><br><br><br><br>

    <div class="container p-4 text-center">
        <form action ="form_official.php"  method="POST">
            <input type = "submit" name= "nologin" value = "Formulario"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg"></input>
        </form>
    </div>

    <div class="container p-4 text-center">
        <form action ="login.php"  method="POST">
            <input type = "submit" value = "Ingresar como administrador"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg"></input>
        </form>
    </div>

<?php include("includes/footer.php"); ?>