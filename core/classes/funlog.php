<?php
session_start();	
include "./core/database/connection.php";

	class User
	{
		public $db;

		public function __construct(){
			$this->db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
				if(mysqli_connect_errno()){
					echo "Error: Could not connect to database.";
				exit;
		}	

	}

	public function reg_user($fname,$lname,$address,$age,$gender,$birthday,$prelim,$midterm,$finals){
			$average = (($prelim) + ($midterm) + ($finals))/3;
			$sql ="INSERT INTO std_table SET fname='$fname', lname='$lname',address='$address', age='$age', gender='$gender', birthday='$birthday', prelim='$prelim', midterm='$midterm', finals='$finals', average='$average'";
			// echo $sql;
			$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot insert inside table");
			return $result;
		}
	

	public function check_login($username,$password){
		/*	$password = md5($password);*/
		$sql2 = "SELECT id from admin where username='$username' and password= '$password'";

		$result = mysqli_query($this->db,$sql2);
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;


		if ($count_row == 1){

		$_SESSION['login'] = true;
		$_SESSION['id'] = $user_data['id'];
		return true;
		}
		else{
		return false;
		}

	}
	public function get_session(){
		return $_SESSION['login'];
	}

	public function user_logout(){
		return $_SESSION['login'] = FALSE;
		session_destroy();
	}

	


	
	public function fetch_data($table){
	$sql3 = "SELECT * FROM ".$table;
	$array = array();
	$query =mysqli_query($this->db,$sql3);
	while($row = mysqli_fetch_assoc($query)){
	$array[] = $row;
	}
	return $array;
	}
//Select DAta
public function select_data($table,$where){

$sql3 = "";
$condition = "";
foreach ($where as $key => $value){
# code...
$condition .= $key . "='" . $value . "' AND ";
}
$condition = substr($condition, 0, -5);
$sql3 .= "SELECT * FROM ".$table." WHERE ".$condition;
$query = mysqli_query($this->db,$sql3);
$rows = mysqli_fetch_array($query);
return $rows;

}
//End Select data


	public function delete_data($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" .$value. "' AND ";
			}
			$condition = substr($condition, 0, -5);
			$sql = "DELETE FROM ".$table. " WHERE " .$condition;
			//echo sql;
			if(mysqli_query($this->db,$sql)){

				return true;
		}
	}



	
 //Start Update
public function update_data($table,$where,$fields){
$sql = "";
$condition = "";
foreach ($where as $key => $value) {	
# code...
$condition .= $key . "='" .$value. "' AND ";


}
$condition = substr($condition, 0, -5);
foreach ($fields as $key => $value) {
# code...
$sql .= $key . "='".$value."', ";
}
$sql = substr($sql, 0, -2);value . "' AND ";
$sql = "UPDATE " .$table." SET ".$sql." WHERE " .$condition;
if (mysqli_query($this->db,$sql)) {
# code...
return true;
}
}
//End of Update
	
}
 $user = new User();



if(isset($_POST['edit_menu'])){
$id = $_POST['id'];
$average = (($_POST['edit_prelim']) + ($_POST['edit_midterm']) + ($_POST['edit_finals']))/3;
$where = array("std_id"=>$id);
$myarray = array (
"std_id"=> $_POST['id'],
"fname"=> $_POST['edit_fname'],
"lname"=> $_POST['edit_lname'],
"address"=> $_POST['edit_add'],
"age"=> $_POST['edit_age'],
"gender"=> $_POST['edit_gen'],
"birthday"=> $_POST['edit_day'],
"prelim"=> $_POST['edit_prelim'],
"midterm"=> $_POST['edit_midterm'],
"finals"=> $_POST['edit_finals'],
"average"=>$average
);
if ($user->update_data("std_table",$where,$myarray)) {
# code...
header("location:dashboard.php?msg= Updated!");
}
}

if (isset($_GET["delete"])){
		$id = $_GET["id"];
		$where = array("std_id"=>$id);

		if($user->delete_data("std_table",$where)){
			header("location:dashboard.php?msg=Successfully Deleted");
		}
	}

?>