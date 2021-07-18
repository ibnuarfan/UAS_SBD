<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_trs'];
	
	$id_trs=$_POST['id_trs'];
	$id_prd=$_POST['id_prd'];
	$id_pmb=$_POST['id_pmb'];
    $jml_prd=$_post['jml_prd'];
	$keterangan=$_POST['keterangan'];

    $result = mysqli_query($conn, 
	"UPDATE trransaksi SET id_trs='$id_trs',id_prd='$id_prd',id_pmb='$id_pmb',jml_prd='$jml_prd',keterangan='$keterangan' 
	WHERE id_trs=$id");

	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 
$result = mysqli_query($conn, "SELECT * FROM trransaksi WHERE id_trs=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_trs = $user_data['id_trs'];
	$id_prd = $user_data['id_prd'];
	$id_pmb = $user_data['id_pmb'];
    $jml_prd= $user_data['jml_prd'];
	$keterangan = $user_data['keterangan'];
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Transaksi</title>
</head>

 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="ubah_transaksi.php">
		<table border="0">
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_trs" value=<?php echo $id_trs;?>></td>
			</tr>
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_prd" value=<?php echo $id_prd;?>></td>
			</tr>
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pmb" value=<?php echo $id_pmb;?>></td>
			</tr>
            <tr> 
				<td>Jumlah Produk</td>
				<td><input type="text" name="jml_prd" value=<?php echo $jml_prd;?>></td>
			</tr>
			<tr> 
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>