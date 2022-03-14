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

include("../../../koneksi.php");


if( !isset($_GET['id']) ){
    header('Location: departemen.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM departemen WHERE id=$id";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
    <div class="container-fluid mt-4">
        <!-- data utama -->
        <div class="shadow-lg p-4 mb-4 bg-white">
            <h3>EDIT DATA</h3>
            <hr style="width: 100%;">

            <div class="card">
                <div class="card-body">
                    <h5><b>Data Departemen</b>/ <?php echo $row['namaDepartement']; ?></h5>
                    <hr style="width: 100%;">
                    <form action="prosesEditDepartemen.php" method="post" name="form1">

                        <div class="form-group">

                            <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Nama Departemen</label>
                            <input type="text" name="namaDepartemen" class="form-control"
                                value="<?php echo $row['namaDepartement']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Tenaga Pendidik</label>
                            <input type="text" name="jumlahTendik" class="form-control"
                                value="<?php echo $row['jumlah']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Ruangan</label>
                            <input type="text" name="ruangan" class="form-control"
                                value="<?php echo $row['ruangan']; ?>">
                        </div>

                        <br>
                        <input type="submit" Value="Submit" name="Submit" class="btn btn-primary"></input>



                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>