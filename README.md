# Kuliah-OOP

Contoh implementasi OOP pada bahasa pemrograman PHP.

## Penjelasan
File `DB/Database.php` adalah class utama untuk koneksi sebuah tabel ke database.

Class ini dapat dipakai dengan cara mewariskan file ini dan mengubah beberapa atribut. Contohnya adalah `DB/Mahasiswa.php` yang mengubah atribut `$table` dan `$allowed_fields`.

---

File `index.php` adalah tampilan utama form mahasiswa. Digunakan untuk menampilkan semua mahasiswa yang ada di tabel, dan menambahkan data mahasiswa baru.

File `update.php` adalah tampilan salah satu data mahasiswa untuk diubah.

File `delete.php` digunakan untuk menghapus salah satu data mahasiswa.