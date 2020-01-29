<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pasien</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_rawat" class="col-sm-3 control-label">Ruang Rawat</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruang_rawat" class="form-control">
                                    <option value="Melati I">Melati I</option>
                                    <option value="Melati II">Melati II</option>
                                    <option value="Melati III">Melati III</option>
                                    <option value="Melati IV">Melati IV</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_pasien" class="col-sm-3 control-label">Nomor Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_pasien" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Pasien" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_pasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pasien" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pasien" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Handphone" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Keluarga Pasien" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keluarga" class="col-sm-3 control-label">Keluarga</label>
                            <div class="col-sm-9">
                                <input type="text" name="keluarga"class="form-control" id="inputEmail3" placeholder="Inputkan Keluarga Terdekat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>



                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Gawat Darurat">Gawat Darurat</option>
									<option value="Kritis">Kritis</option>
									<option value="Ringan">Ringan</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $ruang_rawat=$_POST['ruang_rawat'];
	$nomor=$_POST['no_pasien'];
	$nama=$_POST['nama_pasien'];
	$no_hp=$_POST['no_hp'];
    $alamat=$_POST['alamat'];
	$keluarga=$_POST['keluarga'];
    $tglmasuk=$_POST['tgl_masuk'];
    $status=$_POST['status'];
	$ket=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO data_pasien VALUES ('','$ruang_rawat','$nomor','$nama','$no_hp','$alamat','$keluarga','$tglmasuk','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
