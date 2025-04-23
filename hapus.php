<?php
include 'koneksi.php';
$id = $_GET['id'];
$koneksi->query("DELETE FROM tb_mahasiswa WHERE id_mahasiswa=$id");
header("Location: index.php");
?>