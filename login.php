<?php
    include("includes/header.php");
?>

<header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
    <a> Ingreso como administrador </a>
</header>

<?php
    if(isset($_POST['log']))
    {
        if ($_POST['password'] != "1234")
        {
?>
            <script>
                alert('La contraseña es incorrecta');
            </script>
<?php
        } else{
?>
        <?php header('Location: indexlog.php');?>
<?php       }
    }
?>
   <style>
        .head{
            margin: 0;
        }
        .center{
            margin: 100px 450px;
        }
    </style>

    <div class="signup">
        <div class="row"  align="center">
            <div class="center" align="center">
                <div class="card card-body"  align="center">
                    <form action="login.php" method="POST" >
                        <legend  align="center">Ingresar:</legend>
                        <br>
                        <input
                            type="password"
                            name="password"
                            class="zmdi zmdi-account material-icons-name"
                            class="form-control"
                            class="zmdi zmdi-account material-icons-name"
                            placeholder="Constraseña"
                            style = "resize:none;"
                            required>
                        <br>
                        <input name="log" type="submit" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include("includes/footer.php") ?>