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

	if($_SESSION['kelas']==""){
		header("location:../../index.php?pesan=belumlogin");
	}
 
	?>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Beranda</a>

        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data </a>
        <ul class="dropdown-menu bg-dark ">
            <li><a class="dropdown-item" href="Data Tendik dan Guru/departemen.php">Departemen</a></li>
            <li><a class="dropdown-item" href="Data Tendik dan Guru/mapel.php">Mata Pelajaran</a></li>
            <li><a class="dropdown-item" href="Data Tendik dan Guru/tendikdanguru.php">Tendik dan Guru</a></li>
        </ul>
        <a href="investment.php">Invesment</a>
        <a href="keuangan.php">Keuangan</a>
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Peminjaman</a>
        <ul class="dropdown-menu bg-dark ">
            <li><a class="dropdown-item" href="Peminjaman/barang.php">Barang</a></li>
            <li><a class="dropdown-item" href="peminjaman/ruangan.php">Ruangan</a></li>
        </ul>
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
            <!-- data utama -->
            <div class="shadow-lg p-4 mb-4 bg-white">
                <h3>Data Utama</h3>
                <hr style="width: 100%;">
                <div class="row">

                    <div class="col-3">
                        <div class="card">
                            <div class="card-header bg-warning">Data Departemen</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Departemen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $sql = "SELECT * FROM departemen";
                                $query = mysqli_query($db, $sql);
                                $i=1;
                                while($user_data = mysqli_fetch_array($query)){
                                    ?>
                                        <tr>
                                            <td><?php echo"$i"; ?></td>
                                            <td><?php echo($user_data['namaDepartement']); ?></td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"><a href="Data Tendik dan Guru/departemen.php"><button type="button"
                                        class="btn btn-warning">Detail</button></a></div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="card">
                            <div class="card-header bg-danger">Data Mata Pelajaran</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mapel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $sql = "SELECT * FROM matapelajaran";
                                $query = mysqli_query($db, $sql);
                                $i=1;
                                while($user_data = mysqli_fetch_array($query)){
                                    ?>
                                        <tr>
                                            <td><?php echo"$i"; ?></td>
                                            <td><?php echo($user_data['mataPelajaran']); ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"><a href="Data Tendik dan Guru/mapel.php"><button type="button"
                                        class="btn btn-danger">Detail</button></a></div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-primary"> Data Tenaga Pendidik dan Guru</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $sql = "SELECT * FROM karyawan";
                                $query = mysqli_query($db, $sql);
                                $i=1;
                                while($user_data = mysqli_fetch_array($query)){
                                    ?>
                                        <tr>
                                            <td><?php echo"$i"; ?></td>
                                            <td><?php echo($user_data['nama']); ?></td>
                                            <td><?php echo($user_data['id']); ?></td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"><a href="Data Tendik dan Guru/tendikdanguru.php"><button
                                        type="button" class="btn btn-primary">Detail</button></a></div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- keuangan dan peminjaman -->

            <div class="shadow-lg p-4 mb-4 mt-4 bg-white">
                <h3>Keuangan dan Peminjaman</h3>
                <hr style="width: 100%;">
                <div class="row">

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-success">Data Keuangan Hari Ini
                                ( <?php echo date('d / M / y'); ?> )</div>
                            <div class="card-body">
                                <div class="card">
                                    <div class="card-body bg-light">
                                        Pemasukan :
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-light">
                                        Pengeluaran :
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-light">
                                        Saldo Terakhir :
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer mt-2"><a href="keuangan.php"><button type="button"
                                        class="btn btn-success">Detail</button></a></div>
                        </div>
                    </div>

                    <div class=" col-8">
                        <div class="card">
                            <div class="card-header bg-success">Peminjaman Barang dan Ruangan</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Peminjam</th>
                                            <th>Jenis</th>
                                            <th>Tanggal meminjam</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Quantity</th>
                                            <th>Keperluan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"><a href="Peminjaman/barang.php"><button type="button"
                                        class="btn btn-success">Detail</button></a></div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- investment -->

            <div class="shadow-lg p-4 mb-4 bg-white">
                <h3>Investment</h3>
                <hr style="width: 100%;">

                <div class="card">

                    <div class="card-header bg-info">Data Barang Milik Sekolah</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Quantity</th>
                                    <th>Tempat penyimpanan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"><a href="investment.php"><button type="button"
                                class="btn btn-info">Detail</button></a>
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
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("mySidenav").style.marginTop = "25px";
        document.getElementById("main").style.marginLeft = "250px";
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