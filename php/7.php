<!Doctype html>
<html>
<body>
<?php
	$x=15; //Global value

	function test(){
		$x=15;
		$y=10;
		$y = $x * $y;
		$x = $y - $y;
		echo "This is the variable error: $y";
		echo "<p>This is the variable error: $y</p>";
		echo "<p>This is the variable error: $x</p>";
		$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['x'];
		}
	test();
	
	echo $y;
?>
		