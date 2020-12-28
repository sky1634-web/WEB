<?php 
include "config.php";
require "/home/dmitry/www/test1.local/public_html/db.php";
// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$region_id = $_GET['id'];
	$sql1 = "SELECT region FROM `regions` WHERE `id`='$region_id'";
	$result1 = $conn->query($sql1);
	$row=$result1->fetch_assoc();
	$ndl = (string) $row["region"];
	$query ="DELETE FROM temperature WHERE oblast = '$ndl'";
	$conn->query($query);
	// write delete query
	$sql = "DELETE FROM `regions` WHERE `id`='$region_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Запись успешно удалена";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
    <a class="nav-link" href="index.php">На главную</a>