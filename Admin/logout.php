<?php
 session_start();
 empty($_SESSION);
 session_unset();
 session_destroy();

 header("Location: http://localhost/THUTO%20KEYA%20RONA%20PROJECTS/Admin/index.php",true);
?>