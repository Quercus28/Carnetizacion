<?php
    include("includes/header.php")


?>

<div class="container">
    <div class="ppal">
        <div class="btns">
            <div class="form-group form-buttom">
                <form action ="form_official.php"  method="POST">
                    <input class="btn" type = "submit" name= "login" value = "formulario"></input>
                </form>
            </div>


            <div class="form-group form-buttom">
                <form action ="activo_carnet.php"  method="POST" >
                    <input class="btn" type = "submit" name= "list" value = "Listar" ></input>
                </form>
            </div>

            <div class="form-group form-buttom">
                <form action ="activo_carnet.php"  method="POST" >
                    <input class="btn" type = "submit" name= "list" value = "Consultar registro"  ></input>
                </form>
            </div>

            <div class="form-group form-buttom">
                <form action ="print_carnet.php"  method="POST" >
                    <input class="btn" type = "submit" name= "print" value = "imprimir carné" ></input>
                </form>
            </div>
        </div>
        <div class="imagen2">
            <figure>
                <img src="img\escudoAlcaldia.png" alt="escudo alcaldia">
            </figure>
        </div>  
    </div>
</div>
<?php
    include("includes/footer.php");
?>
