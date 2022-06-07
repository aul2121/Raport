<html>
<head>
<title>Hasil</title>
</head>
<body>
<h3 align="center"><blink>Hasil Akhir Nilai</blink></h3>
<table align="center" border="2">
<?php
$hari_ini = date("j-F-y");
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jk=$_POST["jk"] ;
$kls=$_POST["kelas"];
$mp=$_POST["matpel"];
$tugas=$_POST['tgs'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];?>
<?php
$na=(0.10*$tugas)+(0.30*$uts)+(0.50*$uas);
?>

<?php
if ($na <= 40 )
{
$nh = 'E' ;
}
else if ($na <= 50 )
{
$nh = 'D' ;
}

else if ($na <= 70 )
{
$nh = 'C' ;
}
else if ($na <= 80 )
{
$nh = 'B' ;
}
else
{
$nh = 'A' ;
}
?>

<tr>
<th>Tanggal</th>
<th>Nama Siswa</th>
<th>Jenis Kelamin</th>
<th>Kelas</th>
<th>Mata Pelajaran</th>
<th>Nilai Angka</th>
<th>Nilai Huruf</th>
</tr>
<tr>
<td align="center"><?php echo($hari_ini); ?></td>
<td align="center"><?php echo$nim;?></td>
<td align="center"><?php echo$nama;?></td>
<td align="center"><?php echo$jk; ?></td>
<td align="center"><?php echo$kls; ?></td>
<td align="center"><?php echo$mp; ?></td>
<td align="center"><?php echo$na;?></td>
<td align="center"><?php echo$nh;?></td>
</table>
</tr>
<tr>
<a></a></br>
<a></a></br>
</body>
</html>