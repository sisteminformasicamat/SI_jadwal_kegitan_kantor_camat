<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Kegiatan Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail kegiatan-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Jadwal Kegiatan di Kantor Camat Air Batu </h2>
                        <h4>Jalan Lintas Sumatera, Air Batu, Kec. Air Batu <br> Kabupaten Asahan, Sumatera Utara, 21272</h4>
                        <hr>
                        <h3> DATA KEGIATAN TAHUN <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th>
                                    <center>Nomor <br> Kegiatan</center></th><th width="15%">
                                    <center>Nama <br> Kegiatan</center></th><th width="15%">
                                    <th>Tanggal</th><th width="14%">
                                    <center>Pelaksana</center></th><th width="10%">
                                    <th>Lokasi</th><th width="14%"></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM kegiatan WHERE substr(tanggal,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_kegiatan'] ?></td>
                                    <td><?= $data['nama_kegiatan'] ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['pelaksana'] ?></td>
                                    <td><?= $data['lokasi'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Air Batu,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Camat Air Batu, S.Hum<strong></u><br>
                                        NIP.1285749302420
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
