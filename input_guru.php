<?php
@$aksi = $_GET['aksi'];
 @$judul = 'INPUT GURU';
 @$btnaksi = 'Simpan';
 @$nipnya = $_GET['nip'];
 @$nip = '';
 @$nama = '';
 @$mapel = '';

if ($aksi == 'edit') {
  $judul = 'EDIT GURU';
  $btnaksi = 'Edit';
  $sql = "SELECT * FROM guru WHERE NIP='$nipnya'";
  $query = mysqli_query($konek, $sql);
  $isi = mysqli_fetch_array($query);
  $nip = $isi[0];
  $nama =  $isi[1];
  $mapel = $isi[2];
} 
?>
<div class="row mt-3">
  <div class="col-sm-4 ml-2">
    <div class="card border-dark mb-3 target-left" style="max-width: 50rem;">
  <div class="card-header bg-trdarkansparent border-dark"><?php echo $judul; ?></div>
  <div class="card-body text-dark">
    <form method="post" action="">
  <div class="mb-3">
    <label for="nip" class="form-label">NIP</label>
    <input type="number" value="<?php echo $nipnya; ?>" name="nip" class="form-control" id="nip" required="">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" id="nama" required="">
  </div>
  <div class="mb-3">
    <label for="mapel" class="form-label">Mata Pelajaran</label>
    <select name="mapel" id="mapel" class="form-control">
     <option value="">Pilih Mata Pelajaran</option>
   <option value='PBO'>PBO</option>
   <option value='WEB'>WEB</option>
   <option value='B.Inggris'>Bahasa Inggris</option>
   <option value='PKK'>PKK</option>
   <option value='KWU'>KWU</option>
   <option value='PPKN'>PPKN</option>
   <option value='Basis Data'>Basis Data</option>
   <option value='Penjas'>Penjas</option>
   <option value='PPL'>PPL</option>
   <option value='B.Indonesia'>Bahasa Indonesia</option>
   <option value='PLH'>PLH</option>
   <option value='Matematika'>Matematika</option>
   <option value='BK'>BK</option>
   <option value='PAI'>PAI</option>
   <option value='B.Sunda'>Bahasa Sunda</option></select>

  <input type="submit" class="btn btn-primary" value="<?php echo $btnaksi; ?>" name="btnaksi">
</form>
</div>
  </div>
</div>
  <?php
  //jika tombol simpan di klik 
if (@$_POST['btnaksi'] == 'Simpan') {
  $nip = $_POST ['nip'];
  $nama = $_POST ['nama'];
  $mapel = $_POST ['mapel'];
  $sql = "INSERT into guru VALUES('$nip', '$nama', '$mapel')";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data Berhasil disimpan</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=guru'>";

  //jika tombol edit klik 
} else if (@$_POST['btnaksi'] == 'Edit') {
  $nip = $_POST ['nip'];
  $nama = $_POST ['nama'];
  $mapel = $_POST ['mapel'];
  $sql = "UPDATE guru SET NIP='$nip', Nama='$nama', Mapel='$mapel' WHERE NIP='$nipnya'";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data berhasil diubah</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=guru'>";


}
  ?>