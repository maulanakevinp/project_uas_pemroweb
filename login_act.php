<?php 
session_start();
include 'config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);
$query=$mysqli->query("select * from admin where uname='$uname' and pass='$pas'")or die($mysqli->error);
if($query->num_rows==1){
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die($mysqli->error);
	// $mysqli->error;
}
// echo $pas;
 ?>