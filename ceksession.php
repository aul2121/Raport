<?php
session_start();
if ($_SESSION['status'] == "") {
	echo "ANDA TIDAK BERHAK MENGAKSES";
	header("location:login.php");
}
?>
