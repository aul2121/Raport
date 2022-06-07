<?php
@$aksi = $_GET['aksi'];
@$nipnya = $_GET['nip'];
?>

  </div>
  <div class="col-sm">
    <table class="table table-bordered" id="tabelguru">
        <thead class="table-dark">
      <tr>
<th>NIP</th>
<th>Nama</th>
<th>Mata Pelajaran</th>
<th>Aksi</th>
</tr>
<tbody>
  <?php
  $sql = "SELECT * FROM guru";
  $query= mysqli_query($konek, $sql);
  while ($data = mysqli_fetch_array($query)) {
   echo "<tr>
    <td>$data[NIP]</td>
    <td>$data[Nama]</td>
    <td>$data[Mapel]</td>
    <td> <a class='btn btn-sm btn-primary' href='?hal=input_guru&aksi=edit&nip=$data[NIP]'>Edit</a>
    <a class='btn btn-sm btn-danger' href='?hal=guru&aksi=hapus&nip=$data[NIP]'>Hapus</a></td>
  </tr>";
  }

  if($aksi == 'hapus') {
  $sql = "DELETE FROM guru WHERE NIP='$nipnya'";
  $query = mysqli_query($konek, $sql);
  echo "<meta http-equiv='refresh' content='1;url=?hal=guru'>";
}
  ?>
  </tbody>
</table>
  </div>
</div>