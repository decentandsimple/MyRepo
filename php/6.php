<!doctype html>
<html>
<body>

<?php
function mytest() {
	static $x = 6;
	static $y = 2;
	echo $x;
	echo $y;
	$x--;
}
mytest();
echo "<br>";
mytest();
echo "<br>";
?>
</body>
</html>