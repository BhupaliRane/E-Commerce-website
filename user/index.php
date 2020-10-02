<?php
require 'base.php';
require 'usernav.php';
session_start();
if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
  header("location: ../index.php");

}

$connect = mysqli_connect("localhost", "root", "", "firsttab");
if(isset($_POST["add_to_cart"]))
{
   if(isset($_SESSION["shopping_cart"]))
   {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
             $count = count($_SESSION["shopping_cart"]);
             $item_array = array(
                  'item_id'               =>     $_GET["id"],
                  'item_name'               =>     $_POST["hidden_name"],
                  'item_price'          =>     $_POST["hidden_price"],
                  'item_quantity'          =>     $_POST["quantity"]
             );
             $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
             echo '<script>alert("Item Already Added")</script>';
             echo '<script>window.location="index.php"</script>';
        }
   }
   else
   {
        $item_array = array(
             'item_id'               =>     $_GET["id"],
             'item_name'               =>     $_POST["hidden_name"],
             'item_price'          =>     $_POST["hidden_price"],
             'item_quantity'          =>     $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
   }
}
if(isset($_GET["action"]))
{
   if($_GET["action"] == "delete")
   {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
             if($values["item_id"] == $_GET["id"])
             {
                  unset($_SESSION["shopping_cart"][$keys]);
                  echo '<script>alert("Item Removed")</script>';
                  echo '<script>window.location="index.php"</script>';
             }
        }
   }
}
?>
<!DOCTYPE html>
<html>
   <head>
        <!-- <title>Webslesson Tutorial | Simple PHP Mysql Shopping Cart</title> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/index.css">

   </head>
   <body>
        <br />
        <div class="container" style="width:80  %;">
             <h3 align="center">Shopping Cart</h3><br />
             <?php

             $query = "SELECT * FROM  products ORDER BY id ASC";
             $result = mysqli_query($connect, $query);
             if(mysqli_num_rows($result) > 0)
             {
                  while($row = mysqli_fetch_array($result))
                  {
             ?>
             <div class="col-md-3">
                  <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                       <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px; margin-top:10px; " align="center">
                            <img src="<?php echo $row["thumb"]; ?>" class="img-responsive" width="100" height="100" /><br />
                            <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                            <h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                       </div>
                  </form>
             </div>
             <?php
                  }
             }
             ?>
             <div style="clear:both"></div>
             <br />
             <h3 id="1">Order Details</h3>
             <div class="table-responsive">
                  <table class="table table-bordered" style="border:10px;">
                       <tr>
                            <th width="10%">Item Id</th>
                            <th width="40%">Item Name</th>
                            <th width="10%">Quantity</th>
                            <th width="20%">Price</th>
                            <th width="15%">Total</th>
                            <th width="5%">Action</th>
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
                       <tr>
                         <?php //new linear
                         $b = $values["item_id"];
                           $a = $b.",".$a;
                          ?>
                           <td> <?php echo $values["item_id"]; ?> </td>
                            <td><?php echo $values["item_name"]; ?></td>
                            <td><?php echo $values["item_quantity"]; ?></td>
                            <td>$ <?php echo $values["item_price"]; ?></td>
                            <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                            <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                            <!-- <td> <select name="size">
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
                            <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
                            <td></td>
                       </tr>
                       <?php
                       }
                       ?>
                  </table>
                  <form  action="email.php" method="get">
                    <button type="submit" formaction="email.php" name="order" class="btn btn-primary btn-block">
                         <a href="email.php" target="_blank">.....................................................................................................................................</a>
                      ORDER
                     <a href="email.php" target="_blank">......................................................................................................................................</a>

                    </button>
                  </form>

             </div>
        </div>
        <br />
        <?php include '../homefooter.php' ?>

   </body>
</html>
