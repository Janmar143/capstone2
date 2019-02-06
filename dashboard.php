<?php 
  require "core/classes/funlog.php";
  $user = new User();

    if(isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $user->reg_user($fname,$lname,$address,$age,$gender,$birthday);
        if($register){
            echo '<br><br><p class="text-info"><b>Registration successful</b></p>';
            
        }
        else{
            echo 'Registration failed. Email or Username already exits please try again';
        }
    }
include './includes/header.php';
?>

<body id="home">
  
<div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar(this)">
    <span></span>
    <span></span>
    <span></span>
  </div>  
  <div class="list">
    <div class="item"><button class="butnav btn-info "  onclick="openOperate(event, 'Add')" id="defaultOpen">Add</button> </div>
    <div class="item"><button class="butnav btn-info"  onclick="openOperate(event, 'View')" id="defaultOpen">View</button></div>
    
    <div> <a href="includes/logout.php" onclick="return(sublog())" class="btn btn-danger mt-1" style="font-family: 'Baloo Thambi';">LOGOUT</a></div>
  </div>
</div>

<div class="content justify-content-center"  id="View">
  <?php 
    $mysqli = new mysqli('localhost','admin','admin','student') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM std_table") or die($mysqli->error);
  ?> 

 <div class="card ml-5">
    <table class="table">
      <thead>
        
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th >Address</th>
          <th >Age</th>
          <th >Gender</th>
          <th >Birthday</th>
          <th>Action</th>
        </tr>
      </thead> 
      <?php
       while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['fname']; ?></td>
          <td><?php echo $row['lname']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php echo $row['age']; ?></td>
          <td><?php echo $row['gender']; ?></td>
          <td><?php echo $row['birthday']; ?></td>
          <td>
           <a href="dashboard.php?get=<?php echo $_SESSION['id']; ?>&id=<?php echo $row['std_id']; ?>" 
                class="btn btn-info">Edit</a>
           
      <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=1&id=<?php echo $row["std_id"];?>"><button type="button" class="btn btn-danger">Delete</button></a>
          </td>
        </tr>    
        <?php endwhile; ?> 
    </table>
  </div>
<?php 
if (isset($_GET["get"])) {
 # code...
 $id = $_GET["id"];
 $where = array("std_id"=>$id,);
 $row = $user->select_data("std_table",$where);

?>
<div class=" container card mt-5 col-sm-5">
 <form action="" method="POST" id="edit_products">
   <div class="form-group">
     <label for="inputEmail4">First Name</label>
     <input type="hidden" name="id" value="<?php echo $row['std_id'];?>" readonly>
     <input type="text" class="form-control" id="edit_fname" name="edit_fname" value="<?php echo $row['fname']?>">
   </div>
   <div class="form-group ">
     <label for="inputPassword4">Last Number</label>
     <input type="text" class="form-control" name="edit_lname" id="edit_lname" value="<?php echo $row['lname']?>">
   </div>
   <div class="form-group ">
     <label for="inputPassword4">Address</label>
     <input type="text" class="form-control" name="edit_add" id="edit_add" value="<?php echo $row['address']?>">
   </div>
   <div class="form-group ">
     <label for="inputPassword4">Age</label>
     <input type="text" class="form-control" name="edit_age" id="edit_age" value="<?php echo $row['age']?>">
   </div>
    <div class="form-group ">
     <label for="inputPassword4">Gender</label>
     <input type="text" class="form-control" name="edit_gen" id="edit_gen" value="<?php echo $row['gender']?>">
   </div>
   <div class="form-group ">
     <label for="inputPassword4">Birthday</label>
     <input type="text" class="form-control" name="edit_day" id="edit_day" value="<?php echo $row['birthday']?>">
   </div>
           <input type="submit" name="edit_menu" id="edit_menu" value="Edit" class="btn btn-success" />
 </form>
     </div>
<?php } ?>
</div>



<div class="content card ml-5" id="Add">

<form id="login-form" action="" method="post" name="register" class="justify-content-center"> 

<div class="row">
    <div class="card-group ">
        <div class="card ct">
              <div class="card-body">

    <h1>Registration</h1>
    <br>
  <div class="form-group row ">
    <label for="" class="col-sm-2 col-form-label sz">First name</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="fname" placeholder="First name" required="">
    </div>
    <label for="" class="col-sm-2 col-form-label sz">Last name</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="lname"  placeholder="Last Name" required="">
    </div>
  </div>

  <div class="form-group row">
  <label for="" class="col-sm-2 col-form-label sz">Gender</label>
    <div class="col-sm-3">
       <select  class="form-control" name="gender" required="">
 <option value="" disabled selected hidden>Gender</option>
 <option value="male">male</option>
 <option value="female">female</option>
</select>
    </div>
 <label for="" class="col-sm-2 col-form-label sz">Address</label>
    <div class="col-sm-3">
      <input type="text" class="form-control ml-1" name="address"  placeholder="Address" required="">
    </div>                    
  </div>

    <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label sz">Birthday</label>
    <div class="col-sm-3">
      <input type="date" class="form-control" name="birthday"  placeholder="Birthday" required="">
    </div>
<label for="" class="col-sm-2 col-form-label sz">Age</label>
    <div class="col-sm-3">  
      <input type="text" class="form-control" name="age" placeholder="age" required="">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-7 ">
      <button type="submit" class="blue push_button" name="submit" >Add</button>
    </div>
  </div>

                            </div>
                       </div>
                </div>
           </div>
    </form>
</div>


</body>
<script type="text/javascript">
    function toggleSidebar(ref){
  document.body.classList.toggle('sidebar-active');
}

function openOperate(evt, cityName) {
    var i, content, tablinks;
    content = document.getElementsByClassName("content");
    for (i = 0; i < content.length; i++) {
        content[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

  function sublog(){
  alert("Logout Succesful");

  }

</script>
