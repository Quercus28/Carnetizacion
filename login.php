<?php
    include("includes/header.php");
?>



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
   

<<<<<<< HEAD
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
=======
<div class="container rezi2">
    <div class="ppal">
                    <div>
                        <h2 class="ftitle">  Ingresar </h2> 
                        <figure>
                            <img src="img\escudoAlcaldia.png" alt="escudo alcaldia">
                        </figure>
                    </div>
                    <div class="spcpassword">
                        <form action="login.php" method="POST">
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Constraseña"
                                
                                required>
                            <div class="password">
                                <input class="btnsub rezi" name="log" type="submit" value="Entrar">
                                <input class="btnsub rezi" type="submit" name="return" value="atrás" onclick="history.go(-1);">
                            </div>
                        
                        </form>
                        
                    </div> 
        </div>  
</div>              
>>>>>>> 8c29a8f8195625fba781f35c7a4c4c45fc644a18
<?php include("includes/footer.php") ?>