<?php

include("../../../koneksi.php");


if(isset($_POST['Submit'])){


    $id = $_POST['id'];
    $namaDepartemen = $_POST['namaDepartemen'];
    $jumlahTendik = $_POST['jumlahTendik'];
    $ruangan = $_POST['ruangan'];


    $sql = "UPDATE departemen SET namaDepartement='$namaDepartemen', jumlah='$jumlahTendik', ruangan='$ruangan' WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if( $query ) {

        header('Location: departemen.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>