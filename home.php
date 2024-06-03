<?php
include('includes/header.php');

?>
<?php
session_start();

?>

<?php 

if(isset($_GET['msg'])){
    echo "<h2>".$_GET['msg']."</h2>";

 
}
if(isset($_SESSION['uname'])){
    echo "<h4>Hello ".$_SESSION['uname']."</h4>"; 
}
else{
    header('location:index.php?message=You need to login to enter the site');
}





?>

<a href="includes/logout_process.php" class="btn btn-danger">Logout</a>

<?php
include('includes/footer.php');

?>