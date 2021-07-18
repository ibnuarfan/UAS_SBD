<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_prd'];
	
	$id_prd=$_POST['id_prd'];
	$nama_prd=$_POST['nama_prd'];
	$harga_prd=$_POST['harga_prd'];
    $stok_prd=$_POST['stok_prd'];
	
	$result = mysqli_query($conn, 
	"UPDATE produk SET id_prd='$id_prd',nama_prd='$nama_prd',harga_prd='$harga_prd',stok_prd='$stok_prd' 
	WHERE id_prd=$id");
	
	header("Location: index.php");
}
?>
<html>
<head>	
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Edit  Data</title>
</head>
<?php

$id = $_GET['id'];
 
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id_prd=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_prd = $user_data['id_prd'];
	$nama_prd = $user_data['nama_prd'];
	$harga_prd = $user_data['harga_prd'];
    $stok_prd = $user_data['stok_prd'];
}
?>
<?php include('header1.php');?>


<body>
<header>
		<h1>Pusat spart part online</h1>
</header>
<div class ="header">
	<div class="header-logo"><u>IBNU SOFFI ARFAN</u></div>
</div>
<nav>
<nav>
<u><a href="index.php"><u>Barang</u></a></u>
    <u><a href="transaksi.php"><u>Transaksi</u></a></u> 
    <u><a href="pembayaran.php"><u>Pembayaran</u></a></u>
    <u><a href="pembeli.php"><u>Pembeli</u></a></u>
</nav>
</nav>
<br><br>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="ubah_produk.php">
		<table width = "30%" border="0">
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_prd" value=<?php echo $id_prd;?>></td>
			</tr>
			<tr> 
				<td>Nama Produk</td>
				<td><input type="text" name="nama_prd" value=<?php echo $nama_prd;?>></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga_prd" value=<?php echo $harga_prd;?>></td>
			</tr>
			<tr> 
				<td>Stok</td>
				<td><input type="text" name="stok_prd" value=<?php echo $stok_prd;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>