
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Pembayaran</title>
</head> 

<body>
<header>
		<h1>Pusat spart part online</h1>
        <body style="font-family: calibry">
   <center><b>Tambah Data Prmbayaran<b></center>
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
	<a href="index.php">KEMBALI KE MENU</a>
 
	<form action="add_pembayaran.php" method="post" name="form1">
		<table width="30%" border="0">
			<tr> 
				<td>ID Pembayaran</td>
				<td><input type="text" name="id_bayar"></td>
			</tr>
			<tr> 
				<td>ID Trs</td>
				<td><input type="text" name="id_trs"></td>
			</tr>
			<tr> 
				<td>Tanggal bayar</td>
				<td><input type="text" name="tgl_bayar"></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td><input type="text" name="jml_bayar"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_bayar = $_POST['id_bayar'];
		$id_trs = $_POST['id_trs'];
		$tgl_bayar = $_POST['tgl_bayar'];
		$jml_bayar = $_POST['jml_bayar'];
		
		include("koneksi.php");
				
		$result = mysqli_query($conn, "INSERT INTO pembayarann(id_bayar,id_trs,tgl_bayar,jml_bayar) 
        VALUES('$id_bayar','$id_trs','$tgl_bayar','$jml_bayar')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>

</html>