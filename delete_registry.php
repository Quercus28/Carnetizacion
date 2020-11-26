<?php

    include("BD/db.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];


        $query = "DELETE FROM id15421000_empcarnet . reportes WHERE id = $id ";
        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            die("Guardado no exitoso");
        }

        header('Location:activo_carnet.php');
        exit();
    }

?>