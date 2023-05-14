<?php
session_start();

//Тема фона
$colorsTheme[0] = '#355c9d';
$colorsTheme[1] = '#666549';
$colorsTheme[2] = '#5e374d';
if (isset($_GET['theme'])) {
  setcookie('colorTheme', $_GET['theme']);
  $_COOKIE['colorTheme'] = $_GET['theme'];
}

// Хранение текущей страницы для обновления страницы при удалении сессии
if (!isset($_GET['logout'])) {
  setcookie('currentPage', $_SERVER['REQUEST_URI']);
  $_COOKIE['currentPage'] = $_SERVER['REQUEST_URI'];
}

// Выход пользователя из статуса авторизации
if (isset($_GET['logout'])) {
  if ($_GET['logout'] == 'yes') {
    session_destroy();
    $_GET['logout'] = '';
    header('Location: ' . $_COOKIE['currentPage']);
    die();
  }
}

//Редирект страницы
function redirect($url)
{
  header('Location: ' . $url);
  die();
}

//Регистрация
function checkReg($db_con)
{
  if ($_POST) {
    if ($_POST['new_login']) {
      $lenthLogin = mb_strlen($_POST['new_login']);

      if ($lenthLogin <= 2 || $lenthLogin >= 30)
        $error[] = 'Длина логина должна быть от 3 до 30 символов!';
    } else {
      $error[] = 'Поле логин не заполнено!';
    }

    if (!$_POST['new_password'])
      $error[] = 'Поле пароль не заполнено!';

    if ($_POST['repeat_new_password']) {
      if ($_POST['new_password'] <> $_POST['repeat_new_password'])
        $error[] = 'Пароль и подтверждение пароля не совпадают!';
    } else
      $error[] = 'Поле повтора пароля не заполнено!';

    $duplQery = mysqli_query($db_con, "SELECT * FROM `users` WHERE login = '{$_POST['new_login']}'");

    if (mysqli_num_rows($duplQery) > 0) {
      $error[] = 'Пользователь с таким логином уже существует!';
    }

    if (empty($error)) {
      $hash = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
      mysqli_query($db_con, "INSERT INTO users (id, login, password) VALUES (NULL, '{$_POST['new_login']}', '{$hash}')");
      $_SESSION['authUser'] = $_POST['new_login'];
      $url = '/auth.php';
      redirect($url);
    } else {
      foreach ($error as $value) {
        echo '<br>' . $value;
      }
    }
  }
}

// Изменение фона в зависимости от времени
function timeTheme()
{
  //Замена background-color из класса в зависимости от времени сервера, 
  //если время в диапазоне с 22.00 до 10.00, то тема должна быть темной
  //По умолчанию в OSP время на сервере Московское
  //Для отладки было решено выставлять сторонюю временную зону, например:
  //date_default_timezone_set('Asia/Krasnoyarsk');
  if (!isset($_COOKIE['colorTheme']) || $_COOKIE['colorTheme'] == 'timeTheme') {
    $timeData = date_parse(date('H:i:s')); //формируем ассоциативный массив с помощью функции date_parse внося в него только часы, минуты и секунды
    $secInHour = $timeData['hour'] * 3600; // вычисляем количество секунд из текущего часа
    $secInMinute = $timeData['minute'] * 60; // вычисляем количество секунд из текущих минут
    $sec = $timeData['second']; // инициализируем переменную с текущими секундами
    $sec = $secInHour + $secInMinute + $sec; // сумма текущих секунд
    if ($sec >= 36000 && $sec <= 79200) { // 36000 секунд это 10 часов ровно, а 79200 это 22 часа
      echo '#828b9a'; // класс дневной темы
    } else {
      echo '#46494e'; // класс ночной темы
    }
  } else {
    echo $_COOKIE['colorTheme'];
  }
}

// Закрашивание первого слова
function firstWord($strAboutMe)
{
  $arrTextAboutMe = explode(' ', trim($strAboutMe));
  foreach ($arrTextAboutMe as $key => $value) {
    if ($key == 0) { ?>
      <span style="color:#b6b3f1"><?php echo $value ?></span>
<?php
    } else {
      $arrLastText[] = $value;
    }
  }
  echo implode(' ', $arrLastText);
}

// Закрашивание слов с чередованием
function coloringWords($strAboutStudy)
{
  $arrTextAboutStudy = explode(' ', trim($strAboutStudy));
  foreach ($arrTextAboutStudy as $key => $value) {
    if ($key % 2 == 0) {
      $arrTextAboutStudyMod[] = '<span style="color:#b6b3f1">' . $value . '</span>';
    } else {
      $arrTextAboutStudyMod[] = '<span style="color:#ecebf7">' . $value . '</span>';
    }
  }
  echo implode(' ', $arrTextAboutStudyMod);
}

// Получение всего текста на странице
function contentText($strAboutMe, $strAboutStudy)
{
  $contentText = strip_tags(file_get_contents('index.php'));
  $contentText = trim($contentText);
  return $contentText = $contentText . ' ' . $strAboutMe . ' ' . $strAboutStudy;
}

//Расчет и вывод количества гласных
function numGlasn($strAboutMe, $strAboutStudy)
{
  $contentText = contentText($strAboutMe, $strAboutStudy);
  $numGlasn = preg_match_all('/[аАоОуУыЫэЭеЕёЁиИюЮяЯ]/u', $contentText);
  echo "Количество гласных на странице: $numGlasn<br>";
}

//Расчет и вывод количества слов
function numWord($strAboutMe, $strAboutStudy)
{
  $contentText = contentText($strAboutMe, $strAboutStudy);
  $arrContentText = explode(' ', trim($contentText));
  $numWord = 0;
  foreach ($arrContentText as $value) {
    $value = preg_replace('/\s\s+/u', '', $value);
    $value = preg_replace('/\—/u', '', $value);
    $value = preg_replace('/[0-9]/u', '', $value);
    if ($value != '') {
      $numWord++;
      $mass[] = $value;
    }
  }
  echo "Количество слов на странице: $numWord<br>";
}

//Расчет количества дней между д.р. и текущей датой
function countDays($dateBirth, $today)
{
  $diff = date_diff(date_create($dateBirth), date_create($today));
  $diffPrint = $diff->format('%a');
  echo "День рождения: $dateBirth<br>
        Сегодня: $today<br>
        Количество дней между датами: $diffPrint<br>";
}

//Проверка зарегистрированных пользователей
function checkAuth($db_con, &$userExist)
{
  if (isset($_SESSION['authUser'])) {
    $userExist = 'yes';
  } else {
    if ($_POST['login']) {
      $selectUser = mysqli_query($db_con, "SELECT * FROM `users` WHERE login = '{$_POST['login']}'");
      $userArray = mysqli_fetch_all($selectUser, MYSQLI_ASSOC);
      if (!empty($userArray)) {
        foreach ($userArray as $value) {
          if ($value['password'] == password_verify($_POST['password'], $value['password'])) {
            $userExist = 'yes';
            $_SESSION['authUser'] = $_POST['login'];
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
}
