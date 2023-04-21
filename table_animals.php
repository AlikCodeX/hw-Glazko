<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <link rel="stylesheet" href="./styles/animals.css">
  <title>Таблица Животные</title>
</head>
<?php
include_once './include/functions.php';
?>

<body class="<?php timeTheme(); ?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <table>
      <caption>
        <h1>Животные</h1>
      </caption>
      <tr>
        <td>Птица</td>
        <td><img src="./img/bird.png" alt="Картинка птицы"></td>
      </tr>
      <tr>
        <td class="cell-hamster" colspan="2">
          Хомяк
          <img src="./img/hamster.png" alt="Картинка хомяка">
        </td>
      </tr>
      <tr>
        <td>Божья коровка</td>
        <td><img src="./img/ladybug.png" alt="Картинка божьей коровки"></td>
      </tr>
    </table>
  </main>
</body>

</html>