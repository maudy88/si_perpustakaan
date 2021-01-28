<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Buku</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_buku WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        
                        <tr>
                            <td>No Buku</td> <td><?= $data['no_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Judul Buku</td> <td><?= $data['judul_buku'] ?></td>
                        </tr>
                        
                        <tr>
                            <td>Penulis</td> <td><?= $data['penulis_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Terbit</td> <td><?= $data['tgl_terbit'] ?></td>
                        </tr>
                        <tr>
                            <td>Pemberi</td> <td><?= $data['pemberi'] ?></td>
                        </tr>
                        <tr>
                            <td>Peminjam</td> <td><?= $data['peminjam'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=member&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Buku </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>