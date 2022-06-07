<?php
@$aksi = $_GET['aksi'];
 @$judul = 'INPUT SISWA';
 @$btnaksi = 'Simpan';
 @$nimnya = $_GET['nim'];
 @$nim = '';
 @$nama = '';
 @$kelamin = '';
 @$kelas = '';
 @$alamat ='';
 @$nohp = '';

if ($aksi == 'edit') {
  $judul = 'EDIT SISWA';
  $btnaksi = 'Edit';
  $sql = "SELECT * FROM siswa WHERE NIM='$nimnya'";
  $query = mysqli_query($konek, $sql);
  $isi = mysqli_fetch_array($query);
  $nim = $isi[0];
  $nama =  $isi[1];
  $kelamin =  $isi[2];
  $kelas =  $isi[3];
  $alamat = $isi[4];
  $nohp = $isi[5];
}
?>
<div class="row mt-4">
  <div class="col-sm-9 ml-2">
    <div class="card border-dark mb-3 target-left" style="max-width: 50rem;">
  <div class="card-header bg-trdarkansparent border-dark"><?php echo $judul; ?></div>
  <div class="card-body text-dark">
    <form method="post" action="">

  <div class="row">
  <div class="col-5">
    <label for="nim" class="form-label">NIM</label>
    <input type="number" value="<?php echo $nim; ?>" name="nim" class="form-control" id="nim" required="">
  </div>
  <div class="col">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" id="nama" required="">
  </div>
  </div>

   <div class="row">
   <div class="col-5">
    <label for="kelamin" class="form-label">Kelamin</label>
    <select name="kelamin" id="kelamin" class="form-control">
  <option value="">Pilih Kelamin</option>
   <option value='Perempuan'>Perempuan</option>
   <option value='Laki-Laki'>Laki-Laki</option>
</select>  
  </div>
   <div class="col-5">
    <label for="kelas" class="form-label">Kelas</label>
<select name="kelas" id="kelas" class="form-control">
  <option value="">Pilih Kelas</option>
   <option value='11 RPL'>10 TIK</option>
   <option value='11 RPL'>11 RPL</option>
   <option value='11 RPL'>11 MM</option>
   <option value='11 RPL'>12 RPL</option>
   <option value='12 RPL'>12 MM</option>
</select>    
</div>
</div>

  <div class="col-10">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea rows="2" cols="10" name="alamat" class="form-control" id="alamat" required=""><?php echo $alamat; ?></textarea> 
  </div>

  <div class="col-5">
    <label for="nohp" class="form-label">No.HP</label>
    <input type="number" name="nohp" value="<?php echo $nohp; ?>" class="form-control" id="nohp" required=""></textarea> 
  </div>

  <input type="submit" class="btn btn-primary" value="<?php echo $btnaksi; ?>" name="btnaksi">
</form>
</div>
  </div>
  <?php
  //jika tombol simpan di klik 
if (@$_POST['btnaksi'] == 'Simpan') {
  $nim = $_POST ['nim'];
  $nama = $_POST ['nama'];
  $kelamin = $_POST ['kelamin'];
  $kelas = $_POST ['kelas'];
  $alamat = $_POST ['alamat'];
  $nohp = $_POST ['nohp'];
  $sql = "INSERT into siswa VALUES('$nim', '$nama', '$kelamin', '$kelas', '$alamat', '$nohp')";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data Berhasil disimpan</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=siswa'>";

  //jika tombol edit klik 
} else if (@$_POST['btnaksi'] == 'Edit') {
  $nim = $_POST ['nim'];
  $nama = $_POST ['nama'];
  $kelamin = $_POST ['kelamin'];
  $kelas = $_POST ['kelas'];
  $alamat = $_POST ['alamat'];
  $nohp = $_POST ['nohp'];
  $sql = "UPDATE siswa SET NIM='$nim', Nama='$nama', Kelamin='$kelamin', Kelas='$kelas', Alamat='$alamat', No_HP='$nohp' WHERE NIM='$nimnya'";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data berhasil diubah</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=siswa'>";


}
  ?>
 