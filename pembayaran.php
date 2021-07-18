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
</nav>
</nav>
    <a href="add_pembayaran.php">TAMBAH DATA BARU</a><br/><br/>
    <center><h3>TABEL PEMBAYARAN</h3></center>
    <table style="margin-left:auto;margin-right:auto" border="1">
        <thead>
            <tr>
                <th>ID Pembayaran</th>
                <th>ID Transaksi</th>
                <th>Tanggal bayar</th>
                <th>Total bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  pembayarann';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><center><?php echo $row['id_bayar']?></center></td>
                <td><center><?php echo $row['id_trs']?></center></td>
                <td><center><?php echo $row['tgl_bayar']?></center></td>
                <td><center><?php echo $row['jml_bayar']?></center></td>
                <td><a href="ubah_embayaran.php?id=<?= $row['id_bayar']; ?>"><button>UBAH</button></a> |
                    <a href="hapus.php?id=<?= $row['id_bayar']; ?>"><button>HAPUS</button></a>
                </td>
        
            </tr>

        </tbody>

        <?php
        }
        ?>
        </table>
        <a href="print.php"><button>Cetak</button></a>
        
    <br><br>
</body>
</html>