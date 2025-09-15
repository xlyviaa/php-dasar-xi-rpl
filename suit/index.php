<?php
	session_start();
	$random=rand(1,3);
	$Player="👤"; // yang muncul pertama kali di player
	$robot="🤖"; // yang muncul pertama kali di robot
	$hasil=""; // hasil pertama adalah kosong
	$lopePlayer="🖤🩶🖤"; // nyawa player
	$lopeRobot="🖤🩶🖤"; // nyawa robot

	if (isset($_POST['reset'])) {
		session_unset();
		session_destroy();

	}

	// ketika tombol yang di pilihan di klik
	if (isset($_POST["🖐"]) || isset($_POST["✌️"]) || isset($_POST["✊"])) 
	{
		//ketik player memilih
		if (isset($_POST['🖐'])) {
			$Player="🖐";
		}elseif (isset($_POST['✌️'])) {
			$Player="✌️";
		}elseif (isset($_POST['✊'])) {
			$Player="✊";
		}

		//ketika robot memilih
		if ($random == 1) {
			$robot="🖐";
		}elseif ($random == 2) {
			$robot="✌️";
		}elseif($random == 3){
			$robot="✊";
		}
	}

	// mencari hasil 
	if ($Player == $robot) {
		$hasil="hasil seri";
	}elseif(
		// syarat ketika player menang
		($Player=="🖐" && $robot=="✊") ||
		($Player=="✌️" && $robot=="🖐") ||
		($Player=="✊" && $robot=="✌️")

		)
	{
		
		$hasil="kamu menang";
	}elseif(
		// syarat ketika robot menang
		($robot=="🖐" && $Player=="✊") ||
		($robot=="✌️" && $Player=="🖐") ||
		($robot=="✊" && $Player=="✌️")
		
		)
	{
		
		$hasil="kamu kalah";
	}

	// logika pengurangam nyawa robot dan player
	// 1. kita simpan dulu jumlah nyawa robot dan player
	// 2. kita tampilkan kembali nyawa robot dan player sesuai dengan jumlah saat selasai suit

	if ($hasil=="kamu menang") {
		// cek apakah session nyawa robot ada?
		if (!isset($_SESSION['nyawaRobot'])) {
			// membuat session nyawa robot dengan isi 2
			$_SESSION['nyawaRobot']=2;
		}elseif ($_SESSION['nyawaRobot']==2) {
			// ubah session nyawa robot jadi 1
			$_SESSION['nyawaRobot']=1;
		}elseif ($_SESSION['nyawaRobot']==1) {
			// ubah session nyawa robot jadi 0
			$_SESSION['nyawaRobot']=0;
		}

	}elseif ($hasil=="kamu kalah") {
		// cek apakah session nyawa robot ada?
		if (!isset($_SESSION['nyawaPlayer'])) {
			// membuat session nyawa robot dengan isi 2
			$_SESSION['nyawaPlayer']=2;
		}elseif ($_SESSION['nyawaPlayer']==2) {
			// ubah session nyawa robot jadi 1
			$_SESSION['nyawaPlayer']=1;
		}elseif ($_SESSION['nyawaPlayer']==1) {
			// ubah session nyawa robot jadi 0
			$_SESSION['nyawaPlayer']=0;
		}
		
	}

	// menyimpan nyawa selesai
	if (isset($_SESSION['nyawaPlayer']) || isset($_SESSION ['nyawaRobot'])) {
		
		// khusus untuk mengurusi nyawa robot
		if (isset($_SESSION['nyawaRobot'])) {
		$nyawaRobot=$_SESSION['nyawaRobot'];

		if ($nyawaRobot==2) {
			$lopeRobot="🖤🩶";
		}elseif ($nyawaRobot==1) {
			$lopeRobot="🖤";
		}elseif ($nyawaRobot==0) {
			$lopeRobot="";
		}
	}

		// khusus untuk mengurusi nyawa player
		if (isset($_SESSION['nyawaPlayer'])) {
		$nyawaPlayer=$_SESSION['nyawaPlayer'];

		if ($nyawaPlayer==2) {
			$lopePlayer="🖤🩶";
		}elseif ($nyawaPlayer==1) {
			$lopePlayer="🖤";
		}elseif ($nyawaPlayer==0) {
			$lopePlayer="";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale">
	<title>suit</title>
	<!-- koneksikan dengan bootstrap css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!-- koneksikan dengan css sendiri-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- koneksikan dengan js bootstrap-->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="bg-img">
		<div class="bg-atas d-flex text-light">
			<div class=" kiri col-6 ps-4 d-flex align-items-center">
				<h1>👤</h1>
				<h4><?= $lopePlayer ?></h4>
				
			</div>
			<div class="kanan col-6 pe-4 d-flex align-items-center justify-content-end">
				<h4><?= $lopeRobot ?></h4>
				<h1>🤖</h1>	
			</div>
		</div>
		<!-- yang di tengah -->
		<div class="body d-flex align-items-center justify-content-center flex-column" style="height:85vh">

			<!-- tombol reset-->
			<form method="post" action="">
				<button type="submit" name="reset" class="btn btn-outline-light">reset</button>
			</form>


			<!-- ini tombol star -->
			<button type="submit" class="btn btn-outline-light mb-4" data-bs-toggle="modal" data-bs-target="#PilihEmoji">start</button>

			<!-- ini area arena -->
			<div class="arena bg-glases p-3 col-lg-8 row text-light">
				<div class="col-4 kiri p-3">
					<h5 class="">Player</h5>
					<h1 style="font-size: 80px;" class="text-center"><?= $Player ?></h1>
				</div>
				<div class="col-4 tengah p-3 text-center d-flex align-items-center justify-content-center flex-column">
					<p class="fw-bold" style="font-size: 60px">VS</p>
				</div>
				<div class="col-4 kanan p-3 text-end">
					<h5 class="">Robot</h5>
					<h1 style="font-size: 80px;" class="text-center"><?= $robot ?></h1>
				</div>
			</div>
			<!-- ini area end -->
			<!-- Modal -->
			<div class="modal fade" id="PilihEmoji" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered">
			    <div class="modal-content bg-glases text-light">
			      <div class="modal-header">
			        <h1 class="modal-title fs-5" id="exampleModalLabel">pilih emoji</h1>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body text-center">
			      	<form method="post" action="">
			      	<!-- ketika kita pilih kertas-->
			      	<button class="btn btn-outline-light" name="🖐">
			        	<h1>🖐</h1>
			        </button>
			        <!-- ketika kita pilih gunting-->
			        <button class="btn btn-outline-light mx-5" name="✌️">
			        	<h1>✌️</h1>
			        </button>
			        <!-- ketika kita pilih batu-->
			        <button class="btn btn-outline-light" name="✊">
			        	<h1>✊</h1>
			        </button>
			        </form>
			      </div>
			     </div>
			    </div>

			</div>

			    <!-- Modal end -->
			    

			    <!-- modal ketika pesan muncul -->
				<div class="modal fade" id="ModalPesan" tabindex="-1" aria-labelledby="modalpesan" aria-hidden="true">

				  <div class="modal-dialog modal-dialog-centered">
				    <div class="modal-content bg-glases text-light">
				  	 <div class="modal-body text-center">
				  	 	<h1><?= $hasil ?></h1>
				      </div>
				    </div>
				   </div>

				 </div>
				<!-- modal pesan end -->
		</div>
	</div>		
</body>
</html>

<?php if (!empty($hasil)): ?> <!-- titik dua -->
	<script>
		var hasilModal = new bootstrap.Modal(document.getElementById('ModalPesan')); // titik koma
			hasilModal.show(); // titik koma
	</script>
<?php endif ?>