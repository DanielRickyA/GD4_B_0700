<?php
session_start();
    if(isset($_POST['UpdateSeries'])){
        include('../db.php');

        $name = $_POST['NamaSeries'];
        $genre = $_POST['genre'];
        $realease = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $genre_string = implode(", ", $genre);
        

        $query = mysqli_query($con, "UPDATE series SET name = '$name', genre = '$genre_string', realease = '$realease', 
            season = '$season', synopsis = '$synopsis'  WHERE id = " .$_SESSION["series"]["id"]);

        if($query){
            echo
                '<script>
                alert("Berhasil Update Profil");
                window.location = "../page/ListSeriesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Gagal Update Profil");
                </script>';
        }
        
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }

?>