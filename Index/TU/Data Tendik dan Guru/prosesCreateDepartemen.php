<?php

include("../../../koneksi.php");


if(isset($_POST['Submit'])){


    $namaDepartemen = $_POST['namaDepartemen'];
    $jumlahTending = $_POST['jumlahTendik'];
    $ruangan = $_POST['ruangan'];


  
    $sql = "INSERT INTO departemen(namaDepartement,jumlah,ruangan) VALUES('$namaDepartemen','$jumlahTending','$ruangan')";
    $query = mysqli_query($db, $sql);


    if( $query ) {
     
        header('Location: departemen.php?status=sukses');
    } else {
    
        header('Location: departemen.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>