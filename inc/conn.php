<?php
$conn = mysqli_connect('localhost', 'root', 'root','yousef');
if( !$conn){
  echo 'Error:' . mysqli_connect_error();
}