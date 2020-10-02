<?php
  session_start();
	require_once 'connect.php';
	if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
		header("location: ../index.php");
		// code...
	}
	 ?>
<?php include 'base.php'; ?>
<?php include 'nav.php'; if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
  header("location: ../index.php");

}?>




	<div class="close-btn fa fa-times"></div>


	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<table class="table table-stripped">
           <thead>
             <tr>
               <th>#</th>
               <th>Product Name</th>
               <th>Category Id</th>
               <th>Product Image</th>
               <th>Operations</th>
             </tr>
           </thead>
           <tbody>
             <!-- echo "<img src=".$filepath." height=200 width=300 />" -->
             <?php
               $sql = "SELECT * FROM products";
               $res = mysqli_query($connect, $sql);
               while ($r = mysqli_fetch_assoc($res)) {
              ?>
             <tr>
             <td scope=row""><?php echo $r['id']; ?></td>
             <td><?php echo $r['name']; ?></td>
             <td><?php echo "<img src=".$r['thumb']." height=150 width=200 />" ?></td>
             <td><?php if ($r['thumb']) { echo "YES";}else{ echo "NO";}?></td>
             <td> <a href="delproduct.php?id=<?php echo $r['id'] ?>">Delete</a>
             </td>
           </tr> <?php } ?>
           </tbody>
        </table>
