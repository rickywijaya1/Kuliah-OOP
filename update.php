<?php
require_once 'DB/Mahasiswa.php';

$mhs = new Mahasiswa();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    unset($_POST['id']);
    $update_success = $mhs->update($id, $_POST);
}

$mahasiswa = $mhs->find($_GET['id']);
if (!$mahasiswa) {
    echo 'Mahasiswa tidak ditemukan.';
    exit;
}
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
    <h1>Update Mahasiswa</h1>
    <form action="update.php?id=<?= $mahasiswa['id']; ?>" method="post">
        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>" />
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="name" value="<?= $mahasiswa['name']; ?>" /></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="class" value="<?= $mahasiswa['class']; ?>" /></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="address" value="<?= $mahasiswa['address'] ?>" /></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Ubah</button></td>
            </tr>
        </table>
        <?php if (isset($update_success)): ?>
            <p><?php if ($update_success): ?> Berhasil diubah! <?php else: ?> Gagal diubah! <?php endif; ?></p>
            <p>Kembali ke <a href="index.php">tabel mahasiswa</a>.</p>
        <?php endif; ?>
    </form>
</body>
</html>