<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fellowship Diah Putri Nofianti</title>
</head>
<body>
  <h1>Fellowship (Diah Putri Nofianti/1A-11-2141720054)</h1>
  <?php
	$fellowship = array("Frodo", "Sam", "Gandalf", "Strider", "Gimli", "Legolas", "Boromir");
	print "The fellowship of the ring members are : \n";
	for ($i = 0; $i < count($fellowship); $i++) {
		print "{$fellowship[$i]}\n";
	}
	echo "<ul>";
	print "(FOREACH) The fellowship of the ring members are : \n";
	foreach ($fellowship as $fellow){
		print "$fellow";
	}
  ?>
</body>
</html>