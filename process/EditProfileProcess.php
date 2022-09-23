<?php
session_start();
    if(isset($_POST['Update'])){
        include('../db.php');

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phonenum = $_POST['PhoneNumber'];
        $membership = $_POST['Membership'];

        $query = mysqli_query($con, "UPDATE users SET name = '$name', email = '$email', phonenum = '$phonenum', membership = 'Membership' WHERE id = " .$_SESSION["user"]["id"]);

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