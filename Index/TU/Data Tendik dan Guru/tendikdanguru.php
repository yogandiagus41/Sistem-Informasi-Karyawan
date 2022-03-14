<?php include("../../../koneksi.php"); ?>
<!DOCTYPE html>
<html>

<head>

    <title>SIK | SMA Alfa Centauri</title>
    <link rel="shortcut icon" href="../../../assets/images/logo sma.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


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
		header("location:../../../index.php?pesan=belumlogin");
	}
 
	?>


    <!-- Modal create -->
    <div class="modal" id="create">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title"><b>CREATE </b></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <h5><b>Data Tenaga Pendidik atau Guru Pengajar</b></h5>
                    <form action="prosesCreateTendikdanGuru.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 mt-3">
                            <label for="">Masukan Foto</label>
                            <input type="file" class="form-control" id="img" name="1">
                        </div>
                        <div class="mb-3 mt-3">
                            <input type="text" class="form-control" id="nama" placeholder="Nama : " name="2">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="departemen">Departemen :</label>
                            <select name="3" class="form-select mt-3">
                                <?php
                                $sql = "SELECT * FROM departemen";
                                $query = mysqli_query($db, $sql);
                                $i=1;
                                while($user_data = mysqli_fetch_array($query)){
                                    ?>
                                <option><?php echo($user_data['namaDepartement']); ?></option>
                                <?php } ?>
                                <option>Tidak menjadi anggota Departemen manapun</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="mataPelajaran">Mata Pelajaran :</label>
                            <select name="4" class="form-select mt-3">
                                <?php
                                $sql = "SELECT * FROM matapelajaran";
                                $query = mysqli_query($db, $sql);
                                $i=1;
                                while($user_data = mysqli_fetch_array($query)){
                                    ?>
                                <option><?php echo($user_data['mataPelajaran']); ?></option>
                                <?php } ?>
                                <option>Tidak mengajar apapun</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir : "
                                name="5">
                        </div>
                        <div class="mb-3 mt-3">

                            <label for="tanggalLahir">Tanggal Lahir:</label>
                            <input type="text" id="date" name="6" class="form-control">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="tlp" placeholder="No Telepon : " name="7">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="desa" placeholder="Nama Desa / Komplek : "
                                name="8">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="jalan" placeholder="Nama jalan / Gang : "
                                name="9">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="no" placeholder="No rumah : " name="10">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="rt" placeholder="RT : " name="11">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="rw" placeholder="RW : " name="12">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan : " name="13">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan : " name="14">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="kota" placeholder="Kota / Kabupaten : "
                                name="15">
                        </div>
                        <div class="mb-3 mt-3">

                            <input type="text" class="form-control" id="provinsi" placeholder="Provinsi : " name="16">
                        </div>


                        <input type="submit" Value="Submit" name="Submit" class="btn btn-primary"></input>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
    $(function() {
        $("#date").datepicker();
    });
    </script>




    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../home.php">Beranda</a>

        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Data</a>
        <ul class="dropdown-menu bg-dark ">
            <li><a class="dropdown-item" href="departemen.php">Departemen</a></li>
            <li><a class="dropdown-item" href="mapel.php">Mata Pelajaran</a></li>
            <li><a class="dropdown-item" href="tendikdanguru.php">Tendik dan Guru</a></li>
        </ul>
        <a href="../investment.php">Invesment</a>
        <a href="../keuangan.php">Keuangan</a>
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Peminjaman</a>
        <ul class="dropdown-menu bg-dark ">
            <li><a class="dropdown-item" href="../Peminjaman/barang.php">Barang</a></li>
            <li><a class="dropdown-item" href="../peminjaman/ruangan.php">Ruangan</a></li>
        </ul>
        <a href=" ../../../logout.php">Logout</a>
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
                <h3>Data Tenaga Pendidik dan Guru Pengajar</h3>

                <hr style="width: 100%;">
                <?php if(isset($_GET['status'])): ?>
                <p>
                    <?php
                        if($_GET['status'] == 'sukses'){?>
                <div class="alert alert-success">
                    <strong>Success!</strong><?php echo "Pendaftaran berhasil!";  ?>
                </div>
                <?php
                        } else {?>
                <div class="alert alert-danger">
                    <strong>Failed!</strong><?php echo "Pendaftaran gagal!";  ?>
                </div>
                <?php
                        }
                        ?>
                </p>
                <?php endif; ?>

                <div class="card">
                    <button type="button" class="btn btn-primary m-4" data-bs-toggle="modal"
                        data-bs-target="#create">Buat
                        Data Tenaga Pendidik atau Guru Pengajar Baru</button>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nip</th>
                                    <th>Departemen</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Opsi</th>
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
                                    <td><?php echo($i++); ?></td>
                                    <td><?php echo($user_data['nama']); ?></td>
                                    <td><?php echo($user_data['id']); ?></td>
                                    <td><?php echo($user_data['departemen']); ?></td>
                                    <td><?php echo($user_data['mataPelajaran']); ?></td>
                                    <td><a href="detailTendikdanGuru.php?id=<?php echo $user_data['id'];?>"
                                            type="button" class="btn btn-success">Detail</a> | <a
                                            href="hapusTendikdanGuru.php?id=<?php echo $user_data['id'];?>"><button
                                                type="button" class="btn btn-danger">Hapus</button></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div>

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