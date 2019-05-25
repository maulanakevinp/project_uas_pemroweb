<?php 
include '../config.php';
$user=$_POST['user'];
$foto=$_FILES['foto']['name'];

// move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name'])or die();
// 	$mysqli->query("update admin set foto='$foto' where uname='$user'");


$u=$mysqli->query("select * from admin where uname='$user'");
$us=$u->fetch_array();
if(file_exists("foto/".$us['foto'])){
	unlink("foto/".$us['foto']);
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	$mysqli->query("update admin set foto='$foto' where uname='$user'");
	header("location:ganti_foto.php?pesan=oke");
}else{
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	$mysqli->query("update admin set foto='$foto' where uname='$user'");
	header("location:ganti_foto.php?pesan=oke");
}
?>
