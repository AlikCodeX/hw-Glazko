<?php
// Изменение фона в зависимости от времени
function timeTheme()
{
  //Замена background-color из класса в зависимости от времени сервера, 
  //если время в диапазоне с 22.00 до 10.00, то тема должна быть темной
  //По умолчанию в OSP время на сервере Московское
  //Для отладки было решено выставлять сторонюю временную зону, например:
  //date_default_timezone_set('Asia/Krasnoyarsk');
  $timeData = date_parse(date('H:i:s')); //формируем ассоциативный массив с помощью функции date_parse внося в него только часы, минуты и секунды
  $secInHour = $timeData['hour'] * 3600; // вычисляем количество секунд из текущего часа
  $secInMinute = $timeData['minute'] * 60; // вычисляем количество секунд из текущих минут
  $sec = $timeData['second']; // инициализируем переменную с текущими секундами
  $sec = $secInHour + $secInMinute + $sec; // сумма текущих секунд
  if ($sec >= 36000 && $sec <= 79200) { // 36000 секунд это 10 часов ровно, а 79200 это 22 часа
    echo 'day-mode'; // класс дневной темы
  } else {
    echo 'night-mode'; // класс ночной темы
  }
}

// Закрашивание первого слова
function firstWord($strAboutMe)
{
  $arrTextAboutMe = explode(' ', trim($strAboutMe));
  foreach ($arrTextAboutMe as $key => $value) {
    if ($key == 0) { ?>
      <span style="color:blueviolet"><?php echo $value ?></span>
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
      $arrTextAboutStudyMod[] = '<span style="color:#ef8c37">' . $value . '</span>';
    } else {
      $arrTextAboutStudyMod[] = '<span style="color:#dbd525">' . $value . '</span>';
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
function checkAuth($users, &$userExist)
{
  $userExist = 'no';
  if ($_POST) {
    if ($_POST['login'] <> "") {
      foreach ($users as $user) {
        if ($user['login'] == $_POST['login'] && $user['hash'] == password_verify($_POST['password'], $user['hash'])) {
          $userExist = 'yes';
          break;
        }
      }
    } else {
      $userExist = 'empty';
    }
  }
}
