<?php
Function largeNumber($x,$y,$z)
{
	if($x>=$y && $x>=$z){
		return $x;
	}
	else if($y>=$x && $y>=$z)
	{
		return $y;
	}
	else{
		return $y;
	}
}
	$x=80;
	$y=50;
	$z=30;

$findLarge=largeNumber($x,$y,$z);
echo ("Largest Number:");
echo($findLarge);

?>
