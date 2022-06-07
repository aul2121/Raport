 <?php
@$aksi = $_GET['aksi'];
 @$nimnya = $_GET['nim'];
?>
  </div>
  <div class="col-sm">
    <table class="table table-bordered" id="tabelsiswa">
        <thead class="table-dark">
      <tr>
<th>NIM</th>
<th>Nama</th>
<th>Kelamin</th>
<th>Kelas</th>
<th>Alamat</th>
<th>No.HP</th>
<th>Aksi</th>
</tr>
<tbody>
  <?php
  $sql = "SELECT * FROM siswa";
  $query= mysqli_query($konek, $sql);
  while ($data = mysqli_fetch_array($query)) {
   echo "<tr>
    <td>$data[NIM]</td>
    <td>$data[Nama]</td>
    <td>$data[Kelamin]</td>
    <td>$data[Kelas]</td>
    <td>$data[Alamat]</td>
    <td>$data[No_HP]</td>
    <td> <a class='btn btn-sm btn-primary' href='?hal=input_siswa&aksi=edit&nim=$data[NIM]'>Edit</a>
    <a class='btn btn-sm btn-danger' href='?hal=siswa&aksi=hapus&nim=$data[NIM]'>Hapus</a></td>
  </tr>";
  }

   if($aksi == 'hapus') {
  $sql = "DELETE FROM siswa WHERE NIM='$nimnya'";
  $query = mysqli_query($konek, $sql);
  echo "<meta http-equiv='refresh' content='1;url=?hal=siswa'>";
}
  ?>
  </tbody>
</table>
  </div>
</div>