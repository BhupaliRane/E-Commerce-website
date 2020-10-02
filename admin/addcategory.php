<?php
  session_start();
	require_once 'connect.php';
  if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
		header("location: ../index.php");

	}

  if (isset($_POST) & !empty($_POST)){
  if ($_POST['categoryname'] == "") {
    echo "plz fill the details";
  }else{
  $name = mysqli_real_escape_string($connect, $_POST['categoryname']);
  $sql = "INSERT INTO category (name) VALUES ('$name')";
  $result = mysqli_query($connect,$sql);
  if ($result) {
    echo "category added";
  }else {
    echo "failed to add";  }
  }
}

	 ?>

<?php include 'nav.php'; ?>
<?php include 'base.php'; ?>

	<!-- SHOP CONTENT -->
	<section id="content">
    <div class="container">


    <div class="content-blog">

      <div class="container">

        <form method="post">
          <div class="form-group">
            <label for="Productname">Category Name</label>
            <input type="text" name="categoryname" id="Categoryname" class="form-control" placeholder="Category Name">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
   </div>
 </div>

</section>
