<?php
    // ketikan button buat si klik
	if (isset($_POST['buat'])) {
		//nama dari iputan
		$namakue=$_POST['kue'];
		// membuat cookie
    	setcookie('kue', $namakue , time() + 3600);
        
        header("location:COOKIE.php");
    }

     // ketikan button buat si klik
	if (isset($_POST['hapus'])) {
		
		// menghapus cookie
    	setcookie('kue', "" , time() + 3600);
        
        header("location:COOKIE.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale">
	<title>cookie</title>
</head>
<body>
	<h1>nanti cookie muncul di bawah!</h1>
	<?php if (isset($_COOKIE['kue'])): ?>
		<h4>sekarang kita makan kue <?= $_COOKIE['kue']?></h4>
	<?php endif ?>
    <form method="post" action="">
    	<input type="text" name="kue">
    	<button type="submit" name="buat">buat</button>
    	<button type="submit" name="hapus">hapus</button>
    </form>
</body>
</html>