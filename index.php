<?php
include "ceksession.php" 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
  <link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.min.css"/>
  <link rel="stylesheet" type="text/css" href="DataTables/buttons.dataTables.min.css"/>
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>
  	<script type="text/javascript" src="js/bootstrap.min.js">
  	</script>
	<title>Sistem Informasi Nilai Siswa</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SINIS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?hal=home">HOME</a>
        </li>

         <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             ADMIN
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
    <li><a class="dropdown-item" href="?hal=admin">DATA ADMIN</a></li>
    <li><a class="dropdown-item" href="?hal=input_admin">INPUT ADMIN</a></li>
    </ul>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             GURU
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
    <li><a class="dropdown-item" href="?hal=guru">DATA GURU</a></li>
    <li><a class="dropdown-item" href="?hal=input_guru">INPUT GURU</a></li>
    </ul>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           SISWA
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
    <li><a class="dropdown-item" href="?hal=siswa">DATA SISWA</a></li>
    <li><a class="dropdown-item" href="?hal=input_siswa">TAMBAH SISWA</a></li>
    </ul>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             NILAI
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
    <li><a class="dropdown-item" href="?hal=nilai">DATA NILAI</a></li>
    <li><a class="dropdown-item" href="?hal=input_nilai">INPUT NILAI</a></li>
    <li><hr class="dropdown-divider"></li>
    </ul>
    </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Logout.php">LOGOUT</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <?php
  include "koneksi.php";
  @$hal = $_GET['hal'];
  if ($hal == 'admin') {
    include "admin.php";
  } else if ($hal == 'guru') {
      include "guru.php";
  } else if ($hal == 'siswa') {
      include "siswa.php"; 
  } else if ($hal == 'kelas') {
      include "kelas.php";
  } else if ($hal == 'nilai') {
       include "nilai.php";  
  } else if ($hal == 'input_siswa') {
       include "input_siswa.php"; 
  } else if ($hal == 'input_guru') {
       include "input_guru.php"; 
  } else if ($hal == 'input_nilai') {
       include "input_nilai.php";
  } else if ($hal == 'input_admin') {
       include "input_admin.php";    
  }
  else if ($hal == 'home' || $hal == ''){
    include "home.php";
   }
   ?>
</div>
</body>
<script type="text/javascript" src="DataTables/jquery-3.5.1.js"></script>
<script type="text/javascript" src="DataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="DataTables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="DataTables/buttons.print.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#tabeladmin').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
    $('#tabelguru').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
     $('#tabelsiswa').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
      } );
     $('#tabelnilai').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
  </script>
</html>