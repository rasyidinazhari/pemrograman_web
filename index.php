
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3 class="text-center mb-4">Data Mahasiswa</h3>
    <div class="d-flex justify-content-end mb-2">
      <a href="tambah.php" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Prodi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $koneksi->query("SELECT * FROM tb_mahasiswa ORDER BY id_mahasiswa DESC");
        $no = 1;
        while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($row['nama_mahasiswa']) ?></td>
          <td><?= htmlspecialchars($row['nim']) ?></td>
          <td><?= htmlspecialchars($row['prodi']) ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id_mahasiswa'] ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="hapus.php?id=<?= $row['id_mahasiswa'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>