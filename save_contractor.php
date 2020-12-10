<?php

    include("BD/db.php");

    if(isset($_POST['save']))
    {
        $identification = $_POST['in_identification'];
        $name = $_POST['in_name'];
        $lastname = $_POST['in_lastname'];
        $email = $_POST['in_email'];
        $phone = $_POST['in_phone'];
        $job_title = $_POST['in_job_title'];
        $secretary = $_POST['in_secretary'];
        $photo_code = $_POST['in_photo_code'];
        $carnet_type = $_POST['in_carnet_type'];
        $cost = $_POST['in_cost'];
        $pay_method = $_POST['in_pay_method'];
        $pay_status = 'pendiente'; //CHANGE INITIALIZATION
        $carnet_status = 'pendiente'; //CHANGE INITIALIZATION
        $project = $_POST['in_project'];

        $query = "INSERT INTO contractor (Identification, Name, LastName, Email, Phone, JobTitle, Secretary, Project, PhotoCode, CarnetType, Cost, PayMethod, PayStatus, CarnetStatus) VALUES ('$identification', '$name',
        '$lastname', '$email', '$phone', '$job_title', '$secretary', '$project', '$photo_code', '$carnet_type', '$cost',
        '$pay_method', '$pay_status', '$carnet_status')";
        var_dump($query);

        $result = mysqli_query($conn, $query);
        var_dump($result);

        if(!$result)
        {
            die("Guardado no exitoso");
        }

        $_SESSION['message'] = 'El registro se ha guardado con éxito';
        $_SESSION['message_type'] = 'success';

        header('Location: form_contractor.php');
        exit();
    }

?>