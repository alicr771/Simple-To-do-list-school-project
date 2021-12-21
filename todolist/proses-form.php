<?php

include('config.php');

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Submit'])){

    // ambil data dari formulir
    $nama_tugas = $_POST['nama_tugas'];
    $deskripsi_tugas = $_POST['deskripsi_tugas'];
    $deadline = $_POST['deadline'];

    // buat query
    $sql = "INSERT INTO task (nama_tugas, deskripsi_tugas, deadline) VALUE ('$nama_tugas', '$deskripsi_tugas', '$deadline')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: working.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: create.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>