<?php include 'nav.php';
include 'base.php';
session_start();
if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
  header("location: ../index.php");

}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("fus.jpg");

  /* Full height */
  height: 90%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
  </head>
  <body>
    <div class="bg"></div>

  </body>
</html>
 <!-- <img src="backimages/fus.jpg" alt="not found" width="80%" height="100%"> -->
 <!-- <div style="margin-top: 10px;">

 &nbsp;
 &nbsp;
 <img src="uploads/coat.jpg" alt="not fond" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">
</div>

<div style="margin-top: 10px;">

&nbsp;
&nbsp;
<img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="uploads/coat.jpg" alt="not fond">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="uploads/coat.jpg" alt="not fond">
</div> -->

 <!-- <img src="uploads/coat.jpg" alt="not fond">&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;
 <img src="uploads/coat.jpg" alt="not fond">&nbsp;
 <img src="uploads/coat.jpg" alt="not fond"> -->

<!-- <section class="section">
  <div class="row shuffle-wrapper">
    <div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div>
    <div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div><div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div><div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div><div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div><div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div>
    <div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div><div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div>


    <div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div><div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div><div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div><div class="col-lg-3 col-6 mb-4 shuffle-item">
      <div class="position-relative rounded hover-wrapper">
        <img src="uploads/coat.jpg" alt="not fond">
      </div>

    </div>

  </div>
</section>

<style media="screen">
.section{
  padding-top: 100px;
  padding-bottom: 100px;
  padding-left: 20%;
}
.hover-wrapper{
  overflow: hidden;
}
.hover-wrapper img{
  transition: .3s ease;
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.hover-wrapper:hover img{
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.hover-wrapper:hover .hover-overlay{
opacity: 1;
visibility: visible;
}
.hover-overlay{
  position: absolute;
  height: 100%;
  width: 100%;
  border-radius: inherit;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.3);
  opacity: 0;
  visibility: hidden;
  transition: .3s ease;
}
.hover-content{
position: absolute;
top: 50%;
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
left: 0;
right: 0;
text-align: center;

}

</style> -->
