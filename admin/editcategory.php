<?php
  session_start();
	require_once 'connect.php';
  session_start();
  if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
    header("location: ../index.php");

  }

  if(isset($_GET) & !empty($_GET)){
      $id = $_GET['id'];
  }else {
    echo "get not working";
    // header("Location: categories.php");
  }


  if (isset($_POST) & !empty($_POST)){
  $id = mysqli_real_escape_string($connect, $_POST['id']);
  $name = mysqli_real_escape_string($connect, $_POST['categoryname']);
  $sql = "UPDATE category SET name='$name' WHERE id=$id";
  $result = mysqli_query($connect,$sql);
  if ($result) {
    echo "category Updated";
  }else {
    echo "error ";
  }
}
	 ?>

<?php include 'nav.php'; ?>
<?php include 'base.php'; ?>

	<!-- SHOP CONTENT -->
	<section id="content">
    <div class="content-blog">
      <div class="container">
        <form method="post">
          <div class="form-group">
            <label for="Productname">Category Name</label>
            <?php
              $sql = "SELECT * FROM category WHERE id=$id";
              $res = mysqli_query($connect, $sql);
              $r = mysqli_fetch_assoc($res);
             ?>
             <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="text" name="categoryname" id="Categoryname" class="form-control" placeholder="Category Name" value="<?php echo $r['name']; ?>">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
   </div>
</section>
