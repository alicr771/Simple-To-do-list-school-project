<?php

include('config.php');

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "INSERT INTO overdue SELECT * FROM task WHERE id=$id ";
    $query = mysqli_query($db, $sql);
    $sql = "DELETE FROM task WHERE id=$id ";
    $query = mysqli_query($db, $sql);


    // apakah query hapus berhasil?
    if( $query ){
    header('Location: overdue.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>