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
  <link rel="stylesheet" href="./styles/form.css">
  <title>Форма пользователя</title>
</head>

<body style="background-color:<?php timeTheme()?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <h1>Анкета опросник</h1>
    <form class="form-answer" name="form-question">
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