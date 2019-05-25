<?php 
include '../config.php';
$id=$_GET['id'];
$mysqli->query("delete from barang where id='$id'");
header("location:barang.php");

?>