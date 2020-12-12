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
        $query = "INSERT INTO official (Identification, Name, LastName, Email, Phone, JobTitle, Secretary,
        PhotoCode, CarnetType, Cost, PayMethod, PayStatus, CarnetStatus) VALUES ('$identification', '$name',
        '$lastname', '$email', '$phone', '$job_title', '$secretary', '$photo_code', '$carnet_type', '$cost',
        '$pay_method', '$pay_status', '$carnet_status')";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die("Guardado no exitoso");
        }
        $_SESSION['message'] = 'El registro se ha guardado con éxito';
        $_SESSION['message_type'] = 'success';
        header('Location: index.php');
        exit();
    }
?>