//Nama: Daniel siddiq
//NIM : 16/396270/SV/10483
<?php
	$a = "C";
	if ($a =="A"|| $a =="A-"|| $a =="A/B"|| $a =="B+"|| $a =="B"|| $a =="B-"|| $a =="B/C"){
		echo "Lulus";
	}
	elseif ($a =="C+"|| $a =="C"|| $a =="C-"|| $a =="C/D"){
		echo "Lulus Sebaiknya Diulang";
	}
	elseif ($a =="D+"|| $a =="D"){
		echo "Lulus dan Wajib Diulang";
	}
	else{
		echo "Tidak Lulus";
	}
?>
