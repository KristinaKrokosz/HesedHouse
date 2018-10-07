<?php

if (isset($_POST['submit'])) {

    include_once'dbh.php';

$first = mysqli_real_escape_string($conn,$_POST['first']);
$last = mysqli_real_escape_string($conn,$_POST['last']);
$uid = mysqli_real_escape_string($conn,$_POST['uid']);
$pwb = mysqli_real_escape_string($conn,$_POST['pwd']);



} else{




      header("Location: ../index.php")
      exit();
}
