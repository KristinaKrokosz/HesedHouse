<?php
include 'search-act.php';
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'hesed_house');


if (isset($_POST['order_btn1'])) {

$order_query = "INSERT INTO orders (first_name, last_name, rec_date) 
VALUES('$first_name', '$last_name', '$date')";
mysqli_query($connects, $order_query);
header('location: CategoriesPage.html');
				
  }
?>