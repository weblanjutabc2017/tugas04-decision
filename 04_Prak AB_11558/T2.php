<?php
	$a = 10;
	
	switch ($a) {
		case $a == "A" ||$a == "A-" ||$a == "A/B" ||$a == "B+" ||$a == "B" ||$a == "B-" || $a == "B/C":
			echo "Lulus";
			break;
		case $a == "C+"||$a == "C"||$a == "C-"||$a == "C/D":
			echo "Lulus Sebaiknya Diulang";
			break;
		case $a == "D+"||$a == "D":
			echo "LULUS & WAJIB DIULANG";
			break;
	default :
	echo "TIDAK LULUS";
	break;
	}
?>