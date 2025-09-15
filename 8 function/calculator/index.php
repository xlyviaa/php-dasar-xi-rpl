<?php

	$hasil=0;

	if (isset($_POST['tambah']) || isset($_POST['kurang']) || isset($_POST['kali']) || isset($_POST['bagi'])) 
	{
		$a1=$_POST['angka1'];
		$a2=$_POST['angka2'];

		function tambah(){
			global $a1 , $a2;
			return $a1+$a2;
		}
		function kurang(){
			global $a1 , $a2;
			return $a1-$a2;
		}
		function kali(){
			global $a1 , $a2;
			return $a1*$a2;
		}
		function bagi(){
			global $a1 , $a2;
			return $a1/$a2;
		}


		if (isset($_POST['tambah'])){
			$hasil = tambah();
		}elseif (isset($_POST['kurang'])){
			$hasil = kurang();
		}elseif (isset($_POST['kali'])){
			$hasil = kali();
		}elseif (isset($_POST['bagi'])){
			$hasil = bagi();
		}


	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale">
	<title>calculator</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container-fluid bg-primary-subtle d-flex justify-content-center align-items-center" style="min-height: 100vh">

		<div class="card bg-white py-5 px-4 text-center">
			<h5>calculator viaan</h5>
			<!-- nanti disini kita pakal alert-->
			<div class='alert alert-secondary mt-4 text-end' role='alert'>
			  <?= $hasil ?>
			 </div>
			<form method="post" action="">
				<input type="number" name="angka1" class="form-control my-2">
				<input type="number" name="angka2" class="form-control my-2">
					<div class="d-flax justify-content-between mt-4">
						<button class="btn btn-secondary" type="submit" name="tambah">+</button>
						<button class="btn btn-secondary" type="submit" name="kurang">-</button>
						<button class="btn btn-secondary" type="submit" name="kali">*</button>
						<button class="btn btn-secondary" type="submit" name="bagi">/</button>
					</div>
			</form>
		</div>
	</div>
</body>
</html>
