<?php
	$a = "B+";

	if ($a == "A" || $a == "A-" || $a == "A/B" || $a == "B+" || $a == "B" || $a == "B-" || $a == "B/C"){
		echo "LULUS";
	}
	elseif ($a == "C+" || $a == "C" || $a == "C-" || $a == "C/D"){
		echo "LULUS SEBAIKNYA DIULANG";
	}
	elseif ($a == "D+" || $a == "D"){
		echo "LULUS WAJIB DIULANG";
	}
	else{
		echo "TIDAK LULUS";
	}

	
?>