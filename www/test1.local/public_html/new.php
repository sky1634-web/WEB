<?php
    require "db.php";
    $data = $_POST;
    if( isset($data['send'])  )
    {
        news($data['comment'],$data['http']);
    }

?>

    <form action="new.php" method="POST">
    <p><strong><p>Новость<Br></strong></p>
    <textarea type = "text" name="comment"value="<?php echo $data['comment'];?>" cols="100" rows="25"></textarea></p>
    <p>
        <p><strong>Введите ссылку на источник</strong>:</p>
        <input type="text" name="http"value="<?php echo @$data['http'];?>">
    </p>
  <p><input type="submit" name = "send" value="Отправить">
   <input type="reset" value="Очистить"></p>

     </form>
