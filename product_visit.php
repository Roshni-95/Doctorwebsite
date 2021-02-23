<?php include "header.php" ?>
</div>
</section>
<section class="middle-container view_product_section" id="view_product">
  <div class="container-fluid">
		<?php require('connection.php') ?>
    <?php
		//$docter_id = $_SESSION['doctor_id'];
		//echo $docter_id;
		$query = "SELECT * FROM docter_product";
		$result=$conn->query($query);
		if($result->num_rows>0) {
		  while($row=$result->fetch_assoc()) {
		  ?>
		    <div class="row">
		      <div class="col-lg-4">
		        <img class="medicine-img" src="user/<?php echo $row['product_image']?>"  alt="" />
		      </div>
		      <div class="col-lg-8 medicine-content">
		        <h3>Product Name:<?php echo $row['product_name']?></h3>
		        <h3>Product Price:<?php echo $row['product_price']?></h3>
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
