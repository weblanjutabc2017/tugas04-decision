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
			// PERCABANGAN MENGGUNAKAN IF-ELSEIF-ELSE
			if(isset($_POST["nilai"])) {
				$nilai = strtoupper(htmlentities($_POST["nilai"]));
				if(
					$nilai == "A" or
					$nilai == "A-" or
					$nilai == "A/B" or
					$nilai == "B+" or
					$nilai == "B" or
					$nilai == "B-" or
					$nilai == "B/C"
				) {
					$nilai = "LULUS";
				} elseif(
					$nilai == "C+" or
					$nilai == "C" or
					$nilai == "C-" or
					$nilai == "C/D"
				) {
					$nilai = "LULUS SEBAIKNYA DIULANG";
				} elseif(
					$nilai == "D+" or
					$nilai == "D"
				) {
					$nilai = "LULUS & WAJIB DIULANG";
				} elseif(
					$nilai == "E"
				) {
					$nilai = "TIDAK LULUS";
				} else {
					$invalid = true;
					$nilai = "<strong>MASUKAN TIDAK VALID!</strong>";
				}
				if(!isset($invalid)) $nilai = "<strong>PREDIKAT:</strong> " . $nilai;
				echo "<p>" . $nilai . "</p>";
			}
		?>
	</body>
</html>
