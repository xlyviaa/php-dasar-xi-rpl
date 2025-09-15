<!DOCTYPE html>
<html>
<head>
	<title>3 nilai</title>
</head>
<body>
	<?php
	$na = 101;

    if ($na >= 101) {
		echo ("keterangan : nilai tidak valid");
		echo "<br>";
		echo ("predikat : nilai tidak valid");
		echo "<br>";
		echo ("nilai akhir :. $na");
	}
	elseif ($na > 90) {
	    echo "<br>";
	    echo("Keterangan : Lulus");
	    echo("<br>");
	    echo("Predikat : A");
	    echo("<br>");
	    echo("Nilai akhir :" . $na);
	    echo("<br>");
	} else if ($na > 80) {
	    echo "<br>";
	    echo("Keterangan : Lulus");
	    echo("<br>");
	    echo("Predikat : B");
	    echo("<br>");
	    echo("Nilai akhir :" . $na);
	    echo("<br>");
	} else if ($na >= 70) {
	    echo("Keterangan : Lulus");
	    echo("<br>");
	    echo("Predikat : C");
	    echo("<br>");
	    echo("Nilai akhir :" . $na);
	    echo("<br>");
	} else if ($na >= 60) { 
	    echo("Keterangan : Tidak Lulus");
	    echo("<br>");
	    echo("Predikat : D");
	    echo("<br>");
	    echo("Nilai akhir :" . $na);
	    echo("<br>");
	}elseif ($n >= 0) {
		echo ("keterangan : tidak lulus");
		echo "<br>";
		echo ("predikat : E");
		echo "<br>";
		echo ("nilai akhir :. $na");
	}elseif ($na <= -1) {
		echo ("keterangan : nilai tidak valid");
		echo "<br>";
		echo ("predikat : nilai tidak valid");
		echo "<br>";
		echo ("nilai akhir :. $na");
	}
	?>

</body>
</html>