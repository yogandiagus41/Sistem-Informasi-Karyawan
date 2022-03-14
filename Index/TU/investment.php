<!DOCTYPE html>
<html>

<head>

    <title>SIK | SMA Alfa Centauri</title>
    <link rel="shortcut icon" href="../../../assets/images/logo sma.png">
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

    <!-- Modal Create -->
    <div class="modal" id="">
        <div class="modal-dialog">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title"><b>Create </b></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <h5><b>Data Invesment</b></h5>
                    <form action="/action_page.php">
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="email" placeholder="Nama Departemen" name="TU">
                        </div>
                        <div class="mb-3">

                            <input type="text" class="form-control" id="pwd" placeholder="Jumlah Tenaga Pendidik"
                                name="pswd">
                        </div>
                        <div class="mb-3">

                            <input type="text" class="form-control" id="pwd" placeholder="Ruangan" name="pswd">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>




            </div>
        </div>
    </div>




    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Beranda</a>

        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data</a>
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
        <a href=" ../logout.php">Logout</a>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
            <!-- data utama -->
            <div class="shadow-lg p-4 mb-4 bg-white">
                <h3>Data Investasti Barang Milik Sekolah</h3>
                <hr style="width: 100%;">
                <div class="alert alert-warning">
                    <strong>Sorry !</strong> this menu is under maintenance.
                </div>

                <div class="card">
                    <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal"
                        data-bs-target="#create">Buat
                        Data Investasi Barang baru</button>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>


                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>
    </div>

    <div class="card fixed-bottom">
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