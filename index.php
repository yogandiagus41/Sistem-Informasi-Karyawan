<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIK | SMA Alfa Centauri</title>
    <link rel="shortcut icon" href="assets/images/logo sma.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: #b4cfb0">


    <div class="modal" id="">
        <div class="modal-dialog">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title">Create An Account</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form action="login_proses.php">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                name="pswd">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                </div>

            </div>
        </div>
    </div>




    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-2">
                <img src="assets/images/Kota Bandung.png" style="width: 50%;" class="float-end">
            </div>
            <div class="col-8">
                <center>
                    <h2>SELAMAT DATANG DI SISTEM INFORMASI KEPEGAWAIAN</h2>
                    <h5>Sekolah Menengah Atas Alfa Centauri</h5>

                    <h5>Kota Bandung</h5>
                </center>
            </div>
            <div class="col-2">
                <img src="assets/images/logo sma.png" style="width: 50%;" class="float-start">
            </div>
        </div>
    </div>
    <br>
    <div class="container mt-4">

        <div class="border shadow-lg p-4 mb-4 bg-white ">
            <center>

                <h1>Login Form</h1>
                <br>
                <br>
            </center>
            <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert alert-danger'>username / password salah! <strong> silahkan Login kembali</strong></div>";
		}
        if($_GET['pesan']=="gagal2"){
			echo "<div class='alert alert-warning'>anda belum mendaftar! <strong> silahkan daftar telebih dahulu</strong></div>";
		}
        if($_GET['pesan']=="belumlogin"){
			echo "<div class='alert alert-success'>anda belum login! <strong>   silahkan Login telebih dahulu</strong></div>";
		}
	}
	?>
            <form action="login_proses.php" method="post">
                <div class="mb-3 mt-3">

                    <input type="text" class="form-control" id="Username" placeholder="Enter Username"
                        name="Username" />
                </div>
                <div class="mb-3">

                    <input type="password" class="form-control" id="Password" placeholder="Enter Password"
                        name="Password" />
                </div>
                <p>Don't have an account ? <a href="#" data-bs-toggle="modal" data-bs-target="#register">Register
                        Now!</a> </p>
                <br>
                <button type="submit" class="btn btn-primary mt-4">Login</button>

            </form>
        </div>
    </div>
</body>

</html>