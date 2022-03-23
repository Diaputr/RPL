<!DOCTYPE html>
<html>
<body>
<h1>Tugas (Diah Putri Nofianti/1A-11-2141720054)<h1>
<?php
function Coba(){
 static $a = 5;
 echo "$a </p>";
 $a++;
}

function Jumlah(){
 static $x = 10, $y = 23, $z = 55;
 $n = $x + $y + $z;
 echo "$n </p>";
}

function Rata(){
 static $r = 43, $s = 64, $t = 87;
 $u = ($r + $s + $t)/3;
 echo "$u </p>";
}

Coba(); 
Jumlah();
Rata();

?>
</body>
</html>