<?php
    include("includes/header.php")


?>
<header class="page-header font-small text-center pt-4 pb-3" style="background-color:#0E8EC9; color:white">
    <a> Página principal </a>
</header>


<div class="container p-4 text-center">
    <div class="form-row">

        <div class="form-group">
            <form action="form_official.php" method="POST">
                <a href="form_official.php"><img src="imagenes2/servidorpublico.jpg" style="width: 242px;"
                        alt="sing up image">
                    <input type="submit" name="login" value="Formulario Servidor Público"
                        style="background-color:#DCDCDC; border-color:black; color:black; padding: 5px; width: 242px"
                        class="btn btn-lg"></input>
            </form>
        </div>

        <div class="form-group">
            <form action="form_official2.php" method="POST">
                <a href="form_official2.php"><img src="imagenes2/Sin título-1.jpg" style="width: 242px;"
                        alt="sing up image">
                    <input type="submit" name="nologin" value="Formulario Contratista"
                        style="background-color:#DCDCDC; border-color:black; color:black; padding: 5px; width: 242px"
                        class="btn btn-lg"></input>
            </form>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <form action="activo_carnet.php" method="POST">
                <a href="activo_carnet.php"><img src="imagenes2/listar.jpg" style="width: 242px;"
                        alt="sing up image">
                    <input type="submit" name="list" value="Listar Registro"
                        style="background-color:#DCDCDC; border-color:black; color:black; padding: 5px; width: 242px"
                        class="btn btn-lg"></input>
            </form>
        </div>
        <div class="form-group">
            <form action="search_registry.php" method="POST">
                <a href="search_registry.php"><img src="imagenes2/Listaryconsultar.jpg" style="width: 242px;"
                        alt="sing up image">
                    <input type="submit" name="list" value="Buscar Registro"
                        style="background-color:#DCDCDC; border-color:black; color:black; padding: 5px; width: 242px"
                        class="btn btn-lg"></input>
            </form>
        </div>

    </div>
    <div class="form-row">
        <div class="form-group">
            <form action="print_carnet.php" method="POST">
                <a href="print_carnet.php"><img src="imagenes2/imprimir.jpg" style="width: 242px;" alt="sing up image">
                    <input type="submit" name="print" value="Imprimir carné"
                        style="background-color:#DCDCDC; border-color:black; color:black; padding: 5px; width: 242px"
                        class="btn btn-lg"></input>

        </div>
    </div>







</div>


<br>




<?php
    include("includes/footer.php");
?>