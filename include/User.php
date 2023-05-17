<?php
class User
{
  public $login;
  public $password;
  public $passwordPrompt;
  public $db_con;

  public function authorization($login, $password, $db_con, &$userExist)
  {
    $this->login = $login;
    $this->password = $password;

    if ($this->login) {
      $selectUser = mysqli_query($db_con, "SELECT * FROM `users` WHERE login = '$this->login'");
      $userArray = mysqli_fetch_all($selectUser, MYSQLI_ASSOC);
      if (!empty($userArray)) {
        foreach ($userArray as $value) {
          if ($value['password'] == password_verify($this->password, $value['password'])) {
            $_SESSION['authUser'] = $this->login;
            redirect($_COOKIE['currentPage']);
          } else {
            $userExist = 'no';
          }
        }
      } else {
        $userExist = 'no';
      }
    } else {
      $userExist = 'empty';
    }
  }

  public function registration($login, $password, $passwordPrompt, $db_con)
  {
    $this->login = $login;
    $this->password = $password;
    $this->passwordPrompt = $passwordPrompt;

    if ($_POST) {
      if ($this->login) {
        $lenthLogin = mb_strlen($this->login);

        if ($lenthLogin <= 2 || $lenthLogin >= 30)
          $error[] = 'Длина логина должна быть от 3 до 30 символов!';
      } else {
        $error[] = 'Поле логин не заполнено!';
      }

      if (!$this->password)
        $error[] = 'Поле пароль не заполнено!';

      if ($this->passwordPrompt) {
        if ($this->password <> $this->passwordPrompt)
          $error[] = 'Пароль и подтверждение пароля не совпадают!';
      } else
        $error[] = 'Поле повтора пароля не заполнено!';

      $duplQery = mysqli_query($db_con, "SELECT * FROM `users` WHERE login = '$this->login'");

      if (mysqli_num_rows($duplQery) > 0) {
        $error[] = 'Пользователь с таким логином уже существует!';
      }

      if (empty($error)) {
        $hash = password_hash($this->password, PASSWORD_DEFAULT);
        mysqli_query($db_con, "INSERT INTO users (id, login, password) VALUES (NULL, '$this->login', '{$hash}')");
        $_SESSION['authUser'] = $this->login;
        $url = '/auth.php';
        redirect($url);
      } else {
        foreach ($error as $value) {
          echo '<br>' . $value;
        }
      }
    }
  }

  public function logout() {
    if ($_GET['logout'] == 'yes') {
      session_destroy();
      $_GET['logout'] = '';
      header('Location: ' . $_COOKIE['currentPage']);
      die();
    }
  }
}