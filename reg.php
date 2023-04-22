<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/auth.css">
  <title>Регистрация</title>
</head>
<?php
include_once 'include/functions.php';
?>

<body class="<?php timeTheme(); ?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <form action="" method="post" class="form-registr">
      <h1>Регистрация</h1>
      <div class="block-field name">
        <label class="block-field_label" for="user_name">Имя:</label>
        <input type="text" name="user_name">
      </div>
      <div class="block-field login">
        <label class="block-field_label" for="new_login">Логин:</label>
        <input type="text" name="new_login">
      </div>
      <div class="block-field password">
        <label class="block-field_label" for="new_password">Пароль:</label>
        <input type="password" name="new_password">
      </div>
      <div class="block-field password">
        <label class="block-field_label" for="repeat_new_password">Повтор пароля:</label>
        <input type="password" name="repeat_new_password">
      </div>
      <button class="button-auth" type="submit">Зарегистрироваться</button>
    </form>
  </main>
</body>

</html>