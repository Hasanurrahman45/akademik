<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $databaseName="lsp_akademik";
    $koneksi = mysqli_connect($hostname, $username, $password, $databaseName);

    if($koneksi->connect_errno)
    {
        echo mysqli_connect_error();
    }
?>