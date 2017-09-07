<?php
	$a = "B+";

	switch ($a){
		case $a == "A" || $a == "A-" || $a == "A/B" || $a == "B+" || $a == "B" || $a == "B-" || $a == "B/C":
			echo "LULUS";
			break;
		case $a == "C+" || $a == "C" || $a == "C-" || $a == "C/D":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $a == "D+" || $a == "D":
			echo "LULUS WAJIB DIULANG";
			break;
		default:
			echo "TIDAK LULUS";
			break;
	}
	
?>