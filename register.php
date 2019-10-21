<?php

session_start();
//include_once "autoload.php";
?>

<!doctype html>
  <html lang="ru">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
      <title>My page</title>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-4"></div>
            <form class="col-4 firstt" action="/index.php" method="get">
              <div class="title">Register</div>
              <div>
                <input
                    type="text"
                    placeholder="username"
                    name="userName"
                    class="form-control"
                >
              </div>
              <div>
                <input
                    type="password"
                    placeholder="password"
                    name="password"
                    class="form-control"
                >
              </div>
                <form method="post" action="/index.php">
              <button class="btn" type="submit" value="Go!">Регистрация</button>
                </form>

            </form>
            <div class="col-4"></div>
        </div>
      </div>
    </body>
  </html>
