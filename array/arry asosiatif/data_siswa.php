<?php

        $students = [
		[
         "nisn" => "083321",
         "nama" => "via",
         "kelas" => "XI RPL",
         "alamat" => "JL. CIGADUNG",
         "gender" => "perempuan",
         "foto" => "1.jpg",
		],
		[
         "nisn" => "082112",
         "nama" => "jaehyun",
         "kelas" => "XI RPL",
         "alamat" => "JL. YABIN",
         "gender" => "perempuan",
         "foto" => "2.jpg",
		],
		[
         "nisn" => "081212",
         "nama" => "ningning",
         "kelas" => "XI RPL",
         "alamat" => "JL. YABIN",
         "gender" => "perempuan",
         "foto" => "3.jpg",
		],
		[
         "nisn" => "082114",
         "nama" => "jeno",
         "kelas" => "XI RPL",
         "alamat" => "JL. karina",
         "gender" => "perempuan",
         "foto" => "4.jpg",
		],
	];
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
?>
	<?php
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
							      <td><img src="../foto/<?= $students['foto'] ?>" class="rouded"></td>
							      <td><?= $students['nisn'] ?></td>
							      <td><?= $students['nama'] ?></td>
							      <td><?= $students['kelas'] ?></td>
							      <td><?= $students['gender'] ?></td>
							      <td><?= $students['alamat'] ?></td>
							      <td>
							      	<a href="edit.php?foto=<?= $students['foto'] ?>
							      	&nisn=<?= $students['nisn'] ?>
							      	&nama=<?= $students['nama'] ?>
							      	&kelas=<?= $students['kelas'] ?>
							      	&gender=<?= $students['gender'] ?>
							      	&alamat=<?= $students['alamat'] ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>

							      	<a href="detail.php?foto=<?= $students['foto'] ?>
							      	&nisn=<?= $students['nisn'] ?>
							      	&nama=<?= $students['nama'] ?>
							      	&kelas=<?= $students['kelas'] ?>
							      	&gender=<?= $students['gender'] ?>
							      	&alamat=<?= $students['alamat'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
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