<?php require('connection.php') ?>

<?php

if(isset($_POST['add']))
{
  $query="INSERT INTO admin_city values('','".$_POST['city_name']."')";
  $result=$conn->query($query);
   if($result==true) {
     $msg="City Added";
  } else {
   $msg="City was not Added.";
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
          <div class="row">
            <div class="col-md-12 mb-3">
              <div class="form-group">
      				<input type="text" class="form-control form-control-lg form-control-a" name="city_name" id="city_name" value="" placeholder="City" required />
              </div>
            </div>
            <div class="col-md-12">
							<div class="form-group">
      				<input type="submit" class="btn btn-success btn-block" name= "add" value="ADD" />
            	</div>
						</div>
      	</form>
      </div>
    </div>
  </div>
</section>

<!-----display city---->

<?php
$sql="select * from admin_city";
$result=$conn->query($sql);
 if($result->num_rows>0) {
?>
<table border="1" class="table table-dark">
<tr>
  <th>City Id</th>
  <th>City Name</th>
  <th>Edit</th>
  <th>Delete</th>
</tr>
<?php
 while($row=$result->fetch_assoc()) {
?>
<tr>
  <td><?php echo $row['city_id']?></td>
  <td><?php echo $row['city_name']?></td>
  <td><a href="admin_edit.php?city_id=<?php echo $row['city_id']?>"><button class="btn btn-success"><i class="fas fa-edit"></i></button></a></td>
  <td><a href="admin_delete.php?city_id=<?php echo $row['city_id']?>"><button class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a></td>
</tr>
<?php
 }
}
?>
</table>

<?php include "footer.php" ?>
