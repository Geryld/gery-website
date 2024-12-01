<?php
// Informasi koneksi ke database
$host = 'localhost'; // Alamat host, biasanya 'localhost' jika database ada di server yang sama
$user = 'root'; // Username untuk mengakses database (default untuk XAMPP atau WAMP biasanya 'root')
$password = ''; // Password untuk mengakses database (default biasanya kosong untuk XAMPP atau WAMP)
$database = 'web_db'; // Nama database yang akan digunakan

// Membuat koneksi ke database menggunakan objek mysqli
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil atau gagal
if ($conn->connect_error) {
    // Jika terjadi error, tampilkan pesan dan hentikan eksekusi program
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika tidak ada error, koneksi berhasil dan siap digunakan
?>
