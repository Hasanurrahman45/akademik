<?php 
 /*
      [Contoh Dokumentasi #1 Program File edit_nilai.php]
      Kode dibawah berfungsi untuk menangkap data nilai mahasiswa
      berdasarkan npm dan ditampilkan ke masing-masing inputan 
      yang tersedia

    */
    include "koneksi.php";
    $npm =$_GET['npm'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM nilai where npm='$npm'");
    $data=mysqli_fetch_array($ambilData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <scrip src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <br>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                Edit Data Nilai Mahasiswa
            </div>
            <div class="card body" style="padding:5px">
                <form action="" method="POST" class="form-item">

                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">NPM</label>
                    <input type="char" name="npm" value="<?php echo $data ['0'] ?>" class="form-control col-md-8" placeholder="Masukan Kode barang">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nama Mahasiswa</label>
                    <input type="text" name="nama" value="<?php echo $data ['1'] ?>" class="form-control col-md-8" placeholder="Masukan nama barang">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Kelas</label>
                    <input type="text" name="kelas" value="<?php echo $data ['2'] ?>" class="form-control col-md-8" placeholder="Masukan Kategori">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Mata Kuliah</label>
                    <input type="text" name="matakuliah" value="<?php echo $data ['3'] ?>" class="form-control col-md-8" placeholder="Masukan Harga barang">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nilai Harian</label>
                    <input type="number" name="harian" value="<?php echo $data ['4'] ?>" class="form-control col-md-8" placeholder="Masukan banyak barang">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nilai Tugas</label>
                    <input type="number" name="tugas" value="<?php echo $data ['5'] ?>" class="form-control col-md-8" placeholder="Masukan banyak barang">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nilai Uts</label>
                    <input type="number" name="uts" value="<?php echo $data ['6'] ?>" class="form-control col-md-8" placeholder="Masukan banyak barang">
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-3" for=" ">Nilai Uas</label>
                    <input type="number" name="uas" value="<?php echo $data ['7'] ?>" class="form-control col-md-8" placeholder="Masukan banyak barang">
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
      [Contoh Dokumentasi #2 Program File edit_nilai.php]
      Kode dibawah berfungsi untuk ubah data nilai saat tombol simpan diklik
      apabila kode berhasil diubah maka akan muncul informasi Silahkan Tunggu
      dan akan didirect kehalaman data nilai, jika gagal maka akan muncul
      pesan kesalahan yang berasal dari pustaka URI

    */
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

            mysqli_query ($koneksi, "UPDATE nilai SET nama='$nama', kelas='$kelas', 
            matkul='$matakuliah', harian='$harian', tugas='$tugas', 
            uts='$uts', uas='$uas', rata='$rata' where npm='$npm'") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silakan Tunggu </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/akademik/data_nilai.php'>";
        }
?>