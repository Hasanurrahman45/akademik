<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <br>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                Input Data Nilai Mahasiswa
            </div>
            <div class="card body" style="padding:5px">
                <form action="" method="POST" class="form-item">

                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">NPM</label>
                    <input type="char" name="npm" class="form-control col-md-8" placeholder="Masukan NPM">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control col-md-8" placeholder="Masukan Nama">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Kelas</label>
                    <input type="text" name="kelas" class="form-control col-md-8" placeholder="Masukan Kelas">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Mata Kuliah</label>
                    <input type="text" name="matakuliah" class="form-control col-md-8" placeholder="Masukan Matakuliah">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nilai Harian</label>
                    <input type="number" name="harian" class="form-control col-md-8" placeholder="Masukan Nilai Harian">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nilai Tugas</label>
                    <input type="number" name="tugas" class="form-control col-md-8" placeholder="Masukan Nilai Tugas">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nilai Uts</label>
                    <input type="number" name="uts" class="form-control col-md-8" placeholder="Masukan Nilai Uts">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nilai Uas</label>
                    <input type="number" name="uas" class="form-control col-md-8" placeholder="Masukan Nilai Uas">
                </div>
               
                <button type="submit" class="btn btn-success" name="simpan">SIMPAN</button>
                <button type="reset" class="btn btn-danger">BATAL</button>

                </form>
            </div>
        </div>
    </div>

</body>
</html>

<?php
   
    /*
      [Contoh Dokumentasi Program File Index.php]
      Kode dibawah berfungsi untuk simpan data nilai saat tombol simpan diklik
      apabila kode berhasil disimpan maka akan muncul informasi Silahkan Tunggu
      dan akan didirect kehalaman data nilai, jika gagal maka akan muncul
      pesan kesalahan yang berasal dari pustaka URI

    */

        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $npm = $_POST['npm'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $matakuliah = $_POST['matakuliah'];
            $harian = $_POST['harian'];
            $tugas = $_POST['tugas'];
            $uts = $_POST['uts'];
            $uas = $_POST['uas'];
            $rata =($harian+$tugas+$uts+$uas)/4;

            mysqli_query ($koneksi, "INSERT INTO nilai VALUES('$npm', '$nama', '$kelas', '$matakuliah',
             '$harian', '$tugas', '$uts','$uas','$rata')") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silakan Tunggu </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/akademik/data_nilai.php'>";
        }
?>