<? php
 $nilai=A;
 
	if ($nilai = A){
		echo ("LULUS!");
		echo "<br />";
	} else if ($nilai = A- || A/B || B || B+ || B- || B/C){
		echo ("LULUS!");
		echo "<br />";
	} /*else if ($nilai = A/B){
		echo ("LULUS!");
		echo "<br />";
	}else if ($nilai = B ){
		echo ("LULUS!");
		echo "<br />";
	} else if ($nilai =B+){
		echo ("LULUS!");
		echo "<br />";
	} else if ($nilai =B-){
		echo ("LULUS!");
		echo "<br />";
	} else if ($nilai =B/C){
		echo ("LULUS!");
		echo "<br />";
	} */
	else if ($nilai = C || C+ || C- || C/D){
		echo ("LULUS, SEBAIKNYA DIULANG"){
		echo "<br />";
	} /*else if ($nilai = C+ || C- || C/D){
		echo ("LULUS, SEBAIKNYA DIULANG"){
		echo "<br />";
	} else if ($nilai = C-){
		echo ("LULUS, SEBAIKNYA DIULANG"){
		echo "<br />";
	} else if ($nilai = C/D){
		echo ("LULUS, SEBAIKNYA DIULANG"){
		echo "<br />";
	} */
	
	else if ($nilai = D || D+ ){
		echo ("LULUS, WAJIB DIULANG"){
		echo "<br />";
	} else {
		echo ("TIDAK LULUS"){
		echo "<br />";
	}	
?>