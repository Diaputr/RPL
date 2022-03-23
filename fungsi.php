<!DOCTYPE html>
<html>
<body>
<h1>Fungsi<h1>
<?php
function Coba () {
 static $a = 0;
 echo $a;
 $a++;
}
Coba();
?>
</body>
</html>