<?php
session_start();
    if(isset($_POST['Update'])){
        include('../db.php');

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phonenum = $_POST['PhoneNumber'];
        $job = $_POST['jobs'];

        $query = mysqli_query($con, "UPDATE users SET name = '$name', email = '$email', phonenum = '$phonenum', job = '$job' WHERE id = " .$_SESSION["user"]["id"]);

        if($query){
            echo
                '<script>
                alert("Berhasil Update Profil");
                window.location = "../page/myProfilePage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Gagal Update Profil");
                </script>';
        }
        
    }

?>