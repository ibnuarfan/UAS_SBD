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
    <u><a href="add_pembayaran.php"><u>Pembayaran</u></a></u>
    <u><a href="pembeli.php"><u>Pembeli</u></a></u>
</nav>
</nav>
<h3>TABEL PEMBELI</h3>
    <a href="add_pembeli.php">TAMBAH DATA BARU</a><br/><br/>
    <table style="margin-left:auto;margin-right:auto" border="1">
        <thead>
            <tr>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>No Telpon</th>
                <th>Alamat</th>  
                <th>Aksi</th>                  
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  pembelli';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><center><?php echo $row['id_pmb']?></center></td>
                <td><?php echo $row['nama_pmb']?></td>
                <td><?php echo $row['no_tlf']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><a href="ubah_pembeli.php?id=<?= $row['id_pmb']; ?>"><button>UBAH</button></a> |
                    <a href="hapus.php?id=<?= $row['id_pmb']; ?>"><button>HAPUS</button></a>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    </body>
</html>