<?php
     include("user/connect.php");
      include("user/base.php");
      include("homenavbar.php");
?>

  <link rel="stylesheet" href="css\index.css">

   <div class="container" id="main_page">
      <div id="slider">
         <figure>
            <img src="images\image1.png" alt>
            <img src="images\image2.png" alt>
            <img src="images\image4.png" alt>
            <img src="images\image7.png" alt>
            <img src="images\image8.png" alt>
         </figure>
      </div>
      <br>
      <div>
        <img id="img1" src="images\image1.png" alt>
        &nbsp;&nbsp;&nbsp;
        <img id="img1" src="images\image1.png" alt>
      </div>
      <br>
      <div>
        <img id="img1" src="images\image2.png" alt>
        &nbsp;&nbsp;&nbsp;
        <img id="img1" src="images\image2.png" alt>
      </div>
      <br>
      <div>
        <img id="img1" src="images\image2.png" alt>
        &nbsp;&nbsp;&nbsp;
        <img id="img1" src="images\image2.png" alt>
      </div>
   </div>
</div>

<?php include("homefooter.php"); ?>

<style media="screen">
@media only screen and (max-width: 600px) {
  #img1{
    width: auto;
  }
  #slider{
  display: none;
  }
}
</style>
