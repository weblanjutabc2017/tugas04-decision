<?php

$x = "B";
if ($x == "A" or $x == "A-" or $x == "A/B" or $x == "B+" or $x == "B" or $x == "B-" or $x == "B/C"){
	echo "LULUS";
}
	else if ($x == "C+" or $x == "C" or $x == "C-" or $x == "C/D"){
		echo "LULUS SEBAIKNYA DIULANG";
	}  
	else if ($x == "D+" or $x == "D"){
		echo "LULUS DAN WAJIB MENGULANG";
	}
	else {
		echo "TIDAK LULUS";
	}
?>