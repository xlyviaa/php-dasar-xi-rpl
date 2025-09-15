	<?php

	$students=[
	       ["083321", "via", "XI RPL", "JL. CIGADUNG", "perempuan", "1.jpg"],
	       ["082112", "jaehyun", "XI RPL", "JL. YABIN", "perempuan", "2.jpg"],
           ["081212", "ningning", "XI RPL", "JL. YABIN", "perempuan", "3.jpg"],
           ["082114", "jeno", "XI RPL", "JL. karina", "perempuan", "4.jpg"],
	       ];

	       var_dump($students[3][1]);

	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale">
	<title>array multidimensi</title>
</head>
<body>
	<?php foreach ($students as $students): ?>
		<ul>
			<li><img src="../foto/<?php echo $students['5'] ?>"></li>
		   <li><?php echo $students['0'] ?></li>
		   <li><?php echo $students['1'] ?></li>
		   <li><?php echo $students['2'] ?></li>
		   <li><?php echo $students['3'] ?></li>
		   <li><?php echo $students['4'] ?></li>
		</ul>
	<?php endforeach ?>

</body>
</html>