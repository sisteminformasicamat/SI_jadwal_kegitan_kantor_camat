<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Jadwal Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_kegiatan" class="col-sm-3 control-label">Nomor Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kegiatan" value="<?=$data['no_kegiatan']?>"class="form-control" id="inputEmail3" placeholder="Nomor Kegiatan" >
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_kegiatan" class="col-sm-3 control-label">Nama Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kegiatan" value="<?=$data['nama_kegiatan']?>"class="form-control" id="inputEmail3" placeholder="Nama Kegiatan">
                            </div>
                        </div>
	                   <div class="form-group">
                            <label for="pelaksana" class="col-sm-3 control-label">Pelaksana</label>
                            <div class="col-sm-9">
                                <input type="text" name="pelaksana" value="<?=$data['pelaksana']?>"class="form-control" id="inputEmail3" placeholder="Pelaksana">
                            </div>
                        </div>     

                        <div class="form-group">
                            <label for="lokasi" class="col-sm-3 control-label">Lokasi Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="lokasi" value="<?=$data['lokasi']?>" class="form-control" id="inputPassword3" placeholder="Lokasi Kegiatan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>

                         <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal</label>
                            <!--untuk tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2020;$i>1980;$i--) {?>
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
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Kegiatan </button>
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
    $tanggal=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    //buat sql
    $sql="UPDATE kegiatan SET no_kegiatan='$no_kegiatan',nama_kegiatan='$nama_kegiatan',pelaksana='$pelaksana',lokasi='$lokasi',ket='$ket',tanggal='$tanggal' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=kegiatan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>

