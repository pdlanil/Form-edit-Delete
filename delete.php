<?php
include("db.php");

$id = $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM cloud WHERE id=$id");

header("location:datas.php");
?>
