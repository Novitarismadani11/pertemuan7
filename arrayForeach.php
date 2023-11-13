<?php

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>looping for array</title>
</head>
<body>
	<?php

		foreach ($nama as $absen) {//forench akan otomatis menampilkan semua isi array
			echo "<li>$absen<li>";
		}

	?>
</body>
</html>