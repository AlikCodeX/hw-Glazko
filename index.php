<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/main.css">
  <title>О себе</title>
</head>
<?php
include_once 'include/functions.php';
?>

<body class="<?php timeTheme(); ?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <div class="description-block">
      <div class="block-photo">
        <img src="img/my_photo.jpg" alt="Глазко Александр фото">
      </div>
      <div class="block-info">
        <div class="block-name">
          <h1>Александр Глазко</h1>
        </div>
        <div class="main-text-block">
          <div class="text-block">
            <?php
            $strAboutMe = 'Работаю 3 года системным администратором, отучился и имею дипломы на среднее специальное "Техническое обслуживание средств вычислительной техники и компьютерных сетей" и высшее "Программная инженерия" образование. Интересуюсь различными технологиями, в свободное время люблю кататься на скейте и рисовать.';
            $strAboutStudy = 'Все супер! Атмосфера стимулирует к обучению, радует, что есть практика прямо во время обучения, это позволяет лучше закрепить и разобрать тему урока.';
            firstWord($strAboutMe);
            ?>
          </div>
          <div class="text-block">
            <?php
            coloringWords($strAboutStudy); ?>
          </div>
        </div>
        <?php
        numGlasn($strAboutMe, $strAboutStudy);
        numWord($strAboutMe, $strAboutStudy);
        countDays('10.11.1994', date('d.m.Y')); ?>
      </div>
    </div>
    <h2>Достопримечательности Красноярска</h2>
    <div class="gallery-gorizontal-block">
      <div class="card">
        <div class="picture-card-block"><img src="./img/gallery/03.jpg" alt="Символ Красноярска — Часовня Параскевы Пятницы"></div>
        <div class="picture-description">Символ Красноярска — Часовня Параскевы Пятницы</div>
      </div>
      <div class="card">
        <div class="picture-card-block"><img src="./img/gallery/05.jpg" alt="Коммунальный мост через Енисей"></div>
        <div class="picture-description">Коммунальный мост через Енисей</div>
      </div>
      <div class="card">
        <div class="picture-card-block"><img src="./img/gallery/33.jpg" alt="Церковь Преображения Господня"></div>
        <div class="picture-description">Церковь Преображения Господня</div>
      </div>
      <div class="card">
        <div class="picture-card-block"><img src="./img/gallery/42.jpg" alt="Надпись «Енисейская Сибирь» на склоне под жилым комплексом «Орбита»"></div>
        <div class="picture-description">Надпись «Енисейская Сибирь» на склоне под жилым комплексом «Орбита»</div>
      </div>
    </div>
    <h2>Достопримечательности Красноярского края</h2>
    <div class="gallery-vertical-block">
      <div class="card">
        <div class="picture-card-block"><img src="./img/gallery/fan-park-bobrovyy-log.jpg" alt="Национальный парк «Красноярские Столбы»"></div>
        <div class="picture-description">Национальный парк «Красноярские Столбы»</div>
      </div>
      <div class="card">
        <div class="picture-card-block"><img src="./img/gallery/peshchera-bolshaya-oreshnaya.jpg" alt="Пещера Большая Орешная"></div>
        <div class="picture-description">Пещера Большая Орешная</div>
      </div>
      <div class="card">
        <div class="picture-card-block"><img src="./img/gallery/sayano-shushenskaya-ges.jpg" alt="Саяно-Шушенская ГЭС">
        </div>
        <div class="picture-description">Саяно-Шушенская ГЭС</div>
      </div>
      <div class="card">
        <div class="picture-card-block"><img src="./img/gallery/zapovednik-stolby.jpg" alt="Фан-парк «Бобровый лог»">
        </div>
        <div class="picture-description">Фан-парк «Бобровый лог»</div>
      </div>
    </div>
  </main>
</body>

</html>