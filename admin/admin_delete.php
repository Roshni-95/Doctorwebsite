<?php require('connection.php') ?>

<?php
if(isset($_GET['city_id'])) {
  //echo "btn worked";
  $query = "DELETE FROM admin_city WHERE city_id=".$_GET['city_id'];
  $result = $conn->query($query);
  if($result==true) {
    //$msg = "City Updated";
    header('location:admin.php');
    exit;
  } else {
    echo $msg = "City not Deleted.";
  }
}

?>
