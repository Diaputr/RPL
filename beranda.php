<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BERANDA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<ul>
	<?php
	$level = $_SESSION['level'] == 'admin';
	if($level){
	?>	<h1>Selamat Datang, ADMIN~!</h1><br>
		<li><a href="">Menu Admin</a></li>	
	<?php }else{ ?> <h1>Selamat Datang, USER~!</h1><br>
		<li><a href="">Menu User</a></li>
	<?php } ?>
	<li><a href="logout.php">Log Out</a></li>
</ul>
</body>
</html>