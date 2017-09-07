<?php

	$nilai = "D+";
	
	if($nilai == "A" or $nilai == "A-" or $nilai == "A/B" or $nilai == "B+" or $nilai == "B" or $nilai == "B-" or $nilai == "B/C"){
		echo "LULUS";
	}elseif($nilai == "C+" or $nilai == "C" or $nilai == "C-" or $nilai == "C/D"){
		echo "LULUS SEBAIKNYA DIULANG";
	}elseif($nilai == "D+" or $nilai == "D"){
		echo "LULUS WAJIB DIULANG";
	}elseif($nilai == "E"){
		echo "TIDAK LULUS";
	}else{
		echo "Nilai yang dimaksud salah";
	}

?>