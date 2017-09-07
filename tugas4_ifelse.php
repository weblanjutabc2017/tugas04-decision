<?php

$nilai="D-";

	if($nilai == "A"OR $nilai =="A-"OR $nilai =="A/B" OR $nilai =="B+" OR $nilai =="B"OR $nilai =="B-"OR $nilai =="B/C"){
		echo "LULUS";
	}elseif($nilai ==  "C" OR $nilai =="C-"OR $nilai =="C/D"){
		echo "LULUS SEBAIKNYA DIULANG";
	}elseif($nilai ==  "D" OR $nilai=="D-"){
		echo "LULUS & WAJIB DIULANG";
	}elseif($nilai ==  "E"){
		echo "TIDAK LULUS";
	}else {
		echo "Nilai yang dimasukkan salah";
	}
?>