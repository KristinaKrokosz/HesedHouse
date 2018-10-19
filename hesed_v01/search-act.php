<link rel="stylesheet" href="global.css">

<?php

$connects = mysqli_connect('localhost', 'root', '', 'hesed_house');
$output ='';

if(mysqli_connect_errno()){
	echo "Failed to Connect: " . mysqli_connect_error();
}

if (isset($_GET['searchbtn'])) {

	

	$searchid = mysqli_real_escape_string($connects, $_GET['searchid']);

	
	if($connects){

		// $sql = "SELECT * FROM `recipients` WHERE `id, first_name, last_name` LIKE '$searchid'";

		$sql = "SELECT * FROM `hesed_house`.`recipients` WHERE (CONVERT(`id` USING utf8) LIKE '%$searchid%' OR CONVERT(`first_name` USING utf8) LIKE '%$searchid%' OR CONVERT(`last_name` USING utf8) LIKE '%$searchid%' OR CONVERT(`dob` USING utf8) LIKE '%$searchid%')";


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
			echo "<tr><th>ID</th><th>Name</th><th>Birth Date</th>"; 
			while($row = mysqli_fetch_array($result)) {
    			echo "<tr><td>" . $row['id'] . "  </td>";
    			echo "<td>" . $row['first_name'] . " ";
    			echo $row['last_name'] . " </td>";
    			echo "<td>" . $row['dob'] . "  </tr>";
			}

			echo "</table>";
		}
	}
}
	print("$output");
	mysqli_close($connects);
	?>