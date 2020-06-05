<?
$title = "ВЫБОР";
require_once("components/header.php");
?>
<style>
    img {
      max-height: 150px;
      max-width: 399px;
    }
    a {
      color: Maroon;
      top: 10px;
      left: 15px;
      border: 1px solid black;
      background: DarkGrey;
      padding: 2px;
      border-radius: 5% 5% 5% 5%;
    }
    b {
      font-family: 'Lato', sans-serif;
      font-size: 3.8vh;
    }
    .colortext {
      color: red; 
    }
</style>

<div class="container">
  <div class="row align-items">
    <div class="col-6">
      <h1>Сайт "ВЫБОР"</h1>
      <section>
        <h4><span class="colortext">Э</span>то дипломная работа <b>Каркачёва Юрия Викторовича</b>,<br>слушателя онлайн курса: <b>"Веб-программирование"</b>, с очно-заочной формой обучения, учебного центра <b>"Профессионал"</b>.<br> Преподователь курса: <b>Петрухин Иван Дмитриевич</b>.<br> Руководитель группы: <b>Рязанова Елена Сергеевна</b>.</h4>
      </section>
    </div>
    <div class="d-none col-6 d-md-block mt-5">
      <img src="resource/img/logotip_na_sayte_duprof.tech.mos.ru.jpg" alt=""><br><br>
      <a href="https://eduprof.mos.ru/">     << здесь можно перейти на сайт ГБОУ ДПО "Профессионал"      </a>
    </div>
  </div>
</div>

<?
require_once("components/footer.php");
?> 