<?php
session_start();
include 'base.php';
require_once 'connect.php';

// if (isset($_POST) & !empty($_POST)) {
//   echo "buutoon has been clicke";
// }
if (isset($_POST) & !empty($_POST)) {
  $email = mysqli_real_escape_string($connect,$_POST['email']);
  $_SESSION['email'] = $email;
  $password = ($_POST['password']);
  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);
  if ($count ==1) {
    header("Location: index.php");
  }else {
    echo "failed to open";
  }
}
?>
<link rel="stylesheet" href="css/login.css">

<header><b>LOGIN</b></header>
<div class="form-group">

<form action="post" id="userlogcon">
  <input type="email" name="email" placeholder="Enter your email address" required=""><br><br>
  <input type="password" name="password" placeholder="Enter password"><br>
  <input type="checkbox" name="rememberMe" class="checkbox" id="rememberMe"><small><small>Remember Me</small></small><br>
  <button type="submit">LOGIN</button><br><br>
  <p><small>Not Registered?<a href="register.php">Create an account</a></small></p>
</form>
</div>
