<?php
	$a = "A";
	if ($a == "A" ||$a == "A-" ||$a == "A/B" ||$a == "B+" ||$a == "B" ||$a == "B-" || $a == "B/C"){
		echo "Lulus";
	} elseif ($a == "C+"||$a == "C"||$a == "C-"||$a == "C/D"){
		echo "Lulus Sebaiknya Diulang";
	} elseif ($a == "D+"||$a == "D"){
		echo "LULUS & WAJIB DIULANG";
	} else {
		echo "TIDAK LULUS";
	}
?>