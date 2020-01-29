<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pasien</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM data_pasien WHERE id='" . $_GET ['id'] . "'";
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
                        <h2>Sistem Informasi Data Pasien Rumah Sakit H. Abdul Manan Simatupang </h2>
                        <h4>Jalan Sisingamangaraja No. 315, Kisaran Kota, Kec. Kisaran Timur<br> Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PASIEN RUMAH SAKIT</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Ruang Rawat</td> <td><?= $data['ruang_rawat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pasien</td> <td><?= $data['nama_pasien'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Keluarga</td> <td><?= $data['keluarga'] ?></td>
                                </tr>
								<tr>
                                    <td>Nomor Handphone</td> <td><?= $data['no_hp'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
