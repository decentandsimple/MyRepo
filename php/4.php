<!doctype html>
<html>
<body>

<?php
$x = 10;
$y = 25;

function test() {
		$GLOBALS['y']	=  $GLOBALS['x'] + $GLOBALS['y'];
}
test();
echo $GLOBALS['y'];
?>
</body>
</html>