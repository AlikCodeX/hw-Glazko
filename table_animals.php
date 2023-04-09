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
include_once './include/time_theme.php';
?>

<body class="<?php echo $themes ?>">
  <header class="<?php echo $themes ?>">
    <nav>
      <a href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
          <path d="M218 246a1 1 0 0 0-1 1v26a1 1 0 0 0 1 1 1 1 0 0 0 1-1v-26a1 1 0 0 0-1-1z" style="fill:#fff;" transform="translate(-204 -244)" />
          <path d="M219 258a1 1 0 0 0-1 1 1 1 0 0 0 1 1h14a1 1 0 0 0 1-1 1 1 0 0 0-1-1zM219 252a1 1 0 0 0-1 1 1 1 0 0 0 1 1h14a1 1 0 0 0 1-1 1 1 0 0 0-1-1z" style="fill:#fff;fill-opacity:1;" transform="translate(-204 -244)" />
          <path d="M209 246c-1.645 0-3 1.355-3 3v22c0 1.645 1.355 3 3 3h22c1.645 0 3-1.355 3-3v-22c0-1.645-1.355-3-3-3h-12zm0 2h22c.564 0 1 .436 1 1v22c0 .564-.436 1-1 1h-22c-.564 0-1-.436-1-1v-22c0-.564.436-1 1-1z" style="fill:#fff;fill-opacity:1;" transform="translate(-204 -244)" />
        </svg>
      </a>
      <ul class="menu">
        <li><a href="table_animals.php" class="link-menu">Таблица Животные</a></li>
        <li><a href="form.php" class="link-menu">Форма</a></li>
        <li><a href="flex.php" class="link-menu">FLEXBOX/GRID</a></li>
      </ul>
    </nav>
  </header>
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