<?php
require "/home/dmitry/www/test1.local/public_html/db.php";
$data = $_POST;
if( isset($data['do_edb'])  )
{
    if ($_SESSION) {
    if ($_SESSION['logged_user']->id == 1)  {  
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
                        }
    else
        echo '<div class="alert alert-danger" role="alert">У вас нет на это прав!</div>';

}

    
    
?>
<!DOCTYPE html>
<head>
    <meta chraset="UTF-8">
    <meta name="viewport" content="width=devie-width,initial-scle=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image" href="RussiaWithTowns.jpg">
    <title>Списки регионов</title>
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
                                    $col = R::findLast( 'regions' );
                                    if ($col)for ($i=0;$i<($col->id);$i++)
                                    $ids[$i+1]=$i+1;
                                    if ($col) {$region = R::loadAll('regions', $ids);
                    
                                    foreach ($region as $regions){
                                    if($regions->id==0) {continue;}
                                    echo '<tr>';
                                    echo '<th scope="row">'.$regions->id.'</th>';
                                    echo '<td>'.$regions->region.'</td>';
                                    echo '<td>'.$regions->cap.'</td>';
                                    echo '<td>'.$regions->kolvo.'</td>';
                                    echo '<td>'.$regions->responsible.'</td>';
                                    echo '<td>'.$regions->money.'</td>';                                    
                                    echo '                                    <td class = "text-right">
                                    <button class="btn btn-primary badge-pill" style="width:100px;"> Изменить</button>
                                    <button class="btn btn-danger badge-pill" style="width:100px;"> Удалить</button>
                                </td>  ';
                                    echo '</tr>';

                                                                }
                                              }
                                    ?>   
 
                            </tbody>
                        </table> 
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


       
        </div>
      </div>
    </div>                      
    </div>
</body>
</html>
