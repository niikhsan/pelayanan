<?php
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "m_pelanggan.php";

$connection = new Database($host, $user, $pass, $database);
$pelgn = new Pelanggan($connection);

$no_identitas = $_POST['no_identitas'];
$nama = $connection->conn->real_escape_string($_POST['nama']);
$alamat = $connection->conn->real_escape_string($_POST['alamat']);
$no_hp = $connection->conn->real_escape_string($_POST['no_hp']);

$pelgn->edit("UPDATE pelanggan SET no_identitas='$no_identitas', nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE no_identitas='$no_identitas'");

echo "<script>alert('Berhasil mengubah data pelanggan')</script>";
echo "<script>window.location='?halaman=data_pelanggan';</script>";
?>
