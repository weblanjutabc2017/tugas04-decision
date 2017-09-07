<? php
	$nilai="B-";
	
	switch ($nilai){
		case  "A+" || "A-" || "A/B" || "B" || "B+" || "B-" || "B/C":
		echo "LULUS";
		break ;
		case "C" || "C+" || "C-" || "C/D":
		echo "LULUS, SEBAIKNYA DIULANG";
		break;
		case  "D" || "D+":
		echo "LULUS, WAJIB DIULANG";
		default :
		echo "TIDAK LULUS!";
		break;
	}
?>