<?php
include 'data.php';
$id_user = $_GET['id'];
$sql = "DELETE FROM users WHERE id_user =$id_user";
mysqli_query($conn,$sql);
header('location:index.php');
 ?>