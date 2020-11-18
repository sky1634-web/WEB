<?php
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=test1.local',
        'root', '' );

session_start();
function news($new,$ht)
{       if(!(isset($_SESSION))) //проверка на авторизацию(не относится к заданию)
        if ($_SESSION['logged_user']->id == 1) { //новость может редактировать только пользователь, id которого = 1
        if ((mb_strlen($new, 'utf-8')<180) || (voidstr($new)) || (voidstr($ht))) { //mb_strlen проверяет на количество символов, voidstr проверяет новость и ссылку на пустоту.
                 echo "Ошибка т.к TEXT < 180 Symbol or text only with void symbols<br>"; //Вывод ошибок
                 echo '<div style="color: red;">Новость не создана<br/>
                 Можете перейти на <a href="/">главную</a> страницу!</div><hr>';
        }
        else
        {
        $p=180; //переменная для обреза новости
        $a = mb_strimwidth($new, 0 , $p); //в переменной $a будут содержаться только первые 180 символов переменной $new
        point($a);//удаляем текст,состоящий из точек(тестовая проверка)
        $a=trim($a);//удаляет пустые пробелы с начала и конца
        $pieces = explode(" ", $a);//преобразуем текст в массив слов,разделителем является пробел
        $cutted = array_slice($pieces, 0, count($pieces)-2);//удаляет из массива 2 поседних символа
        $a = implode(" ",$cutted);//записываем в $a обрезанную строчку(без 2 последних слов)
        echo "$a";//далее идет вывод текста на экран(перед добавлением на страницу и в бд)
        echo '<a href="'.$ht.'">'." ".$pieces[count($pieces)-2]." ".$pieces[count($pieces)-1]."...".'</a>';
        $news = R::dispense('news');//запись в бд
        $id = R::count('news')+1;//id считает количество новостей
        $news->title= "Новость номер "."$id";
        $news->text=$a." ".'<a href="'.$ht.'">'.$pieces[count($pieces)-2]." ".$pieces[count($pieces)-1]."...".'</a>';
        $news->link=$ht;
        R::store($news);//сохранение в бд
        echo '<div style="color: green;">Новость успешно добавлена!<br/>
            Чтобы её посмотреть <a href="/region">новости</a> региона!</div><hr>';
        }
                                                }               
else         echo '<div style="color: red;">Новость не добавлена!Вы не привилегированный пользователь!<br/>
Вернуться на <a href="/region">главную</a></div><hr>'; 
else         echo '<div style="color: red;">Новость не добавлена!Вы не авторизованный пользователь!<br/>	
Вернуться на <a href="/">главную</a></div><hr>'; 
}
function voidstr($str) {

    $len  = strlen($str);
    $mylen = 0;
    for($i=0;$i<$len;$i++)
    {
            if($str[$i]==" " || $str[$i]==".") {$mylen++;}
    }
        if ($mylen == $len) return 1;
        else return 0;
}
function point(&$str)
{
    $len = strlen ($str);
    if ($str[$len-1]==".") { 
    while ($str[$len-1]=="." && $len!=0) {$str[$len-1]=" ";$len--;} 
                           }

}
