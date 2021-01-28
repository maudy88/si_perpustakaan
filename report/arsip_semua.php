<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Buku</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perpustakaan Kota Kisaran </h2>
                        <h4>Jalan Cokro Aminoto No. 30, Kisaran Kota <br> Kecamatan Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SELURUH BUKU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
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
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_buku";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['no_buku'] ?></td>
                                    <td><?= $data['judul_buku'] ?></td>
                                    <td><?= $data['penulis_buku'] ?></td>
                                    <td><?= $data['status'] ?></td>
									<td><?= $data['tgl_terbit'] ?></td>
									<td><?= $data['pemberi'] ?></td>
									<td><?= $data['peminjam'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Staff Perpustakaan<strong></u><br>
                                        NIK 1074044808990003
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>