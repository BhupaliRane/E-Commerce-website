<?php
  session_start();
	require_once 'connect.php';
  if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
    header("location: ../index.php");

  }

	 ?>

<?php include 'nav.php';
  require 'base.php';
?>



<section id="content">
  <!-- <div class="content-blog"> -->
    <div class="container">
      <div class="lenght">

      <table class="container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Sr.No</th>
              <th>Category Name</th>
              <th>Oprations</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM category";
              $res = mysqli_query($connect, $sql);
              while ($r = mysqli_fetch_assoc($res)) {
             ?>
            <tr>
              <th scope="row"><?php echo $r['id']; ?></th>
              <td><?php echo $r['name']; ?></td>
              <td> <a href="editcategory.php?id=<?php echo $r['id'];?>">Edit</a> | <a href="delcategory.php?id=<?php echo $r['id'];?>">Delete</a>
              </td>
            </tr>
      <?php } ?>    </tbody>

        </table>

      </table>
    </div>

    </div>

  <!-- </div> -->

</section>
