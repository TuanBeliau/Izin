<?php

include 'config/connect.php'; // Menghubungkan ke file koneksi.php untuk membuat ko

$username = $_POST['username'];
$password = $_POST['password'];// Mengambil nilai username dari form $_POST['password']; // Mengambil nilai password dari form

$query = "SELECT * FROM siswa WHERE username='$username' AND password='$password';
$result = mysqli_query($is_connect, $query); // Menjalankan query pada database

if (mysqli_num_rows($result) > 0) { // Jika query menghasilkan satu atau lebih bari
  session_start(); // Memulai sesi
  $_SESSION['username'] = $username; // Menyimpan username dalam sesi header('Location: index.php'); // Mengalihkan ke 
  $_SESSION['login'] = true;
  $_SESSION['id'] = $data['id'];
  header('Location: index.php');
} 
else {
  echo 'Login gagal! Username atau password salah.';
}
?>
