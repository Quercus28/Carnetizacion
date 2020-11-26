<?php

    include("BD/db.php");

    if(isset($_POST['save']))
    {
        $id = $_POST['identificacion'];
        $name = $_POST['nombres'];
        $lastname = $_POST['apellidos'];
        $secretary = $_POST['Secretaria'];
        $contract_expiration = $_POST['vencimientocontrato'];
        $phone = $_POST['telefono'];
        $email = $_POST['correoelectronico'];
        $contract_supervisor = $_POST['supervisorcontrato'];
        $project = $_POST['proyecto'];
        $program = $_POST['programa'];
        $dependency = $_POST['dependencia'];
        $job_title = $_POST['cargo'];
        $type_of_bonding = $_POST['tipovinculacion'];


        $query = "INSERT INTO reportes(id, name, lastname, secretary, contract_expiration ,phone ,email ,contract_supervisor ,project ,program ,dependency ,job_title
        , type_of_bonding) VALUES ('$id', '$name', '$lastname', '$secretary', '$contract_expiration' ,'$phone' ,'$email' ,'$contract_supervisor' ,'$project' ,'$program'
        , '$dependency' ,'$job_title', '$type_of_bonding')";

        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            die("Guardado no exitoso");
        }

        $_SESSION['message'] = 'El registro se ha guardado con éxito';
        $_SESSION['message_type'] = 'success';

        header('Location: form_carnet.php');
        exit();
    }

?>