<?php 

include '../config.php';
$tgl=$_POST['tgl'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

$dt=$mysqli->query("select * from barang where nama='$nama'");
$data=$dt->fetch_array();
$sisa=$data['jumlah']-$jumlah;
$mysqli->query("update barang set jumlah='$sisa' where nama='$nama'");

$modal=$data['modal'];
$laba=$harga-$modal;
$labaa=$laba*$jumlah;
$total_harga=$harga*$jumlah;
$mysqli->query("insert into barang_laku values('','$tgl','$nama','$jumlah','$harga','$total_harga','$labaa')")or die($mysqli->error);
header("location:barang_laku.php");

?>