<link rel="stylesheet" href="global.css">

<?php

$orderid;
$first_name;
$last_name;
$rec_date;

$connects = mysqli_connect('localhost', 'root', '', 'hesed_house');
if(mysqli_connect_errno()){
	echo "Failed to Connect: " . mysqli_connect_error();
}

if (isset($_GET['searchbtn'])) {

	

	$searchid = mysqli_real_escape_string($connects, $_GET['searchid']);

	
	if($connects){

		// $sql = "SELECT * FROM `recipients` WHERE `id, first_name, last_name` LIKE '$searchid'";

		$sql = "SELECT * FROM `hesed_house`.`recipients` WHERE (CONVERT(`recipient_id` USING utf8) LIKE '%$searchid%' OR CONVERT(`first_name` USING utf8) LIKE '%$searchid%' OR CONVERT(`last_name` USING utf8) LIKE '%$searchid%' OR CONVERT(`dob` USING utf8) LIKE '%$searchid%')";


		$result = mysqli_query($connects, $sql);	
		$count = mysqli_num_rows($result);

		if (!$result) {
			die(mysqli_error($connects)); 
		}

		if($count == 0) {
			echo "no search results";
		}

		else{
			echo "<table>";
			echo "<tr><th>ID</th><th>Name</th><th>Birth Date</th><th>Button</th>"; 
			while($row = mysqli_fetch_array($result)) {
				
				$first_name = $row['first_name'];
				$first_name = mysqli_real_escape_string($connects, $first_name);

				$last_name = $row['last_name'];
				$last_name = mysqli_real_escape_string($connects, $last_name);

				$rec_date = date("Y-m-d");
				$rec_date = mysqli_real_escape_string($connects, $rec_date);

				$recipient_id = $row['recipient_id'];

				echo "<tr><td>" . $recipient_id . "  </td>";
				echo "<td>" . $first_name . " ";
				echo $row['last_name'] . " </td>";
				echo "<td>" . $last_name . " ";

				echo "<td><form method='post'>  
				<button type='submit' name='order_btn' class='btn btn-primary btn-block'>Order</button>  </tr>";
				echo "</form>";
			}

			echo "</table>";

	}
}

if (isset($_POST['order_btn'])) {

				$order_query = "INSERT INTO orders_test (first_name, last_name, recieve_date, recipient_id) 
				VALUES('$first_name', '$last_name', '$rec_date', '$recipient_id') ";

				$result = mysqli_query($connects, $order_query) or die(mysqli_error($connects));
				header('location: CategoriesPage.html');				

			}
}



?>