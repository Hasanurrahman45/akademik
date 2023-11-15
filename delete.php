<?php
     /*
      [Contoh Dokumentasi Program File delete.php]
      Kode dibawah ini berfungsi untuk menghapus data nilai
      berdasarkan npm yang dipilih dihalaman data nilai, jika
      berhasil maka data akan hilang dari tampilan data nilai mahasiswa
      dan jika terdapat kesalahan koneksi atau kode sumber maka
      akan ditampilkan pesan kesalahan dar pustaka mysqli
    */
    include "koneksi.php";
    $npm = $_GET['npm'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM nilai where npm='$npm'") or die(mysqli_error($koneksi));
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/akademik/data_nilai.php'>";

?>