<?php

	$nilai = "B";
	
	if($nilai = "A" or $nilai = "A-" or $nilai = "A/B" or $nilai = "B+" or $nilai = "B" or $nilai = "B-" or $nilai = "B/C"){
		echo "LULUS";
	}
	//utk percabangan if, akan ditampilkan/ dijalankan bila masuk dalam persyaratan/dalam kondisi terpenuhi
	elseif($nilai = "C+" or $nilai = "C" or $nilai = "C-" or $nilai = "C/D"){
		echo "LULUS SEBAIKNYA DIULANG";
	}
	elseif($nilai = "D+" or $nilai = "D"){
		echo "LULUS DAN WAJIB DIULANG";
	}
	else{
		echo "TIDAK LULUS";	
	}
?>