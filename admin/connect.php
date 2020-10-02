<?php

$connect = mysqli_connect("localhost","root","","firsttab");

if(!$connect)
{
  echo "error". mysqli_connect_error() . PHP_EOL;
}

 ?>
