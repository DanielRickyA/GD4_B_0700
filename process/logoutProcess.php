<?php 
 
    session_start();
    session_destroy();
    
    header("Location: ../page/loginPage.php");
    
?>