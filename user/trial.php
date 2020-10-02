<?php
session_start();
 ?>

<div >
     <table  style="border:110px;">
          <tr>
               <th width="10%">Item Id</th>
               <th width="40%">Item Name</th>
               <th width="10%">Quantity</th>
               <th width="20%">Price</th>
               <th width="15%">Total</th>
               <th width="5%">Size</th>
          </tr>
          <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
               $total = 0;
               foreach($_SESSION["shopping_cart"] as $keys => $values)
               {
          ?>
          <tr>
              <td> <?php echo $values["item_id"]; ?> </td>
               <td><?php echo $values["item_name"]; ?></td>
               <td><?php echo $values["item_quantity"]; ?></td>
               <td>$ <?php echo $values["item_price"]; ?></td>
               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
               <td> <select>
                 <option value="s">S</option>
                 <option value="m">M</option>
                 <option value="xm">XM</option>
                 <option value="l">L</option>
                 <option value="xl">XL</option>
               </select>
               </td>
          </tr>
          <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
               }
          ?>
          <tr>
               <td colspan="3" align="right">Total</td>
               <td align="right">$ <?php echo number_format($total, 2); ?></td>
               <td></td>
          </tr>
          <?php
          }
          ?>
     </table>


</div>
