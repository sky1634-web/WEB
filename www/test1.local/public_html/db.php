<?php
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=test1.local',
        'root', '' );

session_start();
function news($new,$ht)
{
        if ($_SESSION['logged_user']->id == 1) {
        if ((mb_strlen($new, 'utf-8')<180) || (voidstr($new)) || (voidstr($ht))) {
                 echo "Ошибка т.к TEXT < 180 Symbol or text only with void symbols<br>";
                 echo '<div style="color: red;">Новость не создана<br/>
                 Можете перейти на <a href="/">главную</a> страницу!</div><hr>';
        }
        else
        {
        $p=180;
        $a = mb_strimwidth($new, 0 , $p);
        point($a);
        $a=trim($a);
        $pieces = explode(" ", $a);
        $cutted = array_slice($pieces, 0, count($pieces)-2);
        $a = implode(" ",$cutted);
        echo "$a";
        echo '<a href="'.$ht.'">'." ".$pieces[count($pieces)-2]." ".$pieces[count($pieces)-1]."...".'</a>';
        $news = R::dispense('news');
        $id = R::count('news')+1;
        $news->title= "Новость номер "."$id";
        $news->text=$a." ".'<a href="'.$ht.'">'.$pieces[count($pieces)-2]." ".$pieces[count($pieces)-1]."...".'</a>';
        $news->link=$ht;
        R::store($news);
        echo '<div style="color: green;">Новость успешно добавлена!<br/>
            Чтобы её посмотреть <a href="/region">новости</a> региона!</div><hr>';
        }
                                                }               
else         echo '<div style="color: red;">Новость не добавлена!Вы не привилегированный пользователь!<br/>
Вернуться на <a href="/region">главную</a></div><hr>'; 
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
