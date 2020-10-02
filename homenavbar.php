<?php
include("user/base.php");
 ?>
 <link rel="stylesheet" href="/css/index.css">
<div class="container" id="mytopnav">
      <div class="topnav">
         <a id="fusion">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img id="img" src="images\fusion_logo.png"></a>
            <li><a></a></li>
            <li><a href="index.php">HOME</a></li>
            <!-- <li><a href="contact.php">CONTACT</a></li> -->
            <li><a href="user\userlogin.php">ACCOUNT</a></li>
            <li><a href="admin\login.php">ADMIN</a></li>
      </div>
<style media="screen">
    /* background-color: white; */
    /* #mytopnav{
     width: 50% !important;
    } */
    @media only screen and (max-width: 600px) {
   .topnav{
     /* background-color: cyan;
      */
    width: 70% !important;
    position: static;
  }
    }
</style>
