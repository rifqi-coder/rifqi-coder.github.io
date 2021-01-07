<?php 

session_start();
 

session_destroy();
 
header("location:sidebar/responsi2/login.php?pesan=logout");
?>