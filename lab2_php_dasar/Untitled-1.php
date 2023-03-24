<?php

$dir = "Lab2web";

// Cek direktori udah terbuat apa belum
if (!is_dir($dir)) {
  // Jika belum, buat direktori baru
  mkdir($dir);
  echo "Direktori berhasil dibuat!";
} else {
  // Jika sudah ada, tampilkan pesan error
  echo "Direktori sudah ada!";
}
?>