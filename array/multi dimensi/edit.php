	<?php

	$students=[
	       ["083321", "via", "XI RPL", "JL. CIGADUNG", "perempuan", "1.jpg"],
	       ["082112", "jaehyun", "XI RPL", "JL. YABIN", "perempuan", "2.jpg"],
           ["081212", "ningning", "XI RPL", "JL. YABIN", "perempuan", "3.jpg"],
           ["082114", "jeno", "XI RPL", "JL. karina", "perempuan", "4.jpg"],
	       ];
	$no=1;
	?>
<!DOCTYPE html>
<html>
<head>
	<title>data siswa</title>
	<!-- menghubungkan CDN Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
	<!-- menghubungkan CDN Bootstrap JS -->
	<link rel="stylesheet" type="text/css" href="ttps://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">

    <!-- menghubngkan cdn icons bootstrap-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
	<div class="container-fluid bg-primary-subtle py-5">
		<div class="container">
			<!-- card -->
			<div class="card">
				<div class="card-header">
					detail siswa

				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-3">
							<img src="../foto/<?= $_GET['foto'] ?>" class="rounded" style="width: 100%;">
						</div>
					<div class="col-6">
						<table>
							 <form>
							  <div class="mb-3">
							    <label for="exampleInputEmail1" class="form-label">NISN</label>
							    <input type="text" value=" <?= $_GET['nisn']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Nama</label>
							    <input type="text" value=" <?= $_GET['nama']?>" class="form-control" id="exampleInputPassword1">
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Kelas</label>
							    <input type="text" value=" <?= $_GET['kelas']?>" class="form-control" id="exampleInputPassword1">
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Gender</label>
							    <input type="text" value=" <?= $_GET['gender']?>" class="form-control" id="exampleInputPassword1">
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Alamat</label>
							    <input type="text" value=" <?= $_GET['alamat']?>" class="form-control" id="exampleInputPassword1">
							  </div>
							  <button type="submit" class="btn btn-primary">Submit</button>
							  <a href="data_siswa.php" class="btn btn-warning">kembali</a>
							</form>
						</table>  
	                  </div>
	                </div>
	            </div>
	        </div>
	    </div>
	 </div>
</body>
</html>
