<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
 <title> PUSAT SPARE PART |</title>
</head>


 

 <header>
		<h1>Pusat spart part online</h1>
        <body style="font-family: calibry">
   <center><b>Tambah Data Baru<b></center>
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
    

 <form action="add_produk.php" method="post" name="form1">
		<table width="30%" border="0">
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_prd"></td>
			</tr>
			<tr> 
				<td>Nama Produk</td>
				<td><input type="text" name="nama_prd"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga_prd"></td>
			</tr>
            <tr>
				<td>Stok</td>
				<td><input type="text" name="stok_prd"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
 
	if(isset($_POST['Submit'])) {
		$id_prd = $_POST['id_prd'];
		$nama_prd = $_POST['nama_prd'];
		$harga_prd = $_POST['harga_prd'];
        $stok_prd = $_POST['stok_prd'];
		
		include("koneksi.php");
		
		$result = mysqli_query($conn, "INSERT INTO produk(id_prd,nama_prd,harga_prd,stok_prd) 
		VALUES('$id_prd','$nama_prd','$harga_prd','$stok_prd')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>