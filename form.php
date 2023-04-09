<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <link rel="stylesheet" href="./styles/form.css">
  <title>Форма пользователя</title>
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
    <h1>Анкета опросник</h1>
    <form name="form-question">
      <label for="user">Имя пользователя:</label>
      <input type="text" name="user-name" id="user">
      <br>
      <br>
      <label for="email">E-mail</label>
      <input type="email" name="email-address" id="email" required>
      <br>
      <br>
      <label for="like-tech">Что вам нравиться больше всего?</label>
      <select name="question-like" id="like-tech">
        <option value="HTML">HTML</option>
        <option value="CSS">CSS</option>
        <option value="PHP">PHP</option>
        <option value="BITRIX">BITRIX</option>
      </select>
      <fieldset>
        <legend>Хочу быть...</legend>
        <input type="radio" name="desired-profession" value="junior-php" id="junior">
        <label for="junior">Junior PHP Developer</label>
        <input type="radio" name="desired-profession" value="middle-php" id="middle">
        <label for="middle">Middle PHP Developer</label>
        <input type="radio" name="desired-profession" value="front-end" id="front">
        <label for="front">Front-end разработчик</label>
        <input type="radio" name="desired-profession" value="want-designer" id="designer">
        <label for="designer">Нее, хочу быть дизайнером</label>
      </fieldset>
      <fieldset>
        <legend>Мои навыки в программировании</legend>
        <input type="checkbox" name="programm-god" id="god">
        <label for="god">Бог программирования</label>
        <input type="checkbox" name="programm-guru" id="guru">
        <label for="guru">Гуру программирования</label>
        <input type="checkbox" name="study-now" id="study">
        <label for="study">Эм... я еще учусь</label>
      </fieldset>
      <br>
      <label for="time-study">Во сколько мне удобно приходить на занятия?</label>
      <input type="time" name="time-lesson" step="2" id="time-study">
      <br>
      <br>
      <label for="comments">Мои пожелания и комментарии по курсам</label>
      <textarea name="comments-course" cols="20" rows="3" id="comments"></textarea>
      <br>
      <br>
      <button type="submit">Все, я справился с заполнением формы</button>
    </form>
  </main>
</body>

</html>