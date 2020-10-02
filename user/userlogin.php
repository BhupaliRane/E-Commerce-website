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

<div class="wrapper">
  <form method="post" class="form-signin">
    <h2 class="form-signin-heading">Login</h2>
    <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" /><br>
    <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br>
    <label class="checkbox">
      <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
    </label>
    <button class="btn btn-lg btn-primary btn-block" name="button" type="submit">Login</button> <br>
    <p class="message">Not registered? <a href="userregister.php">Create an account</a></p>

  </form>
</div>
