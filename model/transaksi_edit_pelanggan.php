<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "../model/m_pelanggan.php";

$connection = new Database($host, $user, $pass, $database);
$data_pelanggan = new data_pelanggan($connection);

$id = $_POST['id_pelanggan'];
$nama = $connection->conn->real_escape_string($_POST['nama']);
$alamat = $connection->conn->real_escape_string($_POST['alamat']);
$no_hp = $connection->conn->real_escape_string($_POST['no.hp']);

$data_pelanggan->edit("UPDATE data_pelanggan SET nama = '$nama', alamat = '$alamat', no.hp = '$no_hp' WHERE id_pelanggan = '$id'");
echo "<script>window.location='?halaman=data_pelanggan';</script>";
 ?>