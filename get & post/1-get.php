<!DOCTYPE html>
<html lang="en">
<head>
	<title>get di php</title>
</head>
<body>
	<h1>get di php</h1>
	<form action="1-get.php" method="get">
		<input type="text" name="nama" placeholder="Nama">
		<input type="submit" value="Submit">
	</form>
	<?php
	echo $_GET['nama'];
	?>

</body>
</html>