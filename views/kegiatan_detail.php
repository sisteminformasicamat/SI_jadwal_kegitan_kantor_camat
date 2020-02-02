<div class="container">
    <div class="row">
        <div class="col-xs-12"> 
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail kegiatan-->
                    <?php
                    $sql = "SELECT *FROM kegiatan WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                        <td width="200">Nomor Kegiatan</td> <td><?= $data['no_kegiatan'] ?></td>
                        </tr>
                        <tr>
                        <td width="200">Nama Kegiatan</td> <td><?= $data['nama_kegiatan'] ?></td>
                        </tr>
                        <tr>
                        <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                        <td>Pelaksana</td> <td><?= $data['pelaksana'] ?></td>
                        </tr>
                        <tr>
                        <td width="200">Lokasi Kegiatan</td> <td><?= $data['lokasi'] ?></td>
                        </tr>
						<tr>
                        <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=kegiatan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Kegiatan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

