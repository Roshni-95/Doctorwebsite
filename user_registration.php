<?php require('connection.php') ?>
<?php
if(isset($_POST["submit"])){
  //echo "print data";
  $name = $_POST['name'];
  if(isset($_POST['gender'])){
  $gender = $_POST['gender'];
  }
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];
  $degree = $_POST['degree'];
 //echo "<pre>";
 //print_r($_POST);
  $sql = "INSERT INTO docter_registration VALUES('','$name','$gender','$email','$password','$mobile','$degree')";
  $result=$conn->query($sql);
  if($result==true) {
    header("location:home.php"); //echo "data inserted";
  }else {
    $msg = "data not inserted"; //echo "Error: " . $sql . "<br>" . $conn->error;$msg "data not inserted";
  }
}
?>
<?php include "header.php" ?>
</div>
</section>
<section class="form-container registration-form-section">
	<div class="container-fluid">
    <h2  class="registration_title">Registration Page </h2>
    <div class= col-md-9>
      <div class="form-div">
        <div style=" margin-top:60px;">
          <span style="color:red;">
          <?php	if(isset($msg)) {
              echo $msg;
            }
          ?>
          </span>
        </div>
        <form action="#" method="post" class="" id="">
          <div class="row">
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label for="name">Name:</label>
      				  <input type="text" id="name" name="name" value="" class="form-control" required/>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                 <div class="form-check-inline">
                 <label class="form-check-label">
                    <input type="radio" id="male" name="gender" value="male" class="form-check-input"/>Male
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" id="female" name="gender" value="female" class="form-check-input"/>Female
                  </label>
               </div>
               <div class="form-check-inline">
                 <label class="form-check-label">
                   <input type="radio" id="other" name="gender" value="other" class="form-check-input"/>Other
                 </label>
               </div>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" value=""  class="form-control" required/>
            </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="pwd" id="password" name="password" value="" class="form-control" required/>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label for="mobile">Mobile no:</label>
                <input type="tel" id="mobile" name="mobile" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="123-45-678" class="form-control" required/>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label for="degree">Degree:</label>
                <input type="text" name="degree" value="" class="form-control" required/>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
      				  <input type="submit" class="btn btn-success btn-block" name= "submit" value="SUBMIT" />
              </div>
            </div>
      	</form>
        </div>
      </div>
    </div>
</section>

<?php include "footer.php" ?>
