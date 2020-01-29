<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_pasien WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pasien</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_rawat" class="col-sm-3 control-label">Ruang rawat</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="ruang_rawat" class="form-control">
                                    <option value="Melati I">Melati I</option>
                                    <option value="Melati II">Melati II</option>
                                    <option value="Melati III">Melati III</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_pasien" class="col-sm-3 control-label">Nomor Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_pasien" value="<?=$data['no_pasien']?>"class="form-control" id="inputEmail3" placeholder="Nomor Pasien">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_pasien" class="col-sm-3 control-label">Nama Pasien</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pasien" value="<?=$data['nama_pasien']?>"class="form-control" id="inputEmail3" placeholder="Nama Pasien">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="inputEmail3" placeholder="Nomor Handphone">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="keluarga" class="col-sm-3 control-label">Keluarga</label>
                            <div class="col-sm-9">
                                <input type="text" name="keluarga" value="<?=$data['keluarga']?>"class="form-control" id="inputEmail3" placeholder="Keluarga" >
                            </div>
                        </div>
                        <!--untuk tanggal masuk form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
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
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
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
    $no_pasien=$_POST['no_pasien'];
	$nama_pasien=$_POST['nama_pasien'];
    $no_hp=$_POST['no_hp'];
	$alamat=$_POST['alamat'];
    $keluarga=$_POST['keluarga'];
    $tglmasuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $status=$_POST['status'];
	$keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE data_pasien SET ruang_rawat='$ruang_rawat',no_pasien='$no_pasien',nama_pasien='$nama_pasien',no_hp='$no_hp',alamat='$alamat',
	keluarga='$keluarga',tgl_masuk='$tglmasuk',status='$status',keterangan='$keterangan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



