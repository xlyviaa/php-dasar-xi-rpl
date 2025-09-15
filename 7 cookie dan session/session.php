<?php
	session_start();

	// ketika button buat di klik
	if (isset($_POST['buat'])) {
		// nama dari inputan
		$namasession=$_POST['session'];
		// membuat cookie
		$_SESSION['isi']= $namasession;

		header("Location:session.php");
	}

	// ketika button hapus klik
	if (isset($_POST['hapus'])) {

		// menghapus session
		session_unset();

		header("Location:session.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale">
	<title>session</title>
</head>
<body>
	<h1>nanti session muncul dibawah!</h1>
	<?php if (isset($_SESSION['isi'])): ?>
		<h4>isi dari session akan muncul <?= $_SESSION['isi']?></h4>
	<?php endif ?>
	<form method="post" action="">
		<input type="text" name="session">
		<button type="submit" name="buat">buat</button>
		<button type="sumbit" name="hapus">hapus</button>
	</form>
</body>
</html>