<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">


						 <div class="form-group">
                            <label for="no_buku" class="col-sm-3 control-label">No Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_buku" class="form-control" id="inputEmail3" placeholder="Ketikkan No Buku" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" class="form-control" id="inputEmail3" placeholder="Ketikkan Judul Buku" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="penulis_buku" class="col-sm-3 control-label">Penulis</label>
                            <div class="col-sm-9">
                                <input type="text" name="penulis_buku" class="form-control" id="inputEmail3" placeholder="Ketikkan Nama Penulis" required>
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="tgl_terbit" class="col-sm-3 control-label">Tanggal Terbit</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_terbit" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Dipinjam">Dipinjam</option>
									
								</select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Pemberi</label>
                            <div class="col-sm-9">
                                <input type="text" name="pemberi" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  
	$no=$_POST['no_buku'];
	$judul=$_POST['judul_buku'];
	$penulis=$_POST['penulis_buku'];
  $tglterbit=$_POST['tgl_terbit'];
  $status=$_POST['status'];
  $peminjam=$_POST['peminjam'];
  $pemberi=$_POST['pemberi'];
	$ket=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO tbl_buku VALUES ('','$penulis','$judul','$no','$tglterbit','$peminjam','$pemberi','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
