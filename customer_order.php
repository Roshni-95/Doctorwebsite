<?php require('connection.php') ?>
<?php
if(isset($_POST['confirm_ordered'])){
  $customer_name = $_POST['customer_name'];
  $customer_email = $_POST['customer_email'];
  $customer_mobile = $_POST['customer_mobile'];
  $customer_address = $_POST['customer_address'];
  $product_item = $_POST['product_item'];
  $location = $_POST['location'];
  $payment = $_POST['payment'];

  $query ="INSERT INTO customer_order_details VALUES
  ('','$customer_name','$customer_email','$customer_mobile','$customer_address',
  '$product_item','  $location','$payment')";

  $result = $conn->query($query);
  if($result==true) {
     $msg = "DATA INSERTED";
  } else {
     $msg="DATA NOT INSERTED";
  }
}
?>
<?php include "header.php" ?>
</div>
</section>
<section class="form-container customer-order-section">
  <div class="container-fluid">
    <h2  class="customer_order_title">Customer Order </h2>
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
        <form action="" method="POST">
          <div class="row">
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <input type="text" id="customer_name" name="customer_name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <input type="email" name="customer_email" id="customer_email"  class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <input type="text" id="customer_mobile"  name="customer_mobile" class="form-control form-control-lg form-control-a" placeholder="mobile" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <textarea name="customer_address" id="address" class="form-control" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Address" required></textarea>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <?php
                $query1 = "SELECT * FROM docter_product";
                $result1 = $conn->query($query1);
                ?>
                <label for="product_item">product list:</label>
                <select name="product_item" class="form-control" id="product_item" required>
                  <?php
                  while($row=$result1->fetch_assoc()) {
                  ?>
                    <option value="<?php echo $row['product_id']?>"><?php echo $row['product_name']?></option>
                <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <?php
                $query2 = "SELECT * FROM admin_city";
                $result2 = $conn->query($query2);
                 ?>
                <label for="location">Location:</label>
                <select name="location" class="form-control" id="location" required >
                  <?php while($row=$result2->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row['city_id']?>"><?php echo $row['city_name']?></option>
                  <?php
                  }
                   ?>
                </select>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" id="creditcard" name="payment" value="creditcard" class="form-check-input" required/>Credit Card
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" id="debitcard" name="payment" value="debitcard" class="form-check-input" required />Debit Card
                  </label>
               </div>
               <div class="form-check-inline">
                  <label class="form-check-label">
                   <input type="radio" id="mastercard" name="payment" value="mastercard" class="form-check-input" required/>Master Card
                  </label>
               </div>
            </div>
          </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <input type = "submit"  class="btn btn-success input_button" name="confirm_ordered" value="CONFIRM ORDERED" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php" ?>
