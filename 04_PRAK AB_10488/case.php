<?php
	
	$nilai = "A";
	switch($nilai){
		case "A":
			echo "LULUS";
			break;
		case "A-":
			echo "LULUS";
			break;
		case "A/B":
			echo "LULUS";
			break;
		case "B+":
			echo "LULUS";
			break;
		case "B":
			echo "LULUS";
			break;
		case "B-":
			echo "LULUS";
			break;
		case "B/C":
			echo "LULUS";
			break;
		case "C+":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case "C":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case "C-":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case "C/D":
			echo "LULUS SEBAIKNYA DIULANG";
			break;
		case "D+":
			echo "LULUS DAN WAJIB DIULANG";
			break;
		case "D":
			echo "LULUS DAN WAJIB DIULANG";
			break;
		case "E":
			echo "TIDAK LULUS";
			break;	
		default:
			echo "Nilai yang dimaksud salah";
			break;
	}

?>