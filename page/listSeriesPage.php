<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>LIST SERIES</h4>
        <a href="../page/insertListSeriesPage.php"><i style="color: green" class="fa fa-plus fa-2x"></i></a>
        
    </div>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Genre</th>
                <th scope="col">Realese</th>
                <th scope="col">episode</th>
                <th scope="col">Season</th>
                <th scope="col">Synopsis</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($con, "SELECT * FROM series") or
                die(mysqli_error($con));
            if (mysqli_num_rows($query) == 0) {
                echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
            } else {
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo '
                        <tr>
                            <th scope="row">' . $no . '</th>
                            <td>' . $data['name'] . '</td>
                            <td>' . $data['genre'] . '</td>
                            <td>' . $data['realease'] . '</td>
                            <td>' . $data['episode'] . '</td>
                            <td>' . $data['season'] . '</td>
                            <td>' . $data['synopsis'] . '</td>
                            <td>
                                <a href="../Page/EditListSeriesPage.php?id='.$data['id'].'" class="btn btn-success"><i class ="fa fa-pencil-square-o" aria-hidden="true "></i></a>
                                <a href="../process/deleteSeriesProcess.php?id='.$data['id'].'" class="btn btn-danger"
                                onClick="return confirm ( \'Are you sure want to delete this data?\')"> <i class="fa fa-trash"></i>
                                </a>
                            </td>

                        </tr>';
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>