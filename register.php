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
<body class="blb">

<div class="container cinz1">
	<br><br><br><br>
	<div class="card-group ">
	<div class="card ct">
	<div class="card-body">
	<form id="login-form" action="" method="post" name="register"">
		<h1>Registration</h1>
		<br>
  <div class="form-group row ">
    <label for="" class="col-sm-2 col-form-label sz">First name</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="firstname" placeholder="First name">
    </div>
    <label for="" class="col-sm-2 col-form-label sz">Last name</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="lastname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label sz">Gender</label>
    <div class="form-check form-check-inline col-sm-2">
  <input class="form-check-input ml-3" type="checkbox"  value="option1" name="gender">
  <label class="form-check-label" for="inlineCheckbox1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox"  value="option2" name="gender">
  <label class="form-check-label" for="inlineCheckbox2">Female</label>
</div>   
 <label for="" class="col-sm-2 col-form-label ml-1 sz">Address</label>
    <div class="col-sm-">
      <input type="text" class="form-control ml-3" name="address" placeholder="Address">
    </div>                    
  </div>
    <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label sz">Birthday</label>
    <div class="col-sm-3">
      <input type="date" class="form-control" name="birthday" placeholder="Birthday">
    </div>
<label for="" class="col-sm-2 col-form-label sz">Email</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label sz">Password</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" name="password" placeholder="Passwrod">
    </div>

<label for="" class="col-sm-2 col-form-label sz">Year</label>
    <div class="col-sm-3">
       <select  class="form-control" name="year">
 <option value="" disabled selected hidden>Adviser level</option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
</select>
    </div>

  </div>

  <div class="form-group row">
    <div class="col-sm-7 ">
      <button type="submit" class="blue push_button sz" onclick="return(submitReg())">Register</button>
    </div>
     <div class="col-sm-1">
     

     	<form>
   <button class="push_button red sz"  formaction="index.php">Back</button>
</form>
    </div>
  </div>
</form>
</div>
	</div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
<script src="assets/js/register.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>