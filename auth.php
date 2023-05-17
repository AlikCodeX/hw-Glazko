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
  <title>Авторизация</title>
</head>

<body style="background-color:<?php timeTheme() ?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <?php
    if (isset($_POST['login'])) {
      $user = new User;
      $user->authorization($_POST['login'], $_POST['password'], $db_con, $userExist);
    }
    if (!isset($_SESSION['authUser'])) {
    ?>
      <form action="" method="post" class="form-auth">
        <h1>Авторизация</h1>
        <div class="block-field login">
          <label class="block-field_label" for="login">Логин:</label>
          <input type="text" name="login" id="login" value="<?php echo $_POST['login'] ?? '' ?>">
        </div>
        <div class="block-field password">
          <label class="block-field_label" for="password">Пароль:</label>
          <input type="password" name="password" id="password">
        </div>
        <button class="button-auth" type="submit">Вход</button>
        <a class="link-registration" href="reg.php">Регистрация</a>
      </form>
    <?php
    }
    ?>

    <?php
    if (isset($_SESSION['authUser'])) {
      echo 'Вы успешно авторизованы!';
    ?>
      <br><br><img style="width: 400px" src="img/nice.gif" alt="">
      <br><br><a href="/" class="link-main">Вернуться на главную страницу</a>
    <?
    }
    if (isset($userExist)) {
      if ($userExist == 'no') {
          echo 'Неверный логин/пароль!';
          ?>
          <br><br><img style="width: 400px" src="img/no.gif" alt="">
        <?php
      } elseif ($userExist == 'empty') {
        echo 'Не указан логин!';
        ?>
        <br><br><img style="width: 400px" src="img/oops.gif" alt="">
      <?php
      }
    }
    ?>

  </main>
</body>

</html>