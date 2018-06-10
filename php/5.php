<!Doctype html>
<html>
<body>
	<?php
	#This is the comment
	// This is the comment 2
	/* This is the multiple 
	comment need to checkdate
	*/
	$text = "Hello World This is VA";
	$x1 = 5;
	$y = 10.1;
	echo $text;
	echo "<br>";
	echo $x1;
	echo "<br>";
	echo $y;
	echo "<br>";
	echo "output " . $x1 * $y . "";
	echo "<br>"; 
	$color = "Yellow";
	echo "My fav color is " . $color . " <br>";
	echo "Best of my life is ". $color . "<br>";
	$x = 3; //general scope
		
			function myTest() {
			$x=33; //local scope
			echo "<p>variable x inside the function is: $x</p>";
			}
			myTest();
	echo "<p>Variable x outside the function is: $x</p>";
	function myt(){
		global $x, $y;
		$x1 = $x - $y;
	}
	myt();
	echo $x1 // out of myt function
	?>
</body>
</html>