<?php
require_once 'DB/Mahasiswa.php';

$mhs = new Mahasiswa();

$mahasiswa = $mhs->find($_GET['id']);
if (!$mahasiswa) {
    echo 'Mahasiswa tidak ditemukan.';
    exit;
}

$delete_success = $mhs->delete($mahasiswa['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <?php if (isset($delete_success)): ?>
        <p><?php if ($delete_success): ?> Berhasil dihapus! <?php else: ?> Gagal dihapus! <?php endif; ?></p>
        <p>Kembali ke <a href="index.php">tabel mahasiswa</a>.</p>
    <?php endif; ?>
</body>
</html>