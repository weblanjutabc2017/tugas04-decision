<?php

	$nilai = "B/C" ;
	//echo "TIDAK LULUS";
	echo "<br />";
	echo $nilai;

if ($nilai == "E")
{
	echo "Tidak lulus";
}

else if (($nilai == "D" ) || ($nilai == "D+" ))
	echo "LULUS & WAJIB DIULANG";

else if (($nilai == "C" ) ||  ($nilai == "C+" ) || ($nilai == "C-" ) || ($nilai == "C/D" ))
	echo "LULUS SEBAIKNYA DIULANG";


else if (($nilai == "A") || ($nilai == "A-") || ($nilai == "A/B") ||($nilai == "B+") || ($nilai == "B")  || ($nilai == "B-")  || ($nilai == "B/C"))
	echo "LULUS";



?> 