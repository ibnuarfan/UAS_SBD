<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSAT SPART PART</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="font-family:arial">
<header>
<center><u><h1>PUSAT SPART PART ONLINE</h1></u></center>  
</header>
<div class="header">
    <div class="header-logo"><u>IBNU SOFFI ARFAN</u></div>
</div>
<nav>
<nav>
    <u><a href="index.php"><u>Barang</u></a></u>
    <u><a href="transaksi.php"><u>Transaksi</u></a></u> 
    <u><a href="pembayaran.php"><u>Pembayaran</u></a></u>
    <u><a href="pembeli.php"><u>Pembeli</u></a></u>
    <u><a href="logout.php"><u>Log out</u></a></u>
</nav>
</nav>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<a href="add_produk.php">Tambah Data</a> <br><br>
    <center><h3>Tabel Baarang</h3></center>
    <table style="margin-left:auto;margin-right:auto" border="1">
        <thead>
            <tr>
               <th>Id Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan=2><center>Aksi</center></th>  
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  produk';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
            <tbody>
                <tr>
                <td><?php echo $row['id_prd']?></td>
                    <td><?php echo $row['nama_prd']?></td>
                    <td><?php echo $row['harga_prd']?></td>
                    <td><?php echo $row['stok_prd']?></td>
                    <td>
                    <td><a href="ubah_produk.php?id=<?= $row['id_prd']; ?>"><button>Edit</button></a> |
                    <a href="hapus.php?id=<?= $row['id_prd']; ?>"><button>Hapus</button></a>
  </tr>
  <?php 
  }
  ?>
 </table> 
</body>
</html>