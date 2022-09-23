<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>INSERT LIST MOVIE</h4>
        
    </div>
    <hr>
    <form action="../process/insertMovieProcess.php" method="post">
        <div class="mb-3">
            <label for="NamaMovie" class="form-label">Nama Movie</label>
            <input type="text" class="form-control" id="NamaMovie" name="NamaMovie" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>
        <div class="mb-3">
            <label for="realese" class="form-label">Realese</label>
            <input type="text" class="form-control" id="realese" name="realese" required>
        </div>
        <div class="mb-3">
            <label for="season" class="form-label">Season</label>
            <input type="text" class="form-control" id="season" name="season" required>
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" rows="3" required></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="insert">Tambah</button>
        </div>
    </form>

</div>

</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>