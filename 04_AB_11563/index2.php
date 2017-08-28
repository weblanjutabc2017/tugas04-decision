<!doctype HTML>
<html>
	<head>
		<title>Predikator Nilai</title>
	</head>
	<body>
		<form method="post">
			<input type="text" name="nilai" placeholder="Masukkan nilai&hellip;" autofocus>
		</form>
		<?php
			// PERCABANGAN MENGGUNAKAN SWITCH-CASE
			if(isset($_POST["nilai"])) {
				$nilai = strtoupper(htmlentities($_POST["nilai"]));
				switch($nilai) {
					case "A":
					case "A-":
					case "A/B":
					case "B+":
					case "B":
					case "B-":
					case "B/C":
						$nilai = "LULUS";
						break;
					case "C+":
					case "C":
					case "C-":
					case "C/D":
						$nilai = "LULUS SEBAIKNYA DIULANG";
						break;
					case "D+":
					case "D":
						$nilai = "LULUS & WAJIB DIULANG";
						break;
					case "E":
						$nilai = "TIDAK LULUS";
						break;
					default:
						$invalid = true;
						$nilai = "<strong>MASUKAN TIDAK VALID!</strong>";
						break;
				}
				if(!isset($invalid)) $nilai = "<strong>PREDIKAT:</strong> " . $nilai;
				echo "<p>" . $nilai . "</p>";
			}
		?>
	</body>
</html>
