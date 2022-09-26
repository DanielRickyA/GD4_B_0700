<?php
    if(isset($_POST['insert'])){
        include('../db.php');
        
        $namaMovie = $_POST['NamaMovie'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con, "INSERT INTO movies(name, genre, realese, season, synopsis) 
            VALUES ('$namaMovie', '$genre', '$realese', '$season', '$synopsis')")
            or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Berhasil Tambah Movie");
                window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Tambah Failed");
                </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }

?>