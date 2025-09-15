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
							<tr>
								<td>nisn</td>
								<td>:</td>
								<td><?= $_GET['nisn']?></td>
							</tr>
							<tr>
								<td>nama</td>
								<td>:</td>
								<td><?= $_GET['nama']?></td>
							</tr>
							<tr>
								<td>kelas</td>
								<td>:</td>
								<td><?= $_GET['kelas']?></td>
							</tr>
							<tr>
								<td>gender</td>
								<td>:</td>
								<td><?= $_GET['gender']?></td>
							</tr>
							<tr>
								<td>alamat</td>
								<td>:</td>
								<td><?= $_GET['alamat']?></td>
							</tr>
						</table>
				  <a href="data_siswa.php" class="btn btn-warning">kembali</a>
			  </div>
		   </div>
		</div>
    	</div>
    </div>
</div>
</body>
</html>