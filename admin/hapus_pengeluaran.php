<?php 
include '../config.php';
$id=$_GET['id'];
$mysqli->query("delete from pengeluaran where id ='$id'");
header("location:pengeluaran.php");

 ?>