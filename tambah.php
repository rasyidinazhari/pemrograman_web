<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3>Tambah Mahasiswa</h3>
    <form method="POST">
      <div class="mb-3">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Prodi</label>
        <select name="prodi" id="prodi" required class="form-control">
            <option value="default" selected disabled>Pilih Prodi</option>
            <option value="S1-Informatika">S1-Informatika</option>
            <option value="S1-Teknologi Informasi">S1-Teknologi Informasi</option>
            <option value="D3-Manjemen Informatika">D3-Manjemen Informatika</option>
        </select>
        <!-- <input type="text" name="prodi" class="form-control" required> -->
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button class="btn btn-success" name="simpan">Simpan</button>
      <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $koneksi->query("INSERT INTO tb_mahasiswa (nama_mahasiswa, nim, prodi, password)
                      VALUES ('$nama', '$nim', '$prodi', '$password')");
        echo "<script>location.href='index.php'</script>";
    }
    ?>
  </div>
</body>
</html>