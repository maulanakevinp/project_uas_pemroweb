<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Barang</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=$mysqli->real_escape_string($_GET['id']);


$det=$mysqli->query("select * from barang where id='$id_brg'")or die($mysqli->error);
while($d=$det->fetch_array()){
	?>					
	<table class="table">
		<tr>
			<td>Nama</td>
			<td><?php echo $d['nama'] ?></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td><?php echo $d['jenis'] ?></td>
		</tr>
		<tr>
			<td>Suplier</td>
			<td><?php echo $d['suplier'] ?></td>
		</tr>
		<tr>
			<td>Modal</td>
			<td>Rp.<?php echo number_format($d['modal']); ?>,-</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>Rp.<?php echo number_format($d['harga']) ?>,-</td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><?php echo $d['jumlah'] ?></td>
		</tr>
		<tr>
			<td>Sisa</td>
			<td><?php echo $d['sisa'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>