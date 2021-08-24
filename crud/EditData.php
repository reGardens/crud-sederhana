<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Mahasiswa</title>
  <link rel="stylesheet" href="css/StyleInput-Edit.css">
</head>

<body>
  <div class="header">
    <p>Edit Data</p>
  </div>

  <div class="content">
    <?php
    if (isset($_POST['update'])) {
      $id = $_POST['id'];

      $nim = $_POST['nim'];
      $nama = $_POST['nama'];
      $jurusan = $_POST['jurusan'];

      $result = mysqli_query($koneksi, "UPDATE tbl_siswa SET 
    nim='$nim',nama='$nama',jurusan='$jurusan' WHERE id=$id");

      header("Location: index.php");
    }

    $id = $_GET['id'];
    $no = 0;
    $no++;
    $result = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE id=$id");

    while ($dataedit = mysqli_fetch_array($result)) {
      $nim = $dataedit['nim'];
      $nama = $dataedit['nama'];
      $jurusan = $dataedit['jurusan'];
    }
    ?>

    <form name="updatesiswa" method="post" action="EditData.php">
      <!-- simpan value id -->
      <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
      <!--  -->
      <p>No</p>
      <input type="text" value="<?php echo $no ?>" readonly> <br>
      <p>nim</p>
      <input type="number" name="nim" value="<?php echo $nim ?>">
      <p>Nama</p>
      <input type="text" name="nama" value="<?php echo $nama ?>">
      <p>Jenis Kelamin</p>
      <input class="radio" type="radio" name="jeniskelamin" value="Laki-laki">&nbsp;&nbsp;&nbsp;Laki-laki <br>
      <input class="radio" type="radio" name="jeniskelamin" value="Perempuan">&nbsp;&nbsp;&nbsp;Perempuan
      <p>Jurusan</p>
      <input type="text" name="jurusan" value="<?php echo $jurusan ?>">

      <button name="update" value="Update">Simpan</button>
      <button><a href="index.php">Kembali</a></button>
    </form>

  </div>
</body>

</html>