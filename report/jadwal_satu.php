<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Jadwal Kegiatan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail kegiatan-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM jadwal WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Jadwal Kegiatan di Kantor Camat Air Batu </h2>
                        <h4>Jalan Lintas Sumatera, Air Batu, Kec. Air Batu <br> Kabupaten Asahan, Sumatera Utara, 21272</h4>
                        <hr>
                        <h3>DATA JADWAL KEGIATAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                <td>Nomor Kegiatan</td> <td><?= $data['no_kegiatan'] ?></td>
                                </tr>
                                <tr>
                                <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                                </tr>
                                <tr>
                                <td>Hari</td> <td><?= $data['hari'] ?></td>
                                </tr>
								<tr>
                                <td>Jam</td> <td><?= $data['jam'] ?> hari</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
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
