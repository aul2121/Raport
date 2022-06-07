<?php
@$aksi = $_GET['aksi'];
 @$nimnya = $_GET['nim'];
?>
  </div>
  <div class="col-sm">
    <table class="table table-bordered" id="tabelnilai">
        <thead class="table-dark">
      <tr>
<th>NIM</th>
<th>Kelas</th>
<th>Semester</th>
<th>Mata Pelajaran</th>
<th>Nilai Tugas 1</th>
<th>Nilai Tugas 2 </th>
<th>Nilai Tugas 3</th>
<th>Nilai UTS</th>
<th>Nilai UAS</th>
<th>Aksi</th>
</tr>
<tbody>
  <?php
  $sql = "SELECT * FROM nilai";
  $query= mysqli_query($konek, $sql);
  while ($data = mysqli_fetch_array($query)) {
   echo "<tr>
    <td>$data[NIM]</td>
    <td>$data[Kelas]</td>
    <td>$data[Semester]</td>
    <td>$data[Mapel]</td>
    <td>$data[Nilai_Tgs_1]</td>
    <td>$data[Nilai_Tgs_2]</td>
    <td>$data[Nilai_Tgs_3]</td>
    <td>$data[Nilai_Uts]</td>
    <td>$data[Nilai_Uas]</td>
    <td> <a class='btn btn-sm btn-primary' href='?hal=input_nilai&aksi=edit&nim=$data[NIM]'>Edit</a>
    <a class='btn btn-sm btn-danger' href='?hal=nilai&aksi=hapus&nim=$data[NIM]'>Hapus</a></td>
  </tr>";
  }
   if($aksi == 'hapus') {
  $sql = "DELETE FROM nilai WHERE NIM='$nimnya'";
  $query = mysqli_query($konek, $sql);
  echo "<meta http-equiv='refresh' content='1;url=?hal=nilai'>";
}
  ?>
  </tbody>
</table>
  </div>
</div>