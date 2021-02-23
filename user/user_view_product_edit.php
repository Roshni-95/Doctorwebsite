<?php require('connection.php') ?>
<?php

if(isset($_POST["update"])){
  //echo "submit button worked";
  $query = "UPDATE docter_product SET product_name='".$_POST['product_name']."',product_price='".$_POST['product_price']."' WHERE product_id=".$_GET['product_id'];
  $result = $conn->query($query);
  if($result==true){
     $msg="Data Updated ";
  } else {
     $msg="Data was not Updated";
  }
}
?>

<?php include "header1.php" ?>
</div>
</section>
<section class="form-container product-form-section">
	<div class="container-fluid">
    <h2  class="update_product_title">Update Product </h2>
    <div style=" margin-top:60px;">
      <span style="color:red;">
      <?php	if(isset($msg)) {
          echo $msg;
        }
      ?>
      </span>
    </div>
    <?php
    $query1 = "SELECT * FROM docter_product WHERE product_id=".$_GET['product_id'];
    $result1 = $conn->query($query1);
     if($result1->num_rows>0) {
      while($row= $result1->fetch_assoc()) {
    ?>
        <div class="col-md-9">
          <div class="form-div">
            <form action="" method="POST">
              <div class="row">
                <div class="col-md-6 col-sm-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg form-control-a" name="product_name" value="<?php echo $row["product_name"]?>" id="product_name" placeholder="Product Name"/>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg form-control-a" name="product_price" value="<?php echo $row["product_price"]?>" id="product_price" placeholder="Product Price"/>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                  <div class="form-group">
                    <input type="submit"  class="btn btn-success btn-lg input_button" name="update" value="update" />
                      <a href="user_view_product.php" class="btn btn-secondary btn-lg input_button">Go To Back</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      <?php
      }
    }
    ?>
  </div>
</section>

<?php include "footer.php" ?>
