<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_buku WHERE no_buku ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pinjaman Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nope" class="col-sm-3 control-label">No. Buku</label>
                            <div class="col-sm-9">
								<input type="text" name="no_buku" value="<?=$data['no_buku']?>" class="form-control" id="inputEmail3" placeholder="Nomor Perkara" readonly="true">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglPinjam" class="form-control" id="inputEmail3" placeholder="Tanggal Pinjam">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Peminjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_buku=$_POST['no_buku'];
	$peminjam=$_POST['peminjam'];
	$tglPinjam=$_POST['tglPinjam'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO peminjaman VALUES ('$no_buku','$peminjam','$tglPinjam','Belum Kembali','','$ket','')";
	$sqlBuku="UPDATE tbl_buku SET status='Dipinjam' WHERE no_buku='$nope'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
	$queryBuku=  mysqli_query($koneksi, $sqlBuku) or die ("SQL Simpan Buku Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
