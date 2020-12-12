<?php

    include("BD/db.php");

    if(isset($_POST['save']))
    {
        $identification = $_POST['in_identification'];
        $name = $_POST['in_name'];
        $lastname = $_POST['in_lastname'];
        $email = $_POST['in_email'];
        $phone = $_POST['in_phone'];
        $secretary = $_POST['in_secretary'];
        $supervisor = $_POST['in_supervisor'];
        $project = $_POST['in_project'];
        $photo_code = $_POST['in_photo_code'];
        $carnet_type = $_POST['in_carnet_type'];
        $cost = $_POST['in_cost'];
        $pay_method = $_POST['in_pay_method'];
        $expirationDate = $_POST['in_ExpirationDate'];
        $carnet_status = 'pendiente';

        $query = "INSERT INTO contractor (Identification, Name, LastName, Email, Phone, Secretary, Project, PhotoCode, CarnetType, Supervisor, Cost, PayMethod, CarnetStatus, ExpirationDate) VALUES ('$identification', '$name',
        '$lastname', '$email', '$phone', '$secretary', '$project', '$photo_code', '$carnet_type', '$supervisor', '$cost', '$pay_method', '$carnet_status', '$expirationDate')";

        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            die("Guardado no exitoso");
        }

        $_SESSION['message'] = 'El registro se ha guardado con éxito';
        $_SESSION['message_type'] = 'success';

        header('Location: indexlog.php');
        exit();
    }

?>