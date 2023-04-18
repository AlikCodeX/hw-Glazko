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
  <header class="<?php timeTheme(); ?>">
    <nav>
      <a href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
          <path d="M218 246a1 1 0 0 0-1 1v26a1 1 0 0 0 1 1 1 1 0 0 0 1-1v-26a1 1 0 0 0-1-1z" style="fill:#fff;" transform="translate(-204 -244)" />
          <path d="M219 258a1 1 0 0 0-1 1 1 1 0 0 0 1 1h14a1 1 0 0 0 1-1 1 1 0 0 0-1-1zM219 252a1 1 0 0 0-1 1 1 1 0 0 0 1 1h14a1 1 0 0 0 1-1 1 1 0 0 0-1-1z" style="fill:#fff;fill-opacity:1;" transform="translate(-204 -244)" />
          <path d="M209 246c-1.645 0-3 1.355-3 3v22c0 1.645 1.355 3 3 3h22c1.645 0 3-1.355 3-3v-22c0-1.645-1.355-3-3-3h-12zm0 2h22c.564 0 1 .436 1 1v22c0 .564-.436 1-1 1h-22c-.564 0-1-.436-1-1v-22c0-.564.436-1 1-1z" style="fill:#fff;fill-opacity:1;" transform="translate(-204 -244)" />
        </svg>
      </a>
      <ul class="menu">
        <li><a href="table_animals.php" class="link-menu">Таблица Животные</a></li>
        <li><a href="form.php" class="link-menu">Форма</a></li>
        <li><a href="flex.php" class="link-menu">FLEXBOX/GRID</a></li>
      </ul>
    </nav>
  </header>
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