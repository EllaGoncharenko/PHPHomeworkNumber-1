<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Decorate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
    <p class="sentence">Внесите, пожалуйста, значение цветового компонента</p>
    <INPUT type="number" min="0" max="255" name="ColorR"  id="one" placeholder="Укажите составляющую R" required autofocus>
    <INPUT type="number" min="0" max="255" name="ColorG"  id="second" placeholder="Укажите составляющую G" required autofocus>
    <INPUT type="number" min="0" max="255" name="ColorB"  id="third" placeholder="Укажите составляющую B" required autofocus>
    <INPUT type="submit" id="sending" value= "ACCEPT">
</form>
<?php
$r_color = $_POST['ColorR'];
$g_color = $_POST['ColorG'];
$b_color = $_POST['ColorB'];
$color = "$b_color".","."$g_color".","."$r_color";
$background = "$r_color".","."$g_color".","."$b_color";
printf("<span class='span_1' style='color: rgb($color); background:rgb($background)'>Преумножайющий мудрость, преумножает печаль...</span>");
?>
</body>
</html>
