<?php require('connection.php') ?>

<?php
session_start();
if(isset($_SESSION['doctor_id'])){
	 header("Location:user/user_product.php");
 }

if(isset($_POST['login'])){
  //echo "submit btn is worked";
  $query = "SELECT * FROM docter_registration WHERE email = '".$_POST['email']."' and password = '".$_POST['password']."'";
  //echo $query;
  $result = $conn->query($query);
  if (!empty($result) && $result->num_rows > 0) {
    $row=$result->fetch_assoc();
    //print_r($row);
    $_SESSION["doctor_id"] = $row['id'];
    //echo $_SESSION['doctor_id'];
    $_SESSION['email']=$row['email'];
    	echo '<script> window.location="user/user_product.php"; </script>';
  } else {
    $msg = "plz fill correct password or email";
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
      				  <input type="email"class="form-control form-control-lg form-control-a" name="email" id="email" value="" placeholder="Your Email"  />
              </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <input type="pwd" class="form-control form-control-lg form-control-a" name="password" id="password" value="" placeholder="Password" />
                </div>
              </div>
          </div>
            <div class="col-md-12">
							<div class="form-group">
      				  <input type="submit" class="btn btn-success btn-block" name= "login" value="LOGIN" />
            	</div>
						</div>
						<div class="col-md-12">
							<p class="sign_up_text">Don't have an account yet ?<a href="user_registration.php">
								<span class="sign-up-link">&nbsp Create an account</span></a></p>
						</div>
      	</form>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php" ?>
