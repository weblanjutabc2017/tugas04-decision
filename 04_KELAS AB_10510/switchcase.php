<? php
	$nilai;
	
	switch ($nilai){
		case $nilai = A+ || A- || A/B || B || B+ || B- || B/C:
		echo ("LULUS");
		break ;
		case $nilai = C || C+ || C- || C/D:
		echo ("LULUS, SEBAIKNYA DIULANG");
		break;
		case $nilai = D || D+:
		echo ("LULUS, WAJIB DIULANG");
		case $nilai = E:
		echo ("TIDAK LULUS!");
		default $nilai = E;
	}
?>