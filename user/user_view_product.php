<?php require('connection.php') ?>
<?php
session_start();
if(!isset($_SESSION['doctor_id'])){
  header("Location:user_logout.php");
}
?>

<?php include "header1.php" ?>
</div>
</section>
<section class="middle-container view_product_section" id="view_product">
  <div class="container-fluid">
    <?php
    //$docter_id = $_SESSION['doctor_id'];
    //echo $docter_id;
    $query1 = "SELECT * FROM docter_product WHERE doctor_id=".$_SESSION['doctor_id'];
    $result1=$conn->query($query1);
     if($result1->num_rows>0) {
      while($row=$result1->fetch_assoc()) {
    ?>
        <div class="row">
          <div class="col-lg-4">
            <img class="medicine-img" src="<?php echo $row['product_image']?>"  alt="" />
          </div>
          <div class="col-lg-8 medicine-content">
            <h3>Product Name: <?php echo $row['product_name']?></h3>
            <h3>Product Price: <?php echo $row['product_price']?></h3>
            <a href="user_view_product_edit.php?product_id=<?php echo $row['product_id']?>"><button class="btn btn-primary input_btn">Edit</button></a>
            <a href="user_view_product_delete.php?product_id=<?php echo $row['product_id']?>"><button class="btn btn-danger input_btn">Delete</button></a>
            <a href="user_product.php"><button class="btn btn-info input_button">Back</button></a>
          </div>
        </div>
      <hr />
  <?php
   }
 }
?>
  </div>
</section>
<?php include "footer.php" ?>
