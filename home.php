<?php
include('includes/header.php');

?>
<?php
session_start();

?>

<?php 

if(isset($_GET['msg'])){
    echo "<h2>".$_GET['msg']."</h2>";

    if(isset($_SESSION['uname'])){
        echo "<h4>Hello ".$_SESSION['uname']."</h4>"; 
    }
}





?>

<?php
include('includes/footer.php');

?>