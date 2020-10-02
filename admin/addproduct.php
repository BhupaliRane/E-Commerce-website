<?php
  session_start();
	require_once 'connect.php';
  include_once 'nav.php';
  include_once 'base.php';
  if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
		header("location: ../index.php");

	}
  $location = "";
  $ulocation = "";

   if (isset($_POST) & !empty($_POST)) {
     $name1 = mysqli_real_escape_string($connect, $_POST['productname']);
     $productdescription = mysqli_real_escape_string($connect, $_POST['productname']);
     $productcategory = mysqli_real_escape_string($connect, $_POST['productcategory']);
     $productprice = mysqli_real_escape_string($connect, $_POST['productprice']);
     if (isset($_FILES) & !empty($_FILES)) {
       $name = $_FILES['productimage']['name'];
       $size = $_FILES['productimage']['size'];
       $type = $_FILES['productimage']['type'];
       $tmp_name = $_FILES['productimage']['tmp_name'];

       $max_size = 1000000;
       $extension = substr($name, strpos($name, '.') +1);
       if (isset($name) & !empty($name)) {
           if (($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png')  & $size <= $max_size) {
             $location = 'uploads/';
             // $ulocation = '../user/uploads/';
             if(move_uploaded_file($tmp_name, $location.$name)) {
               // if(move_uploaded_file($tmp_name, $ulocation.$name))
               // { echo "uploaded in user also";}
               echo "uploaded succesfully";
             } else {
               echo "failed to upload";

             }

           }else {
             echo "only jpg files allow and size should be less than 1mb";
           }
       } else {
           echo "please select a file";
       }


     }

     $sql = "INSERT INTO products (name, catid, price, description, thumb) VALUES ('$name1', '$productcategory', '$productprice', '$productdescription', '$location$name')";
     $result = mysqli_query($connect,$sql);
     if ($result) {
       $smsg = "category Added";
     }else {
       $fmsg = "error";
     }


   }


  ?>

<?php include 'base.php'; ?>

	<section id="content">
		<div class="content-blog">
			<div class="container">
				<form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="Productname">Product Name</label>
            <input type="text" name="productname" class="form-control" id="productname" placeholder="Product Name">
          </div>
          <div class="form-group">
            <label for="Productname">Product Description</label>
            <textarea name="productdescription" class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="productcategory">Product Category</label>
            <select class="form-control" name="productcategory">
              <option value="">------------select categoryp------------</option>
              <?php
              $sql = "SELECT * FROM category";
              $res = mysqli_query($connect, $sql);
              while ($r = mysqli_fetch_assoc($res)) {


                ?>
            <option value=""><?php echo $r['name']; ?></option>
          <?php } ?>
            </select>
<br>
            <div class="form-group">
              <label for="productprice">Product Price</label>
              <input type="text" name="productprice" id="productprice"class="form-group" placeholder="Product Price">
            </div>
          </div>
          <div class="form-group">
            <label for="productimage">Product Image</label>
            <input type="file" name="productimage" id="productimage" class="form-group">
          </div>
          <button type="submit" class="btn btn-primary" name="button">Submit</button>
        </div>
       </form>
     </div>
	</section>
