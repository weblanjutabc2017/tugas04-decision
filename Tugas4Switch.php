<?php

$Nilai = "A";

echo "Nilai = $Nilai, maka predikat: ";

switch ($Nilai){
	case $Nilai == "A" or $Nilai == "A-" or $Nilai == "A/B" or $Nilai == "B" or $Nilai == "B+" or $Nilai == "B/C";
		echo "Lulus";
		break;
	case $Nilai == "C+" or $Nilai == "C" or $Nilai == "C-" or $Nilai == "C/D";
		echo "Lulus Sebaiknya Diulang";
		break;
	case $Nilai == "D+" or $Nilai == "D";
		echo "Lulus & Wajib Diulang";
		break;
	default;
		echo "Tidak Lulus";
		break;
}

?>