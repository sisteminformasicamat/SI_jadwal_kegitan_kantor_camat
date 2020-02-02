<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Jadwal Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_kegiatan" class="col-sm-3 control-label">Nomor Kegiatan</label>
                             <div class="col-sm-9">
                                <input type="text" name="no_kegiatan" value="<?=$data['no_kegiatan']?>"class="form-control" id="inputEmail3" placeholder="Nomor Kegiatan" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_kegiatan" class="col-sm-3 control-label">Nama Kegiatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_kegiatan" value="<?=$data['nama_kegiatan']?>" class="form-control" id="inputPassword3" placeholder="Nama Kegiatan">
                            </div>
                        </div>

                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal </label>
                            <!--untu tahun-->
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
                        <!--end tanggal--> 
                        
                        <div class="form-group">
                            <label for="hari" class="col-sm-3 control-label">Hari</label>
                            <div class="col-sm-9">
                                <input type="text" name="hari" value="<?=$data['hari']?>" class="form-control" id="inputPassword3" placeholder="Hari">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jam" class="col-sm-3 control-label">Jam</label>
                            <div class="col-sm-9">
                                <input type="text" name="jam" value="<?=$data['jam']?>" class="form-control" id="inputPassword3" placeholder="Jam Pelaksanaan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Jadwal</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=jadwal&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Jadwal
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
    $tanggal=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $hari=$_POST['hari'];
    $jam=$_POST['jam'];
    //buat sql
    $sql="UPDATE jadwal SET no_kegiatan = '$no_kegiatan', nama_kegiatan = '$nama_kegiatan', tanggal='$tanggal', hari='$hari', jam='$jam',  WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



