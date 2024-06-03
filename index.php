<?php 
include('includes/header.php');

?>
        <?php
        if(isset($_GET['message'])){
            echo "<h4>".$_GET['message']."</h4>";
        }

        ?>
    <form class="form" action="includes/login_process.php" method="post">
        <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" name="uname" class="form-control mt-2">
        </div>
        <div class="form-group">
            <label for="uname" class="mt-2">Email</label>
            <input type="email" name="email" class="form-control mt-2">
        </div>
        <div class="form-group">
            <input type="submit" name="login" value="Login" class="btn btn-success mt-3">
        </div>
    </form>

  <?php
  include('includes/footer.php');

  ?>