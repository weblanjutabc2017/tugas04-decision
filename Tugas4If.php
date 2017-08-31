<?php

$Nilai = "A"; 

echo "Nilai = $Nilai, maka predikat: ";

if($Nilai == "A" | $Nilai == "A-"| $Nilai == "A/B"| $Nilai == "B"| $Nilai == "B+"| $Nilai == "B/C"){
	echo "Lulus";
}elseif ($Nilai == "C+" | $Nilai == "C"| $Nilai == "C-"| $Nilai == "C/D"){
	echo "Lulus Sebaiknya Diulang";
}elseif ($Nilai == "D+" | $Nilai == "D"){
	echo "Lulus & Wajib Diulang";
}else {
	echo "Tidak Lulus";
}

?>