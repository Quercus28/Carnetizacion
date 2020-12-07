<?php

 //importing dbDetails file
 include("BD/db.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){

        //checking the required parameters from the request
        if(isset($_FILES['image']['name'])){

            //getting file info from the request
            $fileinfo = pathinfo($_FILES['image']['name']);

            //getting the file extension
            $extension = $fileinfo['extension'];

            if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") &&
            ($extension != "gif")) {
                echo 'Formato de imagen no válido';
            }

            //new name
            if (isset($_GET['id'])){
                //new random name
                $id = $_GET['id'];
                $temp = explode(".", $_FILES["image"]["name"]);
                $newfilename = $id . '.' . end($temp);
            } else {
                echo 'error';
            }

            //jpg-jpeg
            if($extension =="jpg" || $extension =="jpeg" ) {
                $uploadedfile = $_FILES['image']['tmp_name'];
                $src = imagecreatefromjpeg($uploadedfile);
                list($width,$height)=getimagesize($uploadedfile);

                //set new width
                $newwidth1=350;
                $newheight1=($height/$width)*$newwidth1;
                $tmp1=imagecreatetruecolor($newwidth1,$newheight1);

                imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);

                $filename1 = "img/". $newfilename;

                imagejpeg($tmp1,$filename1,100);

                imagedestroy($src);
                imagedestroy($tmp1);

                //insert in database
                $insert = "UPDATE reportes set photo_code = '$id' where id = $id";
                mysqli_query($conn, $insert);

                echo "<html>
                <head>
                </head>
                <body>
                    <meta http-equiv='REFRESH' content='0 ; url=activo_carnet.php'>
                    <script>
                        alert('La imagen se ha cargado correctamente ');
                    </script>
                </body>
                </html>";
            }
            //png
            else if($extension =="png") {
                $uploadedfile = $_FILES['image']['tmp_name'];
                $src = imagecreatefrompng($uploadedfile);
                list($width,$height) = getimagesize($uploadedfile);

                //set new width
                $newwidth1=350;
                $newheight1=($height/$width)*$newwidth1;
                $tmp1=imagecreatetruecolor($newwidth1,$newheight1);

                imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);

                $filename1 = "img/". $newfilename;

                imagejpeg($tmp1,$filename1,100);

                imagedestroy($src);
                imagedestroy($tmp1);

                //insert in database
                $insert = "UPDATE reportes set photo_code = '$id' where id = $id";
                mysqli_query($conn, $insert);

                echo "<html>
                <head>
                </head>
                <body>
                    <meta http-equiv='REFRESH' content='0 ; url=activo_carnet.php'>
                    <script>
                        alert('La imagen se ha cargado correctamente ');
                    </script>
                </body>
                </html>";
            }
            //gif
            else if($extension =="gif") {
                $uploadedfile = $_FILES['image']['tmp_name'];

                $filename1 = "img/". $newfilename;

                move_uploaded_file($uploadedfile,$filename1);

                //insert in database
                $insert = "UPDATE reportes set photo_code = '$id' where id = $id";
                mysqli_query($conn, $insert);

                echo "<html>
                <head>
                </head>
                <body>
                    <meta http-equiv='REFRESH' content='0 ; url=activo_carnet.php'>
                    <script>
                        alert('La imagen se ha cargado correctamente');
                    </script>
                </body>
                </html>";
            }
            else {
                echo 'error';
            }
        }
    }
?>