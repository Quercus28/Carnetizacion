<?php include("includes/header.php"); ?>

<header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white">
    <a> Página principal </a>
</header>

<br><br><br>

<div class="container text-center">
    <br>
    <div class="form-row">

        <div class="form-group">
            <form action="form_official.php" method="POST">
                <a href="form_official.php"><img src="imagenes2/servidorpublico.jpg" style="width: 242px;"
                        alt="sing up image">
                    <input type="submit" name="nologin" value="Formulario Servidor Público"
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
</div>

<?php include("includes/footer.php"); ?>