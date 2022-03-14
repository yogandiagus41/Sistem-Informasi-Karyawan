<?php include("../../koneksi.php"); ?>
<!DOCTYPE html>
<html>

<head>

    <title>SIK | SMA Alfa Centauri</title>
    <link rel="shortcut icon" href="../../assets/images/logo sma.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <style>
    body {
        font-family: "Lato", sans-serif;
    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body style="background-color: #b4cfb0;">
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['kelas']==""){
		header("location:../../index.php?pesan=belumlogin");
	}
 
	?>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Beranda</a>
        <a href="semuaData.php">Data Tendik dan Guru</a>
        <a href="dataTenagaPendidik.php">Data Tenaga Pendidik</a>
        <a href="dataGuruPengajar.php">Data Guru Pengajar</a>
        <a href="dataDepartemen.php">Departemen</a>
        <a href="dataMataPelajaran.php">Mata Pelajaran</a>
        <a href=" ../../logout.php">Logout</a>
    </div>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="navbar-toggler-icon" onclick="openNav()" style="color: white;"></span>
                </li>

            </ul>
        </div>
    </nav>




    <div id="main">
        <br>

        <div class="container-fluid mt-4">
            <h2>Beranda</h2>
            <hr style="width: 100%;">
            <!-- total tenaga pendidik dan guru pengajar -->
            <div class="shadow-lg p-4 mb-4 bg-white">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-success">Total Tenaga pendidik dan Guru Pengajar</div>
                            <div class="card-body">
                                <?php $data_karyawan = mysqli_query($db,"SELECT * FROM karyawan"); 
                                $jumlah_karyawan = mysqli_num_rows($data_karyawan);
                                ?>
                                <h3><?php echo $jumlah_karyawan; ?></h3>
                            </div>
                            <div class="card-footer"><a href="semuaData.php"><button type="button"
                                        class="btn btn-success">Detail</button></a></div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-primary">Total Tenaga pendidik</div>
                            <div class="card-body">
                                <?php $data_tendik = mysqli_query($db,"SELECT * FROM karyawan where departemen != 'Tidak menjadi anggota Departemen manapun'"); 
                                
                                $jumlah_tendik = mysqli_num_rows($data_tendik);
                                ?>
                                <h3><?php echo $jumlah_tendik; ?></h3>
                            </div>
                            <div class="card-footer"><a href="dataTenagaPendidik.php"><button type="button"
                                        class="btn btn-primary">Detail</button></a></div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-warning">Total Guru Pengajar</div>
                            <div class="card-body">
                                <?php $data_tendik = mysqli_query($db,"SELECT * FROM karyawan where mataPelajaran != 'Tidak mengajar apapun'"); 
                                
                                $jumlah_tendik = mysqli_num_rows($data_tendik);
                                ?>
                                <h3><?php echo $jumlah_tendik; ?></h3>
                            </div>
                            <div class="card-footer"><a href="dataGuruPengajar.php"><button type="button"
                                        class="btn btn-warning">Detail</button></a></div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- total Departemen dan Mata Pelajaran -->
            <div class="shadow-lg p-4 mb-4 bg-white">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-info">Total Departemen</div>
                            <div class="card-body">
                                <?php $data_departemen = mysqli_query($db,"SELECT * FROM departemen"); 
                                
                                $jumlah_departemen = mysqli_num_rows($data_departemen);
                                ?>
                                <h3><?php echo $jumlah_departemen; ?></h3>
                            </div>
                            <div class="card-footer"><a href="dataDepartemen.php"><button type="button"
                                        class="btn btn-info">Detail</button></a></div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-danger">Total Mata Pelajaran</div>
                            <div class="card-body">
                                <?php $data_mapel = mysqli_query($db,"SELECT * FROM matapelajaran"); 
                                
                                $jumlah_mapel = mysqli_num_rows($data_mapel);
                                ?>
                                <h3><?php echo $jumlah_mapel; ?></h3>
                            </div>
                            <div class="card-footer"><a href="dataMataPelajaran.php"><button type="button"
                                        class="btn btn-danger">Detail</button></a></div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="card">
        <div class="card-body bg-dark text-light">
            <div class="row">
                <div class="col-6">
                    <p>© 2022 SMA Alfa Centauri. All rights reserved</p>
                </div>
                <div class="col-6">
                    <p class="float-end">Agus yogandi</p>
                </div>
            </div>
        </div>
    </div>




    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
        document.getElementById("mySidenav").style.marginTop = "25px";
        document.getElementById("main").style.marginLeft = "350px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "white";
    }
    </script>

</body>

</html>