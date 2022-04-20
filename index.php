<?php
session_start();
include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		LOGIN
	</title>
</head>
<h1>LOGIN DISINI!</h1>
<body>
	<form action="" method="post">
		<input type="text" name="user" placeholder="Masukkan Username"/> <br><br>
		<input type="password" name="pass" placeholder="Masukkan Password"/> <br><br>
		<input type="submit" name="login" value="Log In"/>
	</form>
	<?php
		if(isset($_POST['login'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$data_user = mysqli_query($koneksi, "SELECT * FROM log_in WHERE username='$user' AND password='$pass'");
			$r = mysqli_fetch_array($data_user);
			$username = $r['username'];
			$password = $r['password'];
			$level = $r['level'];
			if($user==$username && $pass==$password){
				$_SESSION['level'] = $level;
				header('location:beranda.php');
			} else {
				echo 'Username dan password salah';
			}
		}
	?>
</body>
</html>