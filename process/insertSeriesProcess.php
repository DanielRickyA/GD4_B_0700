<?php
    if(isset($_POST['insertSeries'])){
        include('../db.php');
        
        $NamaSeries = $_POST['NamaSeries'];
        $genre = $_POST['genre'];
        $realease = $_POST['realease'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $genre_string = implode(", ", $genre);
                               //pemmisah, array 

        $query = mysqli_query($con, "INSERT INTO series(name, genre, realease, episode, season, synopsis) 
            VALUES ('$NamaSeries', '$genre_string', '$realease', '$episode', '$season', '$synopsis')")
            or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Berhasil Tambah Series");
                window.location = "../page/listSeriesPage.php"
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