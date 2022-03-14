<?php

include("../../../koneksi.php");


if(isset($_POST['Submit'])){


    $id = $_POST['id'];
    $mataPelajaran = $_POST['mataPelajaran'];
    $jumlahGuru = $_POST['jumlahGuru'];



    $sql = "UPDATE matapelajaran SET mataPelajaran='$mataPelajaran', jumlah='$jumlahGuru' WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if( $query ) {

        header('Location: mapel.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>