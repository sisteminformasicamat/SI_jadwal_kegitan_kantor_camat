<div class="container"> 
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Jadwal Kegiatan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail kegiatan-->
                    <?php
                    $sql = "SELECT *FROM jadwal WHERE id='" . $_GET ['id'] . "'";
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
                            <td>Hari</td> <td><?= $data['hari'] ?></td>
                        </tr>
						<tr>
                            <td>Jam</td> <td><?= $data['jam'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=jadwal&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Jadwal </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

