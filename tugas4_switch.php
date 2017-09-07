<?php
	$nilai="D-";
	
	//SWITCH
	switch ($nilai){
		case $nilai == "A"OR $nilai =="A-"OR $nilai =="A/B" OR $nilai =="B+" OR $nilai =="B"OR $nilai =="B-"OR $nilai =="B/C":
			echo "LULUS";
			break;
		case $nilai ==  "C" OR $nilai =="C-"OR $nilai =="C/D" :
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $nilai ==  "D" OR $nilai=="D-":
			echo "LULUS & WAJIB DIULANG";
			break;
		case $nilai ==  "E":
			echo "TIDAK LULUS";
			break;
		default:
			echo "Nilai yang dimasukkan salah";
			Break;
	}
?>