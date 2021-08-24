<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <div class="header">
    <a href="InputData.php">Tambah Data</a>
  </div>

  <div class="content">
    <table>
      <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>Action</th>
      </tr>

      <?php
      $sql = "SELECT * FROM tbl_siswa";
      // $sql = "SELECT * FROM tbanggota ORDER BY id DESC"; urutan terbaru id dari atas
      $query = mysqli_query($koneksi, $sql);
      $no = 0;

      while ($datasiswa = mysqli_fetch_array($query)) {
        $no++;

        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $datasiswa['nim'] . "</td>";
        echo "<td>" . $datasiswa['nama'] . "</td>";
        echo "<td>" . $datasiswa['jeniskelamin'] . "</td>";
        echo "<td>" . $datasiswa['jurusan'] . "</td>";
        echo "<td>";
        echo "<a href='EditData.php?id=" . $datasiswa['id'] . "'>Edit</a> &nbsp;&nbsp;";
        echo "<a href='hapus.php?id=" . $datasiswa['id'] . "'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
      }
      ?>

    </table>
  </div>

</body>

</html>