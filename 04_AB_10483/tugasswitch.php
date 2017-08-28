<?php
	$a = "A";
	
	switch ($a){
		case $a =="A"|| $a =="A-"|| $a =="A/B"|| $a =="B+"|| $a =="B"|| $a =="B-"|| $a =="B/C":
			echo "Lulus";
			break;
		case $a =="C+"|| $a =="C"|| $a =="C-"|| $a =="C/D":
			echo "Lulus Sebaiknya Diulang";
			break;
		case $a =="D+"|| $a =="D":
			echo "Lulus dan Wajib Diulang";
			break;
		default:
			echo "Tidak Lulus";
			break;
	}
?>
