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

    <!-- menghubngkan -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
	<div class="container-fluid bg-primary-subtle py-5">
		<div class="container">
			<!-- card -->
			<div class="card">
				<table class="card-header">
					data siswa
				</div>
				<div class="card-body">
					<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">no</th>
							      <th scope="col">foto</th>
							      <th scope="col">nisn</th>
							      <th scope="col">nama</th>
							      <th scope="col">gender</th>
							      <th scope="col">kelas</th>
							      <th scope="col">alamat</th>
							      <th scope="col">aksi</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php foreach ($students as $students): ?>
							    <tr>
							      <th scope="row"><?= $no; ?></th>
							      <td><img src="../foto/<?= $students['5'] ?>" class="rouded"></td>
							      <td><?= $students['0'] ?></td>
							      <td><?= $students['1'] ?></td>
							      <td><?= $students['2'] ?></td>
							      <td><?= $students['3'] ?></td>
							      <td><?= $students['4'] ?></td>
							      <td>
							      	<a href="edit.php?foto=<?= $students['5'] ?>&nisn=<?= $students['0'] ?>&nama=<?= $students['1'] ?>&kelas=<?= $students['2'] ?>&gender=<?= $students['4'] ?>&alamat=<?= $students['3'] ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
							      	<a href="detail.php?foto=<?= $students['5'] ?>&nisn=<?= $students['0'] ?>&nama=<?= $students['1'] ?>&kelas=<?= $students['2'] ?>&gender=<?= $students['4'] ?>&alamat=<?= $students['3'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
							      </td>
							    </tr>
							<?php $no++ ?>    
							<?php endforeach ?>
							  </tbody>
					</table>
					<button class="btn-success">coba</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>