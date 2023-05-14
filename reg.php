<?php
include_once 'include/dbconnect.php';
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
    /* if (!empty($_POST)) {
      if (!empty($_POST['new_login'])) {
        if ($_FILES) {
          $info = new SplFileInfo($_FILES['avatar']['name']);
          $type = $info->getExtension();
          switch ($type) {
            case 'png':
            case 'jpg':
            case 'jpeg':
            case 'gif':
              move_uploaded_file($_FILES['avatar']['tmp_name'], 'foto/' . $_POST['new_login'] . '_avatar.' . "$type");
              break;
            case '':
              break;
            default:
              echo "Неверный формат файла, только png, jpg, jpeg, gif";
              break;
          }
        }
      } else {
        echo 'Нет логина!';
      }
    } */
    checkReg($db_con);
    if (!empty($_SESSION['authUser'])) {
      $url = '/auth.php';
      redirect($url);
    }
    ?>
    <form method="post" class="form-registr"> <!-- enctype="multipart/form-data" -->
      <h1>Регистрация</h1>
      <!-- <div class="block-field name">
        <label class="block-field_label" for="user_name" >Имя:</label>
        <input type="text" name="user_name" id="user_name">
      </div> -->
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
      <!-- <div class="block-field password">
        <label class="block-field_label" for="avatar">Аватар:</label>
        <input type="file" name="avatar">
      </div> -->
      <button class="button-auth" type="submit">Зарегистрироваться</button>
    </form>
    <?php /*  }  */ ?>
  </main>
</body>

</html>