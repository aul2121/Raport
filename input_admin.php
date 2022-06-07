<?php
@$aksi = $_GET['aksi'];
 @$judul = 'INPUT ADMIN';
 @$btnaksi = 'Simpan';
 @$idnya = $_GET['id'];
 @$id = '';
 @$nama = '';
 @$username ='';
 @$password ='';
 @$level = '';

if ($aksi == 'edit') {
  $judul = 'EDIT ADMIN';
  $btnaksi = 'Edit';
  $sql = "SELECT * FROM admin WHERE ID='$idnya'";
  $query = mysqli_query($konek, $sql);
  $isi = mysqli_fetch_array($query);
  $id = $isi[0];
  $nama =  $isi[1];
  $username = $isi[2];
  $password = $isi[3];
  $level = $isi[4];
} 
?>
<div class="row mt-3">
  <div class="col-sm-6 ml-2">
    <div class="card border-dark mb-3 target-left" style="max-width: 50rem;">
  <div class="card-header bg-trdarkansparent border-dark"><?php echo $judul; ?></div>
  <div class="card-body text-dark">
    <form method="post" action="">

  <div class="row">
  <div class="col-4">
    <label for="id" class="form-label">ID</label>
    <input type="number" value="<?php echo $idnya; ?>" name="id" class="form-control" id="id" required="">
  </div>

  <div class="col">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" id="nama" required="">
  </div>
  </div>

  <div class="row">
  <div class="col">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" id="username" required="">
  </div>
   <div class="col">
    <label for="password" class="form-label">Password</label>
    <input type="text" name="password" value="<?php echo $password; ?>" class="form-control" id="password" required="">
  </div>
  </div>

   <div class="col-5">
    <label for="level" class="form-label">Level</label>
<select name="level" id="level" class="form-control">
  <option value="">Pilih Level</option>
   <option value='admin'>admin</option>
   <option value='guru'>guru</option>
   <option value='siswa'>siswa</option>
</select>  
</div>
   
  <input type="submit" class="btn btn-primary" value="<?php echo $btnaksi; ?>" name="btnaksi">
</form>
</div>
  </div>
  <?php
  //jika tombol simpan di klik 
if (@$_POST['btnaksi'] == 'Simpan') {
  $id = $_POST ['id'];
  $nama = $_POST ['nama'];
  $username = $_POST ['username'];
  $password = $_POST ['password'];
  $level = $_POST ['level'];
  $sql = "INSERT into admin VALUES('$id', '$nama', '$username', md5('$password'), '$level')";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data Berhasil disimpan</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=admin'>";

  //jika tombol edit klik 
} else if (@$_POST['btnaksi'] == 'Edit') {
  $id = $_POST ['id'];
  $nama = $_POST ['nama'];
  $username = $_POST ['username'];
  $password = $_POST ['password'];
  $level = $_POST ['level'];
  $sql = "UPDATE admin SET ID='$id', Nama='$nama', username='$username', password=md5('$password'), level='$level' WHERE ID='$idnya'";
  $query= mysqli_query($konek, $sql);
  echo "<span class='badge badge-primary'>Data berhasil diubah</span>";
  echo "<meta http-equiv='refresh' content='1;url=?hal=admin'>";


}
  ?>