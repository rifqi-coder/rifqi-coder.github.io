<?php 

session_start();
 

include 'koneksi.php';
 

$username = $_POST['username'];
$password = $_POST['password'];
 

$data = mysqli_query($conn,"select * from user where username='$username' AND password='$password'");
 

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>
