

<?php
session_start();
if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
  header("location: ../index.php");

}
require 'base.php';
require 'connect.php';

// if (isset($_POST) & !empty($_POST)) {
  // $email = mysqli_real_escape_string($connect,$_POST['email']);
  $email = $_SESSION['email'];
  $sql = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);
  if ($count ==1) {
  $r = mysqli_fetch_assoc($result);

}


if (isset($_SESSION['submit'])) {
  echo "string";
  header("location:payments\PaytmKit\pgResponse.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="..\css\index.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

  <div >
       <table border="2" style="margin-left: 25%;">
            <tr>
                 <th width="10%">Item Id</th>
                 <th width="40%">Item Name</th>
                 <th width="10%">Quantity</th>
                 <th width="20%">Price</th>
                 <th width="15%">Total</th>
                 <!-- <th width="5%">Size</th> -->
            </tr>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
                 $total = 0;
                 //new line
                         $a = null;
                 foreach($_SESSION["shopping_cart"] as $keys => $values)
                 {
            ?>

            <tr style="border-width:  100px;">
              <?php //new linear
              $b = $values["item_id"];
                $a = $b.",".$a;
               ?>
                <td> <?php echo $values["item_id"]; ?> </td>
                 <td><?php echo $values["item_name"]; ?></td>
                 <td><?php echo $values["item_quantity"]; ?></td>
                 <td>$ <?php echo $values["item_price"]; ?></td>
                 <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                 <!-- <td> <select>
                   <option value="s">S</option>
                   <option value="m">M</option>
                   <option value="xm">XM</option>
                   <option value="l">L</option>
                   <option value="xl">XL</option>
                 </select>
                 </td> -->
            </tr>
            <?php
                      $total = $total + ($values["item_quantity"] * $values["item_price"]);
                 }
            ?>
            <tr>
                 <td colspan="3" align="right">Total</td>
                 <?php $_SESSION['cost'] = $total;?>
                 <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
                 <td></td>
            </tr>
            <?php
            }
            ?>
       </table>


  </div>
  <br>
  <br>
  <br>
  <br>



 <form action="../payments\PaytmKit\pgRedirect.php" method="post" name="form" class="form-box">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter Your Name" value="<?php echo $r['name']; ?>"><br>
			<label for="email">Email ID</label><br>
			<input type="email" name="email" class="inp" placeholder="Enter Your Email"value="<?php echo $r['email']; ?>" ><br>
			<label for="iditem">Id Item</label><br>
			<input type="text" name="id" class="inp" placeholder="Enter id with quantity" value="<?php echo $a; ?>"required><br>
      <label for="size">size</label><br>
			<!-- <input type="text" name="size" class="inp" placeholder="Enter id with size"><br> -->
      <select name="size">
        <option>SELECT SIZE</option>
        <option value="s">S</option>
        <option value="m">M</option>
        <option value="xm">XM</option>
        <option value="l">L</option>
        <option value="xl">XL</option>
      </select>
			<label for="address">Address</label><br>
      <input type="text" name="msg" class="msg-box" placeholder="Enter id with size" value="<?php echo $r['address']; ?>"><br>
			<input type="submit" name="submit" value="order" class="sub-btn">
		</form>
<!-- 	<textarea name="msg"  class="msg-box" placeholder="Enter Your Address Here..." value="" ></textarea><br> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
