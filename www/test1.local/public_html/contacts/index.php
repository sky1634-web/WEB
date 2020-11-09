<?php
require "/home/dmitry/www/test1.local/public_html/db.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Jumbotron Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <!--<a class="navbar-brand" href="#">Navbar</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://test1.local">На главную <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.yandex.ru">Yandex</a>
      
      <!--  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
      </li>
	    <li class="nav-item active">
        <a class="nav-link" href="http://test1.local/contacts">Контакты <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Статистика ЭБД по регионам</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="http://test1.local/region">Регион1</a>
          <a class="dropdown-item" href="http://test1.local/region">Регион2</a>
          <a class="dropdown-item" href="http://test1.local/region">Регион3</a>
        </div>
      </li>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    <?php if ( isset($_SESSION['logged_user'])) : ?>Авторизован!<br>
    Привет, <?php echo $_SESSION['logged_user']->login; ?>!
    <hr>
    <a href="/new.php"><br/>Добавить новость&ensp;</a>
    <a href="/logout.php"><br>Выйти</a>
    <?php else :?>
	<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="/login.php">Авторизация</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/singup.php">Регистрация</a>
  </li>
</ul>
<?php endif; ?>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Добро пожаловать!</h1>
      <p>На этом сайте вы сможете отследить экономическую базу данных, как по всей стране, так и по отдельным регионам</p>
     <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Контактный номер ЭБД</h2>
        <p>Звонок бесплатный по России: 8 800 555 55 55</p>
       <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div> 
      <!--<div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div> -->
       <div class="col-md-4 offset-md-4">
        <h2>Новости по стране</h2>
        <p>Росстат примет участие в Международной конференции «Опыт и будущие вызовы в измерении доходов и благосостояния в странах Восточной Европы и СНГ».

Мероприятие состоится 17-18 сентября в Москве. Организаторы - Международная ассоциация по исследованию доходов и благосостояния (IARIW) совместно с Национальным исследовательским университетом «Высшая школа экономики» (НИУ ВШЭ). Это первая конференция, организованная IARIW в странах бывшего Советского Союза.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Узнать больше &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

<footer class="container">
  <p>&copy; Company 2017-2020</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
