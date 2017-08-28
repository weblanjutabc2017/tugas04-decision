<?

/* NAMA : HESYA MEGITASARI
   KELAS : PRAKTIKUM AB */
$a = String("x");

if($a = "A" || "B" || "A-" || "A/B" || "B+" || "B-" || "B/C"){
	echo "LULUS";
	break;
}else if($a = "C+" || "C" || "C-" || "C/D"){
	echo "LULUS SEBAIKNYA DIULANG";
	break;
}else if($a = "D+" || "D"){
	echo "LULUS DAN WAJIB DIULANG";
	break;
}else{
	echo "WAJIB DIULANG";
	break;
}
?>

