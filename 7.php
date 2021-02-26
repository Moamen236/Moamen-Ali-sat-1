<?php

$x = 3 ; 
$y = $x++;  // y = x =  3 && x = x+1 = 4
$y+= ++$x;  // y = y + x = 3+5 = 8  && x = x+1 = 4+1 = 5

// y = 8 && x = 5

 
if ($y == 7) { // y != 8
 	$x++;
 	echo $x ."<br>";
}else if ($y == 8){ // y = 8
 	$x--; // x = x-1 = 5-1 = 4
 	echo $x ."<br>"; // x = 4
}

// don't complete the operations
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}else { 
	$x= 0;
	echo $x ."<br>"; 
}