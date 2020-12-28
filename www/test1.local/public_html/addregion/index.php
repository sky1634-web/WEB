<?php 
include "config.php";
require "/home/dmitry/www/test1.local/public_html/db.php";
$data = $_POST;
if( isset($data['do_etp'])  )
{
    $errors = array();
    if( R::count('regions',"region=? ",array($data['region']))==0)
    {
        $errors[] = 'Такого региона нет в базе!!!';
    }
    if( R::count('temperature',"town=? ",array($data['town']))>0)
    {
        $errors[] = 'Такой город уже есть в списке';
    }
    if( empty($errors) )
    {
        $temperature = R::dispense('temperature');
        $temperature->oblast= $data['region'];
        $temperature->town = $data['town'];
        $temperature->temp = $data['temp'];
        R::store($temperature);

        echo '<div class="alert alert-success" role="alert">
        Регион был успешно добавлен в бд 
              </div>';

     }else
    {
       echo '<div class="alert alert-danger" role="alert">'.array_shift($errors).'</div><hr>';

     }
}
if( isset($data['do_edb'])  )
{
    $errors = array();
    if( trim($data['reg']) == ''  )
    {
        $errors[] = 'Введите регион!';
    }
    if( trim($data['kol']) == ''  )
    {
        $errors[] = 'Введите количество проживающих!';
    }
    if( ($data['otv']) == ''  )
    {
        $errors[] = 'Введите ответственного!';
    }
    if( ($data['center']) == ''  )
    {
        $errors[] = 'Введите административный центр!';
    }
    if( ($data['butget']) == ''  )
    {
        $errors[] = 'Введите бюджет';
    }

     if( R::count('regions',"region=? ",array($data['reg']))>0)
    {
        $errors[] = 'Этот регион уже есть в бд';
    }
    if( empty($errors) )
    {
        $regions = R::dispense('regions');
        $regions->region = $data['reg'];
        $regions->kolvo = $data['kol'];
        $regions->responsible = $data['otv'];
        $regions->cap = $data['center'];
        $regions->money = $data['butget'];
        R::store($regions);

        echo '<div class="alert alert-success" role="alert">
        Регион был успешно добавлен в бд 
              </div>';

     }else
    {
       echo '<div class="alert alert-danger" role="alert">'.array_shift($errors).'</div><hr>';

     }

 }
//write the query to get data from users table

$sql = "SELECT * FROM regions";

//execute the query

$result = $conn->query($sql);

$sql1 = "SELECT * FROM temperature";

//execute the query

$result1 = $conn->query($sql1);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
     <script src="index.js"></script>
     <link rel="stylesheet" href="style.css">
     <div class="view" style="background-image: url('RussiaWithTowns.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
</head>
<body>
<div class="container">
         <div class="jumbotron">
             <div class="card">
                 <h5 class="card-header">База данных по регионам РФ<div class ="text-center"> <a class="btn btn-primary btn-sm" href="/" role="button">Вернуться на главную</a></div></h5>
                     <div class="card-body">
                         <h5 class="card-title">ЭБД</h5>
                         <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                 <tr>
                                     <th scope="col">id</th>
                                     <th scope="col">Название региона</th>
                                     <th scope="col">Административный центр</th>
                                     <th scope="col">Количество проживающих</th>
                                     <th scope="col">Ответственный</th>
                                     <th scope="col">Бюджет</th>
                                     <th class="text-right">Действие</th>
                                 </tr>
                             </thead>
                             <tbody>
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['region']; ?></td>
					<td><?php echo $row['cap']; ?></td>
					<td><?php echo $row['kolvo']; ?></td>
					<td><?php echo $row['responsible']; ?></td>
                    <td><?php echo $row['money']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Изменить</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Удалить</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
<div>
<button onclick="showHide('block_id')" type="button" class="btn btn-info">Добавить регион</button>
                         <br><br>
                         <form style="display:none"onsubmit="return validate();"id="block_id"  action=index.php method="POST">
                         <div class="form-row">
                             <div class="col">
                             <input type="text" name="reg" id="reg" class="form-control" value="<?php echo @$data['reg'];?>" placeholder="Название региона"required>
                             <span id="text"></span>
                             </div>
                             <div class="col">
                             <input type="text" name="center" id="center" class="form-control" value="<?php echo @$data['center'];?>"placeholder="Админ.центр"required>
                             <span id="text3"></span>
                             </div>
                             <div class="col">
                             <input type="text" name="kol" id="kol" class="form-control" value="<?php echo @$data['kol'];?>"placeholder="Количество проживающих"required>
                             <span id="text1"></span>
                             </div>
                             <div class="col">
                             <input type="text" name="otv" id="otv" class="form-control" value="<?php echo @$data['otv'];?>"placeholder="Ответственный"required>
                             <span id="text2"></span>
                             </div>
                             <div class="col">
                             <input type="text" name="butget" id="butget" class="form-control" value="<?php echo @$data['butget'];?>"placeholder="Бюджет"required>
                             <span id="text4"></span>
                             </div>
                         </div>
                         <br>
                         <button type="submit" name="do_edb" class="btn btn-primary">Добавить регион в базу</button>
                         </form>
</div>
<h5 class="card-title">Температуры в регионах</h5>
                         <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                 <tr>
                                     <th width="50"scope="col">id</th>
                                     <th width="100"scope="col">Название региона</th>
                                     <th width="100"scope="col">Название города</th>
                                     <th width="100"scope="col">Температура</th>
                                     <th class="text-left"width="25">Действие</th>
                                 </tr>
                             </thead>
                             <tbody>
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result1->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['oblast']; ?></td>
                    <td><?php echo $row['town']; ?></td>
					<td><?php echo $row['temp']; ?></td>
					<td><a class="btn btn-info" href="updatetemp.php?id=<?php echo $row['id']; ?>">Изменить</a>&nbsp;<a class="btn btn-danger" href="deletetemp.php?id=<?php echo $row['id']; ?>">Удалить</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
<div>
                        <button onclick="showHide('my')" type="button" class="btn btn-info">Добавить информацию о температуре</button>
                         <br><br>
                         <form style="display:none" id="my"action=index.php method="POST">
                         <div class="form-row">
                             <div class="col">
                             <input type="text" name="region" id="region" class="form-control" value="<?php echo @$data['regon'];?>" placeholder="Название региона"required>
                             <span id="text5"></span>
                             </div>
                             <div class="col">
                             <input type="text" name="town" id="town" class="form-control" value="<?php echo @$data['town'];?>"placeholder="Город"required>
                             <span id="text5"></span>
                             </div>
                             <div class="col">
                             <input type="text" name="temp" id="temp" class="form-control" value="<?php echo @$data['temp'];?>"placeholder="Температура"required>
                             <span id="text6"></span>
                             </div>
                         </div>
                         <br>
                         <button type="submit" name="do_etp" class="btn btn-primary">Добавить информацию о температуре в базу</button>
                         </form>
</div>

	</div>

</body>
</html>