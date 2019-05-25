<?php 
include '../config.php';
$id=$_GET['id'];
$jumlah=$_GET['jumlah'];
$nama=$_GET['nama'];

$a=$mysqli->query("select jumlah from barang where nama='$nama'");
$b=$a->fetch_array();
$kembalikan=$b['jumlah']+$jumlah;
$c=$mysqli->query("update barang set jumlah='$kembalikan' where nama='$nama'");
$mysqli->query("delete from barang_laku where id='$id'");
header("location:barang_laku.php");

 ?>