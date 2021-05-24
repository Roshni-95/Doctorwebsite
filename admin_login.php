<?php require('connection.php') ?>
<?php

if(isset($_POST['login'])){
  //echo "submit btn is worked";
  $query = "SELECT * FROM admin_details WHERE admin_email = '".$_POST['admin_email']."' and admin_password = '".$_POST['admin_password']."'";
//echo $query;
  $result = $conn->query($query);
  if (!empty($result) && $result->num_rows > 0) {
    $row=$result->fetch_assoc();
    header("location:admin/admin.php");
    exit;
  } else {
    $msg =  "plz fill correct password or email";
    }
}
 ?>

<?php include "header.php" ?>
</div>
</section>
<section class="form-container login-form-section">
	<div class="container-fluid">
    <h2 class="login_page_title">Login Page </h2>
    <div class= col-md-12>
      <div class="form-div">
        <div style=" margin-top:60px;">
          <span style="color:red;">
          <?php	if(isset($msg)) {
              echo $msg;
            }
          ?>
          </span>
        </div>
        <form action="#" method="post" enctype="multipart/form-data" class="" id="">
          <div class="row">
            <div class="col-md-12 mb-3">
              <div class="form-group">
      	        <input type="email"class="form-control form-control-lg form-control-a" name="admin_email" id="admin_email" value="" placeholder="Your Email"  />
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
               <input type="pwd" class="form-control form-control-lg form-control-a" name="admin_password" id="admin_password" value="" placeholder="Password" />
              </div>
            </div>
          </div>
            <div class="col-md-12">
	      <div class="form-group">
      		<input type="submit" class="btn btn-success btn-block" name= "login" value="LOGIN" />
              </div>
	    </div>
      	</form>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php" ?>
