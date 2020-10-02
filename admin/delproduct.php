<?php
session_start();
require_once 'connect.php';

if (!isset($_SESSION['email']) & empty($_SESSION['email'])) {
  header("location: ../index.php");

}

 if(isset($_GET) & !empty($_GET)){
     $id = $_GET['id'];
     $sql = "DELETE FROM products WHERE id=$id";
     $res = mysqli_query($connect, $sql);
     if($res)
     { header("location: viewproduct.php");}
     else
       { header("location: viewproduct.php");}

 }else {
   echo "get not working";
   header("Location: index.php");
 }
 ?>
