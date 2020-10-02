<?php
session_start();
if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
  header("location: ../index.php");

}

require 'base.php';
require 'usernav.php';
require 'connect.php';

// if (isset($_POST) & !empty($_POST)) {
  // $email = mysqli_real_escape_string($connect,$_POST['email']);
   $email = $_SESSION['email'];
  $sql = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);
  if ($count ==1) {
  $r = mysqli_fetch_assoc($result);




?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  margin-top: 100px!important;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  height: 500px !important;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>


<div class="card">
  <h2 style="text-align:center">User Profile Card</h2>

  <img src="download.png" alt="John" style="width:250px; margin-left:135px;">
  <H1><?php echo $r['name'];   ?></H1>
  <p style="font-size: 20px;">   <?php echo $r['email']; ?>
    <p style="font-size: 20px;">   <?php echo $r['address']; ?>
</p> <?php } ?>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
  </div>
  <!-- <p><button>Contact</button></p> -->
</div>

</body>
</html>
