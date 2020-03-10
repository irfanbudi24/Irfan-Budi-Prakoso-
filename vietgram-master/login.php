<?php 
	session_start();

	include("koneksi.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"select * from login where username='".$username."' and password='".$password."'");

	$cek = mysqli_num_rows($result);
	
	if($cek == 1){
		$data_profil = mysqli_query($conn,"select * from profile where username='$username'");
		$row_akun = mysqli_fetch_array($data_profil);
		$_SESSION['username'] = $row_akun['username'];
		$_SESSION['status'] = "login";
		$_SESSION['name'] = $row_akun['name'];
		$_SESSION['website'] = $row_akun['website'];
		$_SESSION['bio'] = $row_akun['bio'];
		$_SESSION['email'] = $row_akun['email'];
		$_SESSION['number_phone'] = $row_akun['number_phone'];
		$_SESSION['gender'] = $row_akun['gender'];
		while($row = mysqli_fetch_assoc($result)) {
			$_SESSION['user_id'] = $row['id'];
		}
		header("location:feed.php");
	
	}else{
		header("location:index.php?pesan=gagal");	
	} 
?>
