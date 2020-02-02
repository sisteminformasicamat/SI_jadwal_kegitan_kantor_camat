<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data </h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="no_kegiatan" class="col-sm-3 control-label">Nomor Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kegiatan" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Kegiatan yang Tertera" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_kegiatan" class="col-sm-3 control-label">Nama Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kegiatan"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Kegiatan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pelaksana" class="col-sm-3 control-label">Pelaksana</label>
                            <div class="col-sm-9">
                                <input type="text" name="pelaksana" class="form-control" id="inputPassword3" placeholder="Inputkan Pelaksana Kegiatan" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="lokasi" class="col-sm-3 control-label">Lokasi Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="lokasi" class="form-control" id="inputPassword3" placeholder="Inputkan Lokasi Kegiatan" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan Kegiatan">
                            </div>
                        </div>

                          <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Kegiatan</button>
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
  $no_kegiatan=$_POST['no_kegiatan'];
	$nama_kegiatan=$_POST['nama_kegiatan'];
	$pelaksana=$_POST['pelaksana'];
  $lokasi=$_POST['lokasi'];
	$ket=$_POST['ket'];
    $tanggal=$_POST['tanggal'];
    //buat sql
    $sql="INSERT INTO kegiatan VALUES ('','$no_kegiatan','$nama_kegiatan','$pelaksana','$lokasi','$ket','$tanggal')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Kegiatan Error");
    if ($query){
        echo "<script>window.location.assign('?page=kegiatan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
