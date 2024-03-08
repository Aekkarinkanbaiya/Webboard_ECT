<?php 
session_start();
$p = $_GET['id'];
if(isset($_SESSION['id']) && $_SESSION['role'] == 'a'){
        echo "ลบกระทู้ หมายเลข $p";
 }

else
header("Location:index.php");
die();
?>