 <?php
	require "../core/classes/funlog.php";
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