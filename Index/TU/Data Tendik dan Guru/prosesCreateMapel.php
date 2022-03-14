<?php

include("../../../koneksi.php");


if(isset($_POST['Submit'])){


    $mataPelajaran = $_POST['mataPelajaran'];
    $jumlahGuru = $_POST['jumlahGuru'];
 


  
    $sql = "INSERT INTO matapelajaran(mataPelajaran,jumlah) VALUES('$mataPelajaran','$jumlahGuru')";
    $query = mysqli_query($db, $sql);


    if( $query ) {
     
        header('Location: mapel.php?status=sukses');
    } else {
    
        header('Location: mapel.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>