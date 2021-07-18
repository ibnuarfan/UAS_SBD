<?php include("koneksi.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
    <br>
		<header>
    <h1><center>Data Pembayaran </center></h1>
    <p>&nbsp;</p>
		</header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>
					<div class='panel panel-success'>					
                        <table style="margin-left:auto;margin-right:auto" border="1">
							  <thead>
								<tr>
								  <th><center>ID Pembayaran</center></th>
								  <th><center>ID Transaksi</center></th>
                                  <th><center>Tanggal</center></th>
								  <th><center>Jumlah</center></th>
								  
								</tr>
							  </thead>
							  <tbody> 
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
                        </tr>
                    </tbody>
                    <script>
                      window.print();
                    </script>
                    <?php 
                    }
                  ?>
                </tbody>
              </table>
                          <div class='pull-right'>
                          <br><br><br>
                            Cikarang Barat, 03 juli 2021 <br>
                            <b><center>Admin</center></b>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                                          <p>&nbsp;</p>
                            <b><center>IBNU SOFFI ARFAN</center></b>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>