<?php require('connection.php') ?>

<?php

if(isset($_POST['update'])) {
  //echo "btn worked";
  $query = "UPDATE admin_city SET city_name='".$_POST['city_name']."'WHERE city_id=".$_GET['city_id'];
  $result = $conn->query($query);
  if($result==true) {
    //$msg = "City Updated";
    header('location:admin.php');
  } else {
    $msg = "City not Updated.";
  }
}

?>

<?php include "header1.php" ?>
</div>
</section>
<section class="form-container admin-form-section">
	<div class="container-fluid">
    <h2 class="add_city_title">Add City</h2>
    <div class= col-md-12>
      <div class="form-div">
        <span style="color:red;">
      	<?php
      		if(isset($msg)) {
      			echo $msg;
      		}
      	?>
      	</span>
        <form action="#" method="post"  class="" id="">
          <?php
           $query1 = "SELECT * FROM admin_city WHERE city_id=".$_GET['city_id'];
           $result1=$conn->query($query1);
    			  if($result1->num_rows>0) {
    				 while($row=$result1->fetch_assoc()) {
    			?>
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="form-group">
        				<input type="text"class="form-control form-control-lg form-control-a" name="city_name" id="city" value="<?php echo $row['city_name']?>" placeholder="City"  />
                </div>
              </div>
              <div class="col-md-12">
  							<div class="form-group">
        				 <input type="submit" class="btn btn-primary input_button" name= "update" value="UPDATE" />
                 <a href="admin.php" class="btn btn-secondary input_button">Go To Back</a>
              	</div>
  						</div>
        	</form>
        </div>
        <?php
          }
        }
        ?>
    </div>
  </div>
</section>
