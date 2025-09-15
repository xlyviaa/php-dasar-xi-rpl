<?php

    if (isset($_POST['login'])) {
    	$username=$_POST['username'];
    	$password=$_POST['password'];

    	if ($username== "viaan" && $password=="xczviaa_2") {
    		setcookie('login', 'berhasil login haha', time() + 3600);
    		setcookie('user', $username , time() + 3600);

    		header("Location:dashboard.php");

    }else{
    	$pesan="
    	     <div class='alert alert-danger mt-4' role='alert'>
			  username dan password salah!
			 </div>

    	";
    }

  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale">
	<title>login cookie</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="contariner-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height:100vh">
		<div class="card py-5 px-4 text-center" style="border-radius:15px">
		     <h3>login</h3>
		     <?php 
		     if (isset($pesan)) {
		     	 echo $pesan;
		     	}
		     ?>
		     <form method="post" action="">
		     	<input type="text" placeholder="input username" name="username" class="form-control my-3">
		     	<input type="password" placeholder="input password" name="password" class="form-control my-3">
		     	<button type="submit" name="login" class="btn btn-primary btn-sm">login</button>
		     </form>
		</div>
	 </div>
</body>
</html>