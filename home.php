<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="Styles/table.css">
      <link rel="stylesheet" href="Styles/main.css">
  </head>
  <body>

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

<?php

$servername = "127.0.0.1";
$database = "exam";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "<br>Connected successfully";

$query ="SELECT id FROM tables";

$result = mysqli_query($conn, $query) or die("Error " . mysqli_error($link));
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
    echo "<br>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        $pas = '/checkingTable.php?id='.$row[0];
        ?>

      <?php
    }

    // очищаем результат
    mysqli_free_result($result);
}
mysqli_close($conn);
?>



</body>
</html>
