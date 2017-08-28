
<?php
	$nilai="A/B";
	switch ($nilai) {
		case $nilai == "E":
			# code...
		echo " TIDAK LULUS";
			break;
		case  (($nilai == "D" ) || ($nilai == "D+" )):
		echo "LULUS & WAJIB DIULANG";
			# code...
			break;
		case (($nilai == "C" ) ||  ($nilai == "C+" ) || ($nilai == "C-" ) || ($nilai == "C/D" )):
		echo  "LULUS SEBAIKNYA DIULANG";
			break;
		default:
		echo "LULUS";
			# code...
			break;
	}


?> 