<?php
	require "core/classes/funlog.php";
	$user = new User();

	if(isset($_REQUEST['submit'])){
		extract($_REQUEST);
		$login = $user->check_login($username,$password);
		if($login){
			header("location:index.php");
		}
		else{
			echo '<script language="javascript">';
            echo 'alert("Wrong credentials")';
            echo '</script>';

		}
	}

	if(isset($_SESSION['id'])){
		header("location:dashboard.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
     <!--  -->
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>

    
</head>
<body id="home">
 
<div class="container-fluid">
<div class="container">
		<br><br>	<br><br>
		<div class="row-5">
  <div class="col-sm-6 pr-2 mx-auto">
	<div class="card text-center cb border-primary">
	<!-- 	<div class="card img-fluid">
    		<img class="card-img" src="assets/image/studentbg.jpg" >
    		<div class="card-img-overlay"> -->
	<div class="card-header cinz1"><h1>Login</h1>
	</div>
	<div class="card-body">
			<form id="login-form" action="" method="post" name="login"">
					<div class="input-group form-group">
						<div class="input-group-prepend ">
							<span class="input-group-text "><i class="fas fa-user" style="color: black;"></i></span>
						</div>
						<input type="text" class="form-control cinz" placeholder="username" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text cinz1"><i class="fas fa-key" style="color: black;"></i></span>
						</div>
						<input type="password" class="form-control cinz" placeholder="password" name="password">
					</div>
				
					<div class="form-group">
						<input onclick="return(submitLogin())" type="submit" name="submit" value="login" class="push_button blue mx-auto cinz1" style="font-size: 26px;">
					</div>

				</form>
	</div>
	 <div class="card-footer text-muted">
    <div class="d-flex justify-content-center links cinz1">
					Don't have an account?
				</div>
			<div class="d-flex justify-content-center links">
					<a href="register.php" class="cinz1 btn-lg ">Register</a>
				</div>

  	</div>
</div>
</div>
</div>

</div><?php include 'includes/footer.php'; ?>

</div>


</body>


</script>
<script src="assets/js/login.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>