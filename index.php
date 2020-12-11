<?php include("includes/header.php"); ?>
<<<<<<< HEAD

    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Página principal </a>
    </header>

    <br><br><br><br><br>

    <div class="container p-4 text-center">
        <form action ="form_contratista.php"  method="POST">
            <input type = "submit" name= "nologin" value = "Formulario"  style="background-color:#DCDCDC; border-color:black; color:black"  class="btn btn-lg"></input>
        </form>
=======
<div class="container">
    <div class="ppal">
        <div class="btns">
            <div class="form-group form-button">
            <form  action ="form_official.php"  method="POST">
                <input class="btn" type = "submit" name= "nologin" value = "Formulario"></input>
            </form>
            </div>
            <div class="form-group form-button">
                <form action ="login.php"  method="POST">
                    <input class="btn" type = "submit" value = "Ingresar como administrador"></input>
                </form>
            </div>
        </div>
        <div class="imagen">
            <figure>
                <img src="img\escudoAlcaldia.png" alt="escudo alcaldia">
            </figure>
        </div>      
>>>>>>> 8c29a8f8195625fba781f35c7a4c4c45fc644a18
    </div>
</div>
<?php include("includes/footer.php"); ?>