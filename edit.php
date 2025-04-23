<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM tb_mahasiswa WHERE id_mahasiswa=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3>Edit Mahasiswa</h3>
    <form method="POST">
      <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" value="<?= $data['nama_mahasiswa'] ?>" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" value="<?= $data['nim'] ?>" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Prodi</label>
        <select name="prodi" id="prodi" required class="form-control">
            <option value="<?= $data['prodi'] ?>" selected><?= $data['prodi'] ?></option>
            <option value="S1-Informatika">S1-Informatika</option>
            <option value="S1-Teknologi Informasi">S1-Teknologi Informasi</option>
            <option value="D3-Manjemen Informatika">D3-Manjemen Informatika</option>
        </select>
        <!-- <input type="text" name="prodi" value="" class="form-control" required> -->
      </div>
      <button class="btn btn-success" name="update">Update</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];

        $koneksi->query("UPDATE tb_mahasiswa SET 
                      nama_mahasiswa='$nama', nim='$nim', prodi='$prodi'
                      WHERE id_mahasiswa=$id");
        echo "<script>location.href='index.php'</script>";
    }
    ?>
  </div>
</body>
</html>