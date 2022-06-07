 <?php
@$aksi = $_GET['aksi'];
@$idnya = $_GET['id'];
?>
  </div>
  <div class="col-sm">
    <table class="table table-bordered" id="tabeladmin">
        <thead class="table-dark">
      <tr>
<th>ID</th>
<th>Nama</th>
<th>Username</th>
<th>Password</th>
<th>Level</th>
<th>Aksi</th>
</tr>
<tbody>
  <?php
  $sql = "SELECT * FROM admin";
  $query= mysqli_query($konek, $sql);
  while ($data = mysqli_fetch_array($query)) {
   echo "<tr>
    <td>$data[ID]</td>
    <td>$data[Nama]</td>
    <td>$data[username]</td>
    <td>$data[password]</td>
    <td>$data[level]</td>
    <td> <a class='btn btn-sm btn-primary' href='?hal=input_admin&aksi=edit&id=$data[ID]'>Edit</a>
    <a class='btn btn-sm btn-danger' href='?hal=admin&aksi=hapus&id=$data[ID]'>Hapus</a></td>
  </tr>";
  }
  
  if($aksi == 'hapus') {
  $sql = "DELETE FROM admin WHERE ID='$idnya'";
  $query = mysqli_query($konek, $sql);
  echo "<meta http-equiv='refresh' content='1;url=?hal=admin'>";
}
?>
  </tbody>
</table>
  </div>
</div>