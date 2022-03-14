<?php 

session_start();

include 'koneksi.php';


$username = $_POST['Username'];
$password = $_POST['Password'];



$login = mysqli_query($db,"SELECT * FROM account WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	
	if($data['kelas']=="tatausaha"){


		$_SESSION['username'] = $username;
		$_SESSION['kelas'] = "tatausaha";

		header("location:index/TU/home.php");


	}else if($data['kelas']=="kepsek"){
		
		$_SESSION['username'] = $username;
		$_SESSION['kelas'] = "kepsek";
	
		header("location:index/Kepsek/home.php");


	}else{
		header("location:index.php?pesan=gagal2");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>