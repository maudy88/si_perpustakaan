<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Buku Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">

                    <div class="text-center">
                        <h2>Sistem Informasi Perpustakaan Kota Kisaran </h2>
                        <h4>Jalan Cokro Aminoto No. 30, Kisaran Kota <br> Kecamatan Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA BUKU BULAN   <?php echo "$bulanNama $ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
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
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_buku WHERE substr(tgl_terbit,1,7)='$ambilthn-$ambilbln'";
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
                                    
									<td><?php echo $data['no_buku'] ?></td>
                                    <td><?php echo $data['judul_buku'] ?></td>
                                    <td><?php echo $data['penulis_buku'] ?></td>
                                    <td><?php echo $data['status'] ?></td>
									<td><?php echo $data['tgl_terbit'] ?></td>
									<td><?php echo $data['pemberi'] ?></td>
									<td><?php echo $data['peminjam'] ?></td>
                                </tr>
                                
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,  &nbsp <?php date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Staff Perpustakaan<strong></u><br>
                                        NIK. 1074044808990003
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
