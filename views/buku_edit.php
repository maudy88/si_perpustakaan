<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_buku WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">No Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_buku" value="<?=$data['no_buku']?>"class="form-control" id="inputEmail3" placeholder="Nomor Rak/Lemari">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" value="<?=$data['judul_buku']?>"class="form-control" id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Penulis</label>
                            <div class="col-sm-9">
                                <input type="text" name="penulis_buku" value="<?=$data['penulis_buku']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
						
							
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Terbit</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="pemberi" class="col-sm-3 control-label">Pemberi</label>
                            <div class="col-sm-9">
                                <input type="text" name="pemberi" value="<?=$data['pemberi']?>" class="form-control" id="inputPassword3" placeholder="Pengantar Berkas">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" value="<?=$data['peminjam']?>" class="form-control" id="inputPassword3" placeholder="Penerima Berkas">
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
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Buku</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
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
$no=$_POST['no_buku'];
$judul=$_POST['judul_buku'];
$penulis=$_POST['penulis_buku'];
$tgl_terbit=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
$status=$_POST['status'];
$peminjam=$_POST['peminjam'];
$pemberi=$_POST['pemberi'];
$ket=$_POST['keterangan'];
    
    //buat sql
    $sql="UPDATE tbl_buku SET id = '',penulis_buku='$penulis',judul_buku='$judul',no_buku='$no',tgl_terbit='$tgl_terbit',peminjam='$peminjam',pemberi='$pemberi',status='$status',keterangan='$ket' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



