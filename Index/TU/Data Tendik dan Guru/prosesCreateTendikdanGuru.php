<?php

include("../../../koneksi.php");

date_default_timezone_set('Asia/Jakarta');
$date = date('dmYHis');
if(isset($_POST['Submit'])){

    $foto = $_FILES['1']['name'];
    $tmp = $_FILES['1']['tmp_name'];
    $fotobaru = date('dmY').$foto;
    $path = "../../../uploadimages/images".$fotobaru;

    $id = $date;
    $nama = $_POST['2'];
    $departemen = $_POST['3'];
    $mataPelajaran = $_POST['4'];
    $tempatLahir = $_POST['5'];
    $tanggalLahir = $_POST['6'];
    $tlp = $_POST['7'];
    $desa = $_POST['8'];
    $jalan = $_POST['9'];
    $noRumah = $_POST['10'];
    $rt = $_POST['11'];
    $rw = $_POST['12'];
    $kelurahan = $_POST['13'];
    $kecamatan = $_POST['14'];
    $kota = $_POST['15'];
    $provinsi = $_POST['16'];
 

    if(move_uploaded_file($tmp, $path)){

    $sql = "INSERT INTO karyawan (id,img,nama,departemen,mataPelajaran,tempatLahir,tanggalLahir,tlp,desa,jalan,noRumah,rt,rw,kelurahan,kecamatan,kota,provinsi) VALUES ('$id','$fotobaru','$nama','$departemen','$mataPelajaran','$tempatLahir','$tanggalLahir','$tlp','$desa','$jalan','$noRumah','$rt','$rw','$kelurahan','$kecamatan','$kota','$provinsi')";
    $query = mysqli_query($db, $sql);


    if( $query ) {
    
        header('Location: tendikdanguru.php?status=sukses');
    } else {
      
        header('Location: tendikdanguru.php?status=gagal');
    }
} echo "Maaf, Gambar gagal untuk diupload.";
echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";


} else {
    die("Akses dilarang...");
}

?>