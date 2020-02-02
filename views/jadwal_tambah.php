<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE no_kegiatan ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Jadwal Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="noke" class="col-sm-3 control-label">Nomor Kegiatan</label>
                            <div class="col-sm-9">
								<input type="text" name="noke" value="<?=$data['no_kegiatan']?>" class="form-control" id="inputEmail3" placeholder="Nomor Kegiatan" readonly="true">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="namakegiatan" class="col-sm-3 control-label">Nama Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kegiatan" class="form-control" id="inputEmail3" placeholder="Nama Kegiatan">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Tanggal">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="hari" class="col-sm-3 control-label">Hari</label>
                            <div class="col-sm-9">
                                <input type="text" name="hari" class="form-control" id="inputEmail3" placeholder="Hari">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jam" class="col-sm-3 control-label">Jam</label>
                            <div class="col-sm-9">
                                <input type="text" name="jam" class="form-control" id="inputEmail3" placeholder="Jam Pelaksanaan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Jadwal</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kegiatan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kegiatan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $noke=$_POST['no_kegiatan'];
    $namakegiatan=$_POST['nama_kegiatan'];
	$tanggal=$_POST['tanggal'];
	$hari=$_POST['hari'];
    $jam=$_POST['jam'];
    //buat sql
    $sql="INSERT INTO jadwal VALUES ('$noke','$namakegiatan','$tanggal','$hari','$jam','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Kegiatan Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
