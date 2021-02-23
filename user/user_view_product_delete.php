<?php require('connection.php') ?>
<?php

$query1 = "SELECT * FROM docter_product WHERE product_id=".$_GET['product_id'];
$result1 = $conn->query($query1);
$row = $result1->fetch_assoc();

// echo "<pre>";
// print_r($row);
// echo"</pre>";
// die();
unlink($row['product_image']);
 // if(isset($_POST['delete'])){
  //echo "submit button worked";
  $query = "DELETE FROM  docter_product WHERE product_id=".$_GET['product_id'];
  //echo $query;
  $result = $conn->query($query);
   if($result==true) {
     $msg="Data Deleted ";
    header("location: user_view_product.php");
  } else {
     $msg="Data was not Deleted";
  }
  ?>
