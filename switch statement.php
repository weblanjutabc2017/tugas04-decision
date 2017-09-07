<?php
	$nilai = "E";
	switch ($nilai){
		case $nilai == "A" or $nilai == "A-" or $nilai == "A/B" or $nilai == "B+" or $nilai == "B" or $nilai == "B-" or $nilai == "B/C":
			echo "LULUS";
			break;
		case $nilai == "C+" or $nilai == "C" or $nilai == "C-" or $nilai == "C/D":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $nilai == "D+" or $nilai == "D":
			echo "LULUS & WAJIB DIULANG";
			break;
		default:
			echo "TIDAK LULUS";
			break;
	}	
?>