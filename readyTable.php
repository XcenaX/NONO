<?php
require_once('Classes/solver.php');
$json =  $_GET['grid'];
$solv = new Solver();
$decoded = json_decode($json);

$servername = "127.0.0.1";
$database = "exam";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<br>Connected successfully";

$query ="INSERT INTO tables VALUES( NULL,'1' ,'$json')";

$result = mysqli_query($conn, $query) or die("Error " . mysqli_error($link));
if($result)
{
    echo "<br><span style='color:blue;'>dannie dobavlevi</span>";
}
// закрываем подключение
mysqli_close($conn);
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
<div class="sample-section">
    <div class="wrap">
    <div class="tableDiv">
    <table style="border: none; margin-left: 50px;">
        <tbody>
        <?php
        $answer = $solv->ReturnHorArr($json);
        $answer2 = $solv->ReturnVerArr($json);

        $i = count($decoded);
        $j = count($decoded[0])-1;


        for(; $j >= 0; $j--){
            echo '<tr>';
            for($m = 0; $m < $i; $m++){
                if($answer2[$m][$j] > 0)
                    echo '<td class="notReady " >' . $answer2[$m][$j] . '</td>';

                else
                    echo '<td class="notReady empty2" ></td>';
            }
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
    </div>
<div class="sample-section-wrap sample-section2 tableDiv">

        <table style="border: none;">
            <tbody>
            <?php
                foreach($answer as $tr){
                    echo '<tr>';
                    foreach($tr as $td){
                        if($td > 0)
                            echo '<td class="notReady left" >' . $td . '</td>';
                        else
                            echo '<td class="notReady left empty" ></td>';
                    }
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
        <div class="tableDiv">
            <center>
                <table>
                    <tbody>
                    <?php
                    $i = count($decoded);
                    $j = count($decoded[0]);
                    for($y = 0; $y < $i; $y++) :?>
                        <tr>
                            <?php
                            for($x = 0; $x < $j; $x++) :?>
                                <td class="ready" data-x="<?=$x?>" data-y="<?=$y?>" onclick="tdClick(this)">0</td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </center>
        </div>
</div>
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



<script src="Scripts/generation.js"></script>

</body>
</html>
