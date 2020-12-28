<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) { // Изменяет поле данных таблицы после нажатия update
		$region = $_POST['region'];
		$region_id = $_POST['region_id'];
		$kolvo = $_POST['kolvo'];
		$responsible = $_POST['responsible'];
		$cap = $_POST['cap'];
		$money = $_POST['money'];


		$sql1 = "SELECT oblast FROM `temperature` WHERE `oblast`='$region'";//проверяем данные при изменении(связь температуры-регионов)
		$result1 = $conn->query($sql1);
		$row =$result1->fetch_assoc();
		$ndl = (string) $row["oblast"];
		if (empty($ndl))
		{
			
			$sql2 = "SELECT region FROM `regions` WHERE `id`='$region_id'";
			$result2 = $conn->query($sql2);
			$row=$result2->fetch_assoc();
			$ndl = (string) $row["region"];
			$query ="DELETE FROM temperature WHERE oblast = '$ndl'";
			$conn->query($query);
		}

		// write the update query
		$sql = "UPDATE `regions` SET `region`='$region',`kolvo`='$kolvo',`responsible`='$responsible',`cap`='$cap',`money`='$money' WHERE `id`='$region_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Запись обновлена успешно";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) { // заполняет найденный элемент по id
	$region_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `regions` WHERE `id`='$region_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$region = $row['region'];
			$kolvo = $row['kolvo'];
			$responsible = $row['responsible'];
			$cap  = $row['cap'];
			$money = $row['money'];
			$id = $row['id'];
		}

	?>
		<h2>Обновить информацию о регионе</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Информация о регионе:</legend>
		    Название:<br>
		    <input type="text" name="region" value="<?php echo $region; ?>">
		    <input type="hidden" name="region_id" value="<?php echo $id; ?>">
		    <br>
			Центр<br>
		    <input type="text" name="cap" value="<?php echo $cap; ?>">
		    <br>
		    Количество проживающих:<br>
		    <input type="text" name="kolvo" value="<?php echo $kolvo; ?>">
		    <br>
		    Ответственный<br>
		    <input type="text" name="responsible" value="<?php echo $responsible; ?>">
		    <br>
			Бюджет:<br>
		    <input type="text" name="money" value="<?php echo $money; ?>">
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