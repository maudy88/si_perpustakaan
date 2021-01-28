<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Buku</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_buku WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                
                    <div class="text-center">
                        <h2>Sistem Informasi Perpustakaan Kota Kisaran </h2>
                        <h4>Jalan Cokro Aminoto No. 30, Kisaran Kota <br> Kecamatan Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SELURUH BUKU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <thead>
                                <tr>
                                    <th width="18%"><center>No Buku</center></th>
                                    <th><center>Judul Buku</center></th>
                                    <th width="14%"><center>Penulis</center></th>
                                    <th width="15%"><center>Status</center></th>
                                    <th width="10%">Tgl. Terbit</th>
                                    <th><center>Pemberi</center></th>
                                    <th><center>Peminjam</center></th>
                                </tr>
                        </thead>
                        <tbody>
                            <tr>
                                    <th width="18%"><center><?php echo $data['no_buku']  ?></center></th>
                                    <th><?php echo $data['judul_buku']  ?></th>
                                    <th width="14%"><?php echo $data['penulis_buku']  ?></th>
                                    <th width="15%"><?php echo $data['status']  ?></th>
                                    <th width="10%"><?php echo $data['tgl_terbit']  ?></th>
                                    <th><?php echo $data['pemberi']  ?></th>
                                    <th> <?php echo $data['peminjam']  ?></th>
                            </tr>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Staff Perpustakaan<strong></u><br>
                                        NIK 1274044808990003
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>