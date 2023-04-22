<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/auth.css">
  <title>Авторизация</title>
</head>
<?php
include_once 'include/functions.php';
?>

<body class="<?php timeTheme(); ?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <?php
    //Подключение файла с массивом пользователей $users
    require('include/users_DB.php');
    if (!empty($_POST)) {
      checkAuth($users, $userExist);
    }
    if ((!isset($userExist)) || $userExist != 'yes') {
    ?>
      <form action="" method="post" class="form-auth">
        <h1>Авторизация</h1>
        <div class="block-field login">
          <label class="block-field_label" for="login">Логин:</label>
          <input type="text" name="login" value="<?php echo $_POST['login'] ?? '' ?>">
        </div>
        <div class="block-field password">
          <label class="block-field_label" for="password">Пароль:</label>
          <input type="password" name="password">
        </div>
        <button class="button-auth" type="submit">Вход</button>
        <a class="link-registration" href="reg.php">Регистрация</a>
      </form>
    <?php
    }
    ?>

    <?php
    if (isset($userExist)) {
      switch ($userExist) {
        case 'yes':
          echo 'Вы успешно "авторизованы!"'; ?>
          <br><br><img style="width: 400px" src="img/nice.gif" alt="">
        <?php
          break;
        case 'no':
          echo 'Неверный логин/пароль!';
        ?>
          <br><br><img style="width: 400px" src="img/no.gif" alt="">
    <?php
          break;
        case 'empty':
          echo 'Не указан логин!';
          ?>
          <br><br><img style="width: 400px" src="img/oops.gif" alt="">
          <?php
          break;
      }
    }
    ?>

  </main>
</body>

</html>