
<?php require_once 'base.php';
require_once 'connect.php';
if (isset($_POST) & !empty($_POST)) {
  // header('Location: index.php');
  if( $_POST['name']=="" || $_POST['email']=="" || $_POST['password']=="")
  { echo "fill the details";
  }else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    echo $name;
    echo $email;
    echo $password;


     $email = mysqli_real_escape_string($connect,$_POST['email']);
     $password = mysqli_real_escape_string($connect,$_POST['password']);
    $sql = "INSERT INTO user (name , email, password, address) VALUES ('$name','$email','$password','$address')";
    $result = mysqli_query($connect, $sql);
    if ($result == TRUE) {
      header("Location: userlogin.php");
      // code...
    }

  }


}


 ?>
<div class="wrapper">
  <form method="post" class="form-signin">
    <h2 class="form-signin-heading">Login</h2>
    <input type="text" class="form-control" name="name" placeholder="Name" required="" autofocus="" /><br>
    <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" /><br>
    <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br>
    <input type="text" class="form-control" name="address" placeholder="address" required/><br>

    <!-- <label class="checkbox">
      <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
    </label> -->
    <button class="btn btn-lg btn-primary btn-block" name="button" type="submit">Register</button>
  </form>
</div>
