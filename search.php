<?php
$x=0;

echo ("search number:");
$num  = [1, 2,3,4,5,6];
foreach($num as $n){
	
if($n==$x){
	$found=true;
	break;
}else{
	$found=false;
	break;
}
}
if($found){
	
	echo("found");
}
else{
	echo("not found");
}

?>
	