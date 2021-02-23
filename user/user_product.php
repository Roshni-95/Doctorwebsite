<?php require('connection.php') ?>
<?php
  session_start();
  if(!isset($_SESSION['doctor_id'])) {
    header("Location:user_logout.php");
  }

  //$row1 = mysql_fetch_array($query1);
  //print_r($row1);
  //$id = $row1['id'];

  if(isset($_POST['add_product']) && isset($_FILES['filetoupload'])) {
    //echo "button is worked";

    $FILES= basename($_FILES["filetoupload"]['name']);
		$target_dir = "medicineimages/";
		$target_file = $target_dir. microtime() .basename($_FILES["filetoupload"]["name"]);
		$uploadOk = 1;
		$uploadsucc = 0;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$msg="";

		//	echo $imageFileType;
		// Check if image file is a actual image or fake image
		if(!empty($_FILES["filetoupload"]["tmp_name"])) {
			$check= getimagesize($_FILES["filetoupload"]["tmp_name"]);
			if ($check !== false) {
				$msg=$msg."File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				$msg= $msg. "File is not an image";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if(file_exists($target_file)) {
			$msg = $msg."sorry,File already exists";
			$uploadOk = 0;
		}
		//check file size
		// Check file size
		if ($_FILES["filetoupload"]["size"] > 150000000) {
		  $msg=$msg. "Sorry, your file is too large.";
			$uploadOk = 0;
		}

		//check image file format
		//echo $imageFileType;
		if ($imageFileType != 'JPG' &&
      $imageFileType != "JPEG" &&
      $imageFileType != "PNG" &&
      $imageFileType != "GIF" &&
      $imageFileType != 'jpg' &&
      $imageFileType != "jpeg" &&
      $imageFileType != "png" &&
      $imageFileType != "gif"
    ) {
			$msg = $msg."sorry,only JPG,JPEG,PNG and GIF files are allowed.";
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		//echo $uploadOk; exit;
		if($uploadOk==0) {
			$msg = $msg. "sorry,your file was not uploaded";
		} else {
			//echo $msg;
		 //exit;
			if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file)) {
  			$uploadsucc = 1;
  			$msg = $msg."image has been uploaded";
			} else {
			$msg = $msg."Sorry,There was an error uploading your file";
			}
		}
		//echo 222;exit;
    $query = "INSERT INTO docter_product VALUES('','".$_SESSION['doctor_id']."','".$_POST['product_name']."', '".$_POST['product_price']."','".$target_file."')";
    //echo $query;

    $result = $conn->query($query);
    if($result==true) {
				$addmsg="Image inserted Successfully.";
		} else {
			$addmsg= "Fail image.";
      echo "Error: " .$query . "<br>" . $conn->error;
		}
        /*if(isset($msg))
        {
        echo $msg;
        }

        echo "<br/>";

        if(isset($addmsg))
          {
          echo $addmsg;
        }*/

}

 ?>

<?php include "header1.php" ?>
</div>
</section>
<section class="form-container product-form-section">
	<div class="container-fluid">
    <h2  class="add_product_title">Add New Product </h2>
    <div style=" margin-top:60px;">
      <span style="color:red;">
      <?php	if(isset($msg)) {
          echo $msg;
        }
      ?>
      </span>
    </div>
    <div class= "col-md-9">
      <div class="form-div">
        <form action="#" method="post" enctype="multipart/form-data" class="" id="">
          <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
              <div class="form-group">
      				 <input type="text"class="form-control form-control-lg form-control-a" name="product_name" id="product_name" value="" placeholder="Product Name" />
              </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <div class="form-group">
               <input type="text" class="form-control form-control-lg form-control-a" name="product_price" id="product_price" value="" placeholder="Product Price" />
              </div>
            </div>
            <div class="col-md-6 col-sm-12 mb-3">
              <div class="form-group">
               <input type="file" class="form-control form-control-lg form-control-a" name="filetoupload" id="product_img" value=""/>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="form-group">
      				 <input type="submit" class="btn btn-success btn-lg input_button" name= "add_product" value="ADD Product" />
              <button type="button" class="btn btn-primary btn-lg input_button"><a href="user_view_product.php">VIEW PRODUCT</a></button>
              </div>
            </div>
      	</form>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php" ?>
