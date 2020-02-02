<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Jadwal Kegiatan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail kegiatan-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Jadwal Kegiatan di Kantor Camat Air Batu </h2>
                        <h4>Jalan Lintas Sumatera, Air Batu, Kec. Air Batu <br> Kabupaten Asahan, Sumatera Utara, 21272</h4>
                        <hr>
                        <h3>DATA SELURUH JADWAL KEGIATAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
                                    <th width="18%">Nomor Kegiatan</th>
                                    <th>Tanggal</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM jadwal";
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
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['hari'] ?></td>
                                    <td><?= $data['jam'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Air Batu,  <?= date("d-m-Y") ?>
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
