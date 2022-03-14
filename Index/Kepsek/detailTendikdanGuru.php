<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIK | SMA Alfa Centauri</title>
    <link rel="shortcut icon" href="../../../assets/images/logo sma.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color: #b4cfb0;">
    <?php 
	session_start();

	if($_SESSION['kelas']==""){
		header("location:../../index.php?pesan=belumlogin");
	}
 
	?>
    <div class="container-fluid mt-4">


        <?php

include("../../koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: semuaData.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM karyawan WHERE id=$id";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
        <div class="shadow-lg p-4 mb-4 bg-white">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="card">
                        <div class="row p-2">
                            <div class="col-6 p-4">
                                <img src="../../uploadimages/images<?php echo $row['img'] ?>" class="img-thumbnail"
                                    width="70%" alt="">

                            </div>
                            <div class="col-6 mt-4">
                                <p><b>Nama :</b> <?php echo $row['nama']; ?></p>
                                <p><b>NIP :</b> <?php echo $row['id']; ?></p>
                                <p><b>Departemen :</b> <?php echo $row['departemen']; ?></p>
                                <p><b>Mata Pelajaran :</b> <?php echo $row['mataPelajaran']; ?></p>
                                <p><b>Tempat Lahir :</b> <?php echo $row['tempatLahir']; ?></p>
                                <p><b>Tanggal Lahir :</b> <?php echo $row['tanggalLahir']; ?></p>
                                <p><b>No. Telepon :</b> <?php echo $row['tlp']; ?></p>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-12 p-4">
                                <div class="card p-4">
                                    <dt>Alamat Lengkap</dt>
                                    <hr width="100%">
                                    <dd>Desa/Komplek : <?php echo $row['desa']; ?></dd>
                                    <dd>Jalan/Gang : <?php echo $row['jalan']; ?></dd>
                                    <dd>No : <?php echo $row['noRumah']; ?></dd>
                                    <dd>RT : <?php echo $row['rt']; ?></dd>
                                    <dd>RW : <?php echo $row['rw']; ?></dd>
                                    <dd>Kelurahan : <?php echo $row['kelurahan']; ?></dd>
                                    <dd>Kecamatan : <?php echo $row['kecamatan']; ?></dd>
                                    <dd>Kabupaten/Kota : <?php echo $row['kota']; ?></dd>
                                    <dd>Provinsi : <?php echo $row['provinsi']; ?></dd>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>