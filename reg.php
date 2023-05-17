<?php
include_once 'include/functions.php';
?>

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

<body style="background-color:<?php timeTheme() ?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <?php
    if ($_POST) {
      $user = new User;
      $user->registration($_POST['new_login'], $_POST['new_password'], $_POST['repeat_new_password'], $db_con);
    }
    if (!empty($_SESSION['authUser'])) {
      $url = '/auth.php';
      redirect($url);
    }
    ?>
    <form method="post" class="form-registr">
      <h1>Регистрация</h1>
      <div class="block-field login">
        <label class="block-field_label" for="new_login">*Логин:</label>
        <input type="text" name="new_login" id="new_login">
      </div>
      <div class="block-field password">
        <label class="block-field_label" for="new_password">*Пароль:</label>
        <input type="password" name="new_password" id="new_password">
      </div>
      <div class="block-field password">
        <label class="block-field_label" for="repeat_new_password">*Повтор пароля:</label>
        <input type="password" name="repeat_new_password" id="repeat_new_password">
      </div>
      <button class="button-auth" type="submit">Зарегистрироваться</button>
    </form>
  </main>
</body>

</html>