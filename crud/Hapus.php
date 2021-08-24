<?php
include ("config.php");

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_siswa WHERE id=$id");

header("Location:index.php");
