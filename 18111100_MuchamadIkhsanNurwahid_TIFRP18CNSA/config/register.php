<?php
require_once "koneksi.php";

$nama = $_POST["nama"];
$tanggallahir = $_POST["tanggallahir"];
$pekerjaan = $_POST["pekerjaan"];
$email = $_POST["email"];
$password = $_POST["password"];


$q = $database_connection->prepare("INSERT TO `anggota` (`id`, `nama`, `tanggallahir`, `pekerjaan`, `email`, `password`)
Values (NULL, ?, ?, ?, ?, SHA1(?));");
$q->execute([$nama, $tanggallahir, $pekerjaan, $email,$password]);
header("Location:../Register.php");
?>