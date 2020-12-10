<?php include("includes/header.php"); ?>
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
    </div>
</div>
<?php include("includes/footer.php"); ?>