<?php
    include("includes/header.php")


?>

<<<<<<< HEAD

    <div class="container p-4 text-center">
    <form action ="form_contratista.php"  method="POST">
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
=======
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
>>>>>>> 8c29a8f8195625fba781f35c7a4c4c45fc644a18
    </div>
</div>
<?php
    include("includes/footer.php");
?>
