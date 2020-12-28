<?php 
include "config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$temp_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `temperature` WHERE `id`='$temp_id'";

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