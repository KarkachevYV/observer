<?
session_start();
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="thumbnail" content="http://example/foo.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title><?php echo $title ?></title>
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Lato&family=Oswald&display=swap');
      
      h1 {
        font-size: 3.9vw;
      }
      h3 {
        font-size: 2.5vw;
      }
      h4 {
        font-family: 'Lato', sans-serif;
        font-size: 1.9vw;
      }
      h5 {
        font-size: 1.3vw;
        color: red; 
      }
      h6 {
        font-size: 1.0vw;
      }
      a {
        color: #024c8b;
	      text-decoration: none;
        font-size: 0.9vw;
      }
      ol {
        font-size: 1.0vw;
      }
      p {
        font-size: 1.0vw;
      }
     .page-item {
        width: 7%;
      }
     .btn {
        font-family: 'Lato', sans-serif;
        font-size: 0.9vw;
        
      }
      .flex-column {
        height: 459px;
      }
      .colortext {
        font-family: 'Lato', sans-serif;
        font-size: 2.3vw;
        color: red; 
      }
      .container {
        background: LemonChiffon;
        min-height: 490px;
        margin-top:10px;
      }
      .container-fluid {
        background-image: url(resource/img/8.jpg);
        background-size: cover;
      } 
    </style>
    <script async src="https://cse.google.com/cse.js?cx=005737830389846351263:zyuvaapg3cy"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="about.php">ВЫБОР</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse font-weight-bold" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="./">Главная страница<span class="sr-only">текущая страница</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lk.php">Личный кабинет</a>
            
            <?php if(!$_SESSION['id']):?>
            <a href="auth.php" class="btn btn-success mx-1">Войти</a>
            <a href="reg.php" class="btn btn-info ">Регистрация</a>
            <?php else:?>
            <a href="exit.php" class="btn btn-success mx-1">Выйти</a>
            <?php endif;?>
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Федерация</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="gfs.php">Города федерального значения</a>
              <a class="dropdown-item" href="coor.php">Край/Область/Округ/Республика</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="mo.php">Местные органы</a>
            </div>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Кандидаты</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="otpar.php">от партий</a>
              <a class="dropdown-item" href="nezaw.php">независимые</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="mestn.php">местные</a>
            </div>  
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Наблюдатели</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="rigths.php">Полномочия</a>
              <a class="dropdown-item" href="cours.php">Обучение</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Личный кабинет</a>
            </div>  
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Активный гражданин</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="property.php">Голосование по поправкам</a>
              <a class="dropdown-item" href="preform.php">Народное вече</a>
              <a class="dropdown-item" href="education.php">Система образования</a>
              <a class="dropdown-item" href="healthcare.php">Система здравохранения</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="lk.php">Личный кабинет</a>
            </div>  
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Отключён</a>
          </li>
        </ul>
        <div class="gcse-searchbox-only">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 ">Поиск</button>
        </form>
        </div>
      </div>
    </nav>