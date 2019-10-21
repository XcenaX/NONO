<?php
if($_GET['cols'] > 42){
    $message = "Колонок должно быть меньше 40";

    header("Location: http://realibi.run:7182/table.php?cols=0&rows=0");
}
else if($_GET['rows'] > 42){
    $message = "Строк должно быть меньше 40";
    header("Location: http://realibi.run:7182/table.php?cols=0&rows=0");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Styles/table.css">
    <link rel="stylesheet" href="Styles/main.css">
    <script src="Scripts/jquery.min.js"></script>
    <script src="Scripts/main.js"></script>

</head>
<body>

<script>
    function tdClick(prop){
        prop.style.backgroundColor == "black" ? prop.style.backgroundColor = "white": prop.style.backgroundColor = "black";
    }
</script>

<div class="sample-header">
  <div class="sample-header-section">
    <img src="Images/logo.png" class="logo"/>
      <div class="buttonsWrap">
        <div class="headerDiv">
          <a src="" alt="" class="btn-2 btn">Мои</a>
        </div>
        <div class="headerDiv">
          <a src="" alt="" class="btn-2 btn">Все</a>
        </div>
          <div class="headerDiv">
              <a src="" alt="" class="btn-2 btn">Выход</a>
          </div>
      </div>
  </div>
</div>
<div class="sample-section-wrap">
  <div class="sample-section">
    <center>
        <form action="/table.php?" method="get">
            <input type="number" min="1" max="42" placeholder="Кол-во колонок" name='cols'>
            <input type="number" min="1" max="42" placeholder="Кол-во строк" name='rows'>
            <button type="submit">Сохранить</button>
        </form>
    </center>
    <div class="tableDiv">
    <center>
            <table>
                <tbody>
                    <?php
                        for($y = 0; $y < $_GET["rows"]; $y++) :?>
                        <tr>
                            <?php
                            for($x = 0; $x < $_GET['cols']; $x++) :?>
                            <td class="ready" onclick="tdClick(this)">0</td>
                            <?php endfor; ?>
                        </tr>
                        <?php endfor; ?>
                </tbody>
            </table>
        </center>
    </div>
    <center>
      <form class="" action="/readyTable.php" method="get">
        <input type="text" class="input" name="grid" value="" hidden>
        <button class="generateButton" type="submit">
          Сгенерировать
        </button>
      </form>
    </center>
  </div>
</div>


<footer class="footer">
    <div class="footer__text container">
        <p>

        </p>
        <p>
            &copy; Copyright 2019 NonoPro.org
        </p>
        <hr class="footer__hr">
    </div>
    <div class="footer__sections container">
        <div class="footer__section">
            <span class="footer__title">Навигация по сайту</span>
            <a href="#" class="footer__link">Мои нонограммы</a>
            <a href="#" class="footer__link">Генерация</a>
            <a href="#" class="footer__link">Все нонограммы</a>
            <a href="#" class="footer__link">Профиль</a>
        </div>
        <div class="footer__section">
            <span class="footer__title">Полезные ссылки</span>
            <a href="#" class="footer__link">365.org</a>
            <a href="#" class="footer__link">brothers</a>
        </div>
        <div class="footer__section">
            <span class="footer__title">Помощь</span>
            <a href="#" class="footer__link">Донат</a>
            <a href="#" class="footer__link">Подписка</a>
            <a href="#" class="footer__link">Наш мерч</a>
        </div>
        <div class="footer__section">
            <span class="footer__title">Соц сети</span>
            <a href="#" class="footer__link">Vk</a>
            <a href="#" class="footer__link">Instagram</a>
            <a href="#" class="footer__link">Telegram</a>
        </div>
    </div>
</footer>


<script>
$("form").on("submit", function(e) {
  e.preventDefault();
  let input = $(this).find(".input");
  $(input).val(generate());
  $(this).unbind('submit').submit();
});
</script>
    <script src="Scripts/generation.js"></script>

</body>
</html>
