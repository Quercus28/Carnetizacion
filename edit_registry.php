<?php
    include("BD/db.php");

    
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];

        $query = "SELECT * FROM reportes WHERE id = $id";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_array($result);

            $id = $row['id'];
            $name = $row['name'];
            $lastname = $row['lastname'];
            $secretary = $row['secretary'];
            $contract_expiration = $row['contract_expiration'];
            $phone = $row['phone'];
            $email = $row['email'];
            $contract_supervisor = $row['contract_supervisor'];
            $project = $row['project'];
            $program = $row['program'];
            $dependency = $row['dependency'];
            $job_title = $row['job_title'];
            $type_of_bonding = $row['type_of_bonding'];
        }
    }

    if(isset($_POST['update']))
    {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $secretary = $_POST['secretary'];
        $contract_expiration = $_POST['contract_expiration'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $contract_supervisor = $_POST['contract_supervisor'];
        $project = $_POST['project'];
        $program = $_POST['program'];
        $dependency = $_POST['dependency'];
        $job_title = $_POST['job_title'];
        $type_of_bonding = $_POST['type_of_bonding'];

        $query = "UPDATE reportes set name = '$name', lastname = '$lastname', secretary = '$secretary', contract_expiration = '$contract_expiration',
        phone = '$phone', email = '$email', contract_supervisor = '$contract_supervisor', project = '$project', program = '$program', dependency = '$dependency',
        job_title = '$job_title', type_of_bonding = '$type_of_bonding'  WHERE id = $id ";
        mysqli_query($conn, $query);

        header('Location:activo_carnet.php');
        exit();
    }
?>

<?php
    include("includes/header.php")

?>

    <header class="page-header font-small text-center pt-4 pb-3" style="background-color:#c79be0; color:white" >
        <a> Nombre página </a>
    </header>
    
    
<div class="container p-4">
    <div class="roow">
        <div class="col-mod-4">
            <div class="card card-body">
                <form action="edit_registry.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                    <input
                        textarea
                            type="text"
                            name="name" 
                            class="form-control" 
                            value=<?php echo $name?>  ""
                            placeholder= "Nombres"  
                            style = "resize:none;"
                            required>                 
                    </div>
                    <div class="form-group">
                        <input 
                            type="text"
                            name="lastname" 
                            class="form-control" 
                            value= <?php echo $lastname?> ""
                            placeholder="Apellidos" 
                            style = "resize:none;"
                            required>                            
                    </div>        
                    <div class="form-group">
                        <input
                            type="text" 
                            name="secretary" 
                            class="form-control" 
                            value=<?php echo $secretary?> ""
                            placeholder="Secretaría" 
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">
                        <input
                            type="text" 
                            name="contract_expiration" 
                            class="form-control" 
                            value=<?php echo $contract_expiration?> ""
                            placeholder="Fecha de expiración del contrato" 
                            onfocus="(this.type='date')"
                            onfocusout="(this.type='text')"
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">
                        <input
                            type="number" 
                            name="phone" 
                            class="form-control" 
                            value=<?php echo $phone?> ""
                            placeholder="Número telefonico" 
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">
                        <input
                            type="email" 
                            name="email" 
                            class="form-control" 
                            value=<?php echo $email?> ""
                            placeholder="Correo electrónico" 
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">
                        <input
                            type="text" 
                            name="contract_supervisor" 
                            class="form-control" 
                            value=<?php echo $contract_supervisor?> ""
                            placeholder="Supervisor de contrato" 
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">
                        <input
                            type="text" 
                            name="project" 
                            class="form-control" 
                            value=<?php echo $project?> ""
                            placeholder="Proyecto" 
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">
                        <input
                            type="text" 
                            name="program" 
                            class="form-control" 
                            value=<?php echo $program?> ""
                            placeholder="Programa o convenio" 
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">
                        <input
                            type="text" 
                            name="dependency" 
                            class="form-control" 
                            value=<?php echo $dependency?> ""
                            placeholder="Dependencia" 
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">
                        <input
                            type="text" 
                            name="job_title" 
                            class="form-control" 
                            value=<?php echo $job_title?> ""
                            placeholder="Cargo" 
                            style = "resize:none;" 
                            required>                            
                    </div>
                    <div class="form-group">    
                        <input
                            type="text" 
                            name="type_of_bonding" 
                            class="form-control" 
                            value=<?php echo $type_of_bonding?> ""
                            placeholder="Tipo de vinculación" 
                            style = "resize:none;" 
                            required>                                                           
                    </div>
                    
                    <input type="submit" class="btn btn-light  btn-block" name="update" value="Guardar"></input>
                </form>
            </div>
        </div>
        <div class="col-mod-4">
        </div>
    </div>
</div>


    <form action ="indexlog.php"  method="POST" class= "text-center ">
    <input type = "submit" name= "ppal" value = "Volver al menú principal"  style="color:black"></input>
    </form><br><br><br><br><br><br><br>



<?php

    include("includes/footer.php");
?>
   