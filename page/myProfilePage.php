<?php
include '../component/sidebar.php';

$query = mysqli_query($con, "SELECT * FROM users where id = " . $_SESSION["user"]["id"]);
$user = mysqli_fetch_assoc($query);
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>My Profile</h4>
        <a href=""></a>
        
    </div>
    <hr>
    <form action="../process/EditProfileProcess.php" method="post">
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="Name" name="Name" required value="<?php echo $user['name'] ?>" disabled>
        </div>
        
        <div class="mb-3">
            <label for="Email" class="form-label">Email2</label>
            <input type="text" class="form-control" id="Email" name="Email" required value="<?php echo $user['email'] ?> " disabled>
        </div>
        <div class="mb-3">
            <label for="jobs" class="form-label">Job</label>
            <input type="text" class="form-control" id="jobs" name="jobs" required value="<?php echo $user['job'] ?> " disabled>
        </div>
        <div class="mb-3">
            <label for="Phone Number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="Phone Number" name="Phone Number" required value="<?php echo $user['phonenum'] ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="Membership" class="form-label">Membership</label>
            <input type="text" class="form-control" id="Membership" name="Membership" value="<?php echo $user['membership'] ?>" disabled> 
        </div>
    </form>
</div>

</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>