<?php
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($b=0; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>