<?php
include('config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data Mahasiswa</title>
  <link rel="stylesheet" href="css/StyleInput-Edit.css">
</head>

<body>
  <div class="header">
    <p>Input Data</p>
  </div>

  <div class="content">
    <form action="InputData.php" method="POST">
      <p>No</p>
      <input type="text" name="no" readonly placeholder="OTOMATIS"> <br>
      <p>nim</p>
      <input type="number" name="nim">
      <p>Nama</p>
      <input type="text" name="nama">
      <p>Jenis Kelamin</p>
      <input class="radio" type="radio" name="jeniskelamin" value="Laki-laki">&nbsp;&nbsp;&nbsp;Laki-laki <br>
      <input class="radio" type="radio" name="jeniskelamin" value="Perempuan">&nbsp;&nbsp;&nbsp;Perempuan
      <p>Jurusan</p>
      <input type="text" name="jurusan">
      <button name="Submit">Simpan</button>
      <button><a href="index.php">Kembali</a></button>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      $jeniskelamin = $_POST['jeniskelamin'];
      $jurusan = $_POST['jurusan'];

      $sql = "INSERT INTO tbl_siswa 
    (nim, nama, jeniskelamin, jurusan) values 
    ('$nim', '$nama', '$jeniskelamin', '$jurusan')";

      $query = mysqli_query($koneksi, $sql);
      header('location:index.php');
    }
    ?>

  </div>
</body>

</html>