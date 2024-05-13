<?php
$con = mysqli_connect("sql301.infinityfree.com","if0_36186226","Wordpress123123","if0_36186226_dailyexpense");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error() ." | Seems like you haven't created the DATABASE with an exact name";
  }
?>