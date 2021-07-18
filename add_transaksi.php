 
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Transaksi</title>
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

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
    <form action="add_transaksi.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" name="id_trs"></td>
			</tr>
			<tr> 
				<td>ID Produk</td>
				<td><input type="text" name="id_prd"></td>
			</tr>
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pmb"></td>
			</tr>
            <tr> 
				<td>Jumlah Produk</td>
				<td><input type="text" name="jml_prd"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_trs = $_POST['id_trs'];
		$id_prd = $_POST['id_prd'];
		$id_pmb = $_POST['id_pmb'];
        $jml_prd =$_POST['jml_prd'];
		$keterangan = $_POST['keterangan'];
		
		include("koneksi.php");
				
		$result = mysqli_query($conn, "INSERT INTO trransaksi(id_trs,id_prd,id_pmb,jml_prd,keterangan) 
        VALUES('$id_trs','$id_prd','$id_pmb','$jml_prd','$keterangan')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
	
</body>

</html>