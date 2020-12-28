<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) { // Изменяет поле данных таблицы после нажатия update
		$region = $_POST['oblast'];
		$temperature_id = $_POST['temperature_id'];
		$temperature = $_POST['temperature'];
		$town = $_POST['town'];
		// write the update query
		$sql1 = "SELECT oblast FROM `temperature` WHERE `oblast`='$region'";//проверяем данные при изменении(связь температуры-регионов)
		$result1 = $conn->query($sql1);
		$row =$result1->fetch_assoc();
		$ndl = (string) $row["oblast"];

		if(!empty($ndl)) {
		$sql = "UPDATE `temperature` SET `oblast`='$region',`temp`='$temperature',`town`='$town' WHERE `id`='$temperature_id'";
		

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Изменения прошли успешно";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
						}
		else echo ("Такого региона нет в базе. Операция не выполнена.");
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) { // заполняет найденный элемент по id
	$temperature_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `temperature` WHERE `id`='$temperature_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$oblast = $row['oblast'];
			$town = $row['town'];
			$temperature = $row['temp'];
			$id = $row['id'];
		}

	?>
		<h2>Обновить информацию о температуре</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Информация о температуре в регионе:</legend>
		    Название региона:<br>
		    <input type="text" name="oblast" value="<?php echo $oblast; ?>">
		    <input type="hidden" name="temperature_id" value="<?php echo $id; ?>">
		    <br>
			Название города:<br>
		    <input type="text" name="town" value="<?php echo $town; ?>">
		    <br>
			Температура<br>
		    <input type="text" name="temperature" value="<?php echo $temperature; ?>">
		    <br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: index.php');
	}

}
?>
    <a class="nav-link" href="index.php">Список регионов</a>