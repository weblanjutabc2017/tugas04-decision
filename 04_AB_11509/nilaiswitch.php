<?php
	$nilai;
	switch ($nilai){
		case $nilai == "A":
			echo "LULUS";
			break;
		case $nilai == "A-":
			echo "LULUS";
			break;
		case $nilai == "A/B":
			echo "LULUS";
			break;
		case $nilai == "B+":
			echo "LULUS";
			break;
		case $nilai == "B":
			echo "LULUS";
			break;
		case $nilai == "B-":
			echo "LULUS";
			break;
		case $nilai == "B/C":
			echo "LULUS";
			break;
		case $nilai == "C+":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $nilai == "C":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $nilai == "C-":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $nilai == "C/D":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case $nilai == "D+":
			echo "LULUS DAN WAJIB DIULANG";
			break;
		case $nilai == "D":
			echo "LULUS DAN WAJIB DIULANG";
			break;
		case $nilai == "E":
			echo "TIDAK LULUS";
			break;
		default :
			echo "NILAI SALAH !!!";
			break;		
	}
?>