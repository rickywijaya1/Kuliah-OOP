<?php
require_once 'DB/Mahasiswa.php';

$mhs = new Mahasiswa();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $create_success = $mhs->create($_POST);
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
    <h1>Form Mahasiswa</h1>
    <form action="index.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="class" /></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="address" /></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Tambah</button></td>
            </tr>
        </table>
        <?php if (isset($create_success)): ?>
            <p><?php if ($create_success): ?> Berhasil diinput! <?php else: ?> Gagal diinput! <?php endif; ?></p>
        <?php endif; ?>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($mhs->all(PDO::FETCH_CLASS) as $mahasiswa): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $mahasiswa->name; ?></td>
                <td><?= $mahasiswa->class; ?></td>
                <td><?= $mahasiswa->address; ?></td>
                <td>
                    <a href="update.php?id=<?= $mahasiswa->id; ?>"><button>Edit</button></a>
                    <a href="delete.php?id=<?= $mahasiswa->id; ?>"><button>Hapus</button></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>