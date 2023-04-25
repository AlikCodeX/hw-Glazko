<?php
include_once './include/functions.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <link rel="stylesheet" href="./styles/flex-grid.css">
  <title>FLEXBOX/GRID</title>
</head>

<body style="background-color:<?php timeTheme()?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <h1>FLEXBOX/GRID</h1>
    <h2>Вариант FLEXBOX</h2>
    <h3>Задание 2</h3>
    <div class="circle two"></div>
    <div class="circle two"></div>
    <div class="circle two"></div>
    <div class="circle two"></div>
    <div class="circle two"></div>
    <h3>Задание 3</h3>
    <div class="flexbox flex-space">
      <div class="circle three"></div>
      <div class="circle three"></div>
      <div class="circle three"></div>
      <div class="circle three"></div>
      <div class="circle three"></div>
    </div>
    <h3>Задание 4</h3>
    <div class="flexbox flex-space">
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
    </div>
    <h3>Задание 5</h3>
    <div class="flexbox flex-space">
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
    </div>
    <div class="flexbox flex-space">
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
    </div>
    <h3>Задание 6. Работа с медиа</h3>
    <div class="flex-box flex-space">
      <div class="flex-block-item">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
      <div class="flex-block-item">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
      <div class="flex-block-item">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
      <div class="flex-block-item">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>
    <h2>Вариант GRID</h2>
    <h3>Задание 2</h3>
    <div class="circle two"></div>
    <div class="circle two"></div>
    <div class="circle two"></div>
    <div class="circle two"></div>
    <div class="circle two"></div>
    <h3>Задание 3</h3>
    <div class="grid flex-space">
      <div class="circle three"></div>
      <div class="circle three"></div>
      <div class="circle three"></div>
      <div class="circle three"></div>
      <div class="circle three"></div>
    </div>
    <h3>Задание 4</h3>
    <div class="grid flex-space colums-four">
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
      <div class="circle four"></div>
    </div>
    <h3>Задание 5</h3>
    <div class="grid flex-space colums-five">
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
      <div class="circle five"></div>
    </div>
    <h3>Задание 6. Работа с медиа</h3>
    <div class="media-grid flex-space">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
    </div>
  </main>
</body>

</html>