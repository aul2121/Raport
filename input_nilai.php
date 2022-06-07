<?php
@$aksi = $_GET['aksi'];
 @$judul = 'INPUT NILAI';
 @$btnaksi = 'Simpan';
 @$nimnya = $_GET['nim'];
 @$nim = '';
 @$kelas ='';
 @$semester ='';
 @$mapel = '';
 @$tgs1 = '';
 @$tgs2 = '';
 @$tgs3 = '';
 @$uts = '';
 @$uas = '';

if ($aksi == 'edit') {
  $judul = 'EDIT NILAI';
  $btnaksi = 'Edit';
  $sql = "SELECT * FROM nilai WHERE NIM='$nimnya'";
  $query = mysqli_query($konek, $sql);
  $isi = mysqli_fetch_array($query);
  $nim = $isi[0];
  $kelas =  $isi[1];
  $semester = $isi[2];
  $mapel = $isi[3];
  $tgs1 = $isi[4];
  $tgs2 = $isi[5];
  $tgs3 = $isi[6];
  $uts = $isi[7];
  $uas = $isi[8];
} 
?>
<div class="row mt-4">
  <div class="col-sm-8 ml-3">
    <div class="card border-dark mb-5 target-left" style="max-width: 50rem;">
  <div class="card-header bg-trdarkansparent border-dark"><?php echo $judul; ?></div>
  <div class="card-body text-dark">
    <form method="post" action="">

  <div class="row">
  <div class="col">
    <label for="nim" class="form-label">NIM</label>
    <select name="nim" id="" class="form-control">
      <option value="">Pilih Siswa</option>
      <?php  
      $sql = "SELECT * FROM siswa";
      $query = mysqli_query($konek, $sql);
      while ($data = mysqli_fetch_array($query)) {
        echo "<option value=$data[NIM]>$data[NIM] - $data[Nama]</option>";
      }
      ?>
    </select>
  </div>
    <div class="col">
    <label for="kelas" class="form-label">Kelas</label>
  <select name="kelas" id="kelas" class="form-control">
     <option value="">Pilih Kelas</option>
   <option value='11 RPL'>10 TIK</option>
   <option value='11 RPL'>11 RPL</option>
   <option value='11 MM'>11 MM</option>
   <option value='11 MM'>12 RPL</option>
   <option value='11 MM'>12 MM</option>
    </select>
  </div>
  </div>

   <div class="row">
   <div class="col">
    <label for="semester" class="form-label">Semester</label>
    <select name="semester" id="semester" class="form-control">
     <option value="">Pilih Semester</option>
   <option value='Ganjil'>Ganjil</option>
   <option value='Genap'>Genap</option>
    </select>
  </div>
  <div class="col">
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
   <option value='B.Sunda'>Bahasa Sunda</option>
 </select>
  </div>
  </div>

   <div class="row">
   <div class="col">
    <label for="tgs1" class="form-label">Nilai Tugas 1</label>
    <input type="text" name="tgs1" value="<?php echo $tgs1; ?>" class="form-control" id="tgs1" required="">
  </div>
   <div class="col">
    <label for="tgs2" class="form-label">Nilai Tugas 2</label>
    <input type="text" name="tgs2" value="<?php echo $tgs2; ?>" class="form-control" id="tgs2" required="">
  </div>
   <div class="col">
    <label for="tgs3" class="form-label">Nilai Tugas 3</label>
    <input type="text" name="tgs3" value="<?php echo $tgs3; ?>" class="form-control" id="tgs3" required="">
  </div>
  </div>

   <div class="row">
   <div class="col">
    <label for="uts" class="form-label">Nilai UTS</label>
    <input type="text" name="uts" value="<?php echo $uts; ?>" class="form-control" id="uts" required="">
  </div>
   <div class="col">
    <label for="uas" class="form-label">Nilai UAS</label>
    <input type="text" name="uas" value="<?php echo $uas; ?>" class="form-control" id="uas" required="">
  </div>
  </div>

  <input type="submit" class="btn btn-primary" value="<?php echo $btnaksi; ?>" name="btnaksi">
</form>
</div>
  </div>
  <?php
  //jika tombol simpan di klik 
if (@$_POST['btnaksi'] == 'Simpan') {
  $nim = $_POST ['nim'];
  $kelas = $_POST ['kelas'];
  $semester = $_POST ['semester'];
  $mapel = $_POST ['mapel'];
  $tgs1 = $_POST ['tgs1'];
  $tgs2 = $_POST ['tgs2'];
  $tgs3 = $_POST ['tgs3'];
  $uts = $_POST ['uts'];
  $uas = $_POST ['uas'];
  $sql = "INSERT into nilai VALUES('$nim', '$kelas', '$semester', '$mapel', '$tgs1', '$tgs2', '$tgs3', '$uts', '$uas')";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data Berhasil disimpan</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=nilai'>";

  //jika tombol edit klik 
} else if (@$_POST['btnaksi'] == 'Edit') {
  $nim = $_POST ['nim'];
  $kelas = $_POST ['kelas'];
  $semester = $_POST ['semester'];
  $mapel = $_POST ['mapel'];
  $tgs1 = $_POST ['tgs1'];
  $tgs2 = $_POST ['tgs2'];
  $tgs3 = $_POST ['tgs3'];
  $uts = $_POST ['uts'];
  $uas = $_POST ['uas'];
  $sql = "UPDATE nilai SET NIM='$nim', Kelas='$kelas', Semester='$semester', Mapel='$mapel', Nilai_Tgs_1='$tgs1', Nilai_Tgs_2='$tgs2', Nilai_Tgs_3='$tgs3', Nilai_Uts='$uts', Nilai_Uas='$uas'  WHERE NIM='$nimnya'";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data berhasil diubah</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=nilai'>";


}
  ?>