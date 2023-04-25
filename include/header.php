<?php

?>
<header style="background-color:<?php timeTheme()?>">
  <nav>
    <a href="index.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32">
        <path d="M218 246a1 1 0 0 0-1 1v26a1 1 0 0 0 1 1 1 1 0 0 0 1-1v-26a1 1 0 0 0-1-1z" style="fill:#fff;" transform="translate(-204 -244)" />
        <path d="M219 258a1 1 0 0 0-1 1 1 1 0 0 0 1 1h14a1 1 0 0 0 1-1 1 1 0 0 0-1-1zM219 252a1 1 0 0 0-1 1 1 1 0 0 0 1 1h14a1 1 0 0 0 1-1 1 1 0 0 0-1-1z" style="fill:#fff;fill-opacity:1;" transform="translate(-204 -244)" />
        <path d="M209 246c-1.645 0-3 1.355-3 3v22c0 1.645 1.355 3 3 3h22c1.645 0 3-1.355 3-3v-22c0-1.645-1.355-3-3-3h-12zm0 2h22c.564 0 1 .436 1 1v22c0 .564-.436 1-1 1h-22c-.564 0-1-.436-1-1v-22c0-.564.436-1 1-1z" style="fill:#fff;fill-opacity:1;" transform="translate(-204 -244)" />
      </svg>
    </a>
    <ul class="menu">
      <li>
        <form action="">
          <select name="theme" onchange="this.form.submit()">
            <option disabled selected value>Выбор темы</option>
            <option value="<?php echo $colorsTheme[0] ?>" style="background-color:<?php echo $colorsTheme[0] ?>;color: #fff;">
              Тема 1
            </option>
            <option value="<?php echo $colorsTheme[1] ?>" style="background-color:<?php echo $colorsTheme[1] ?>;color: #fff;">
              Тема 2
            </option>
            <option value="<?php echo $colorsTheme[2] ?>" style="background-color:<?php echo $colorsTheme[2] ?>;color: #fff;">
              Тема 3
            </option>
          </select>
        </form>
      </li>
      <li><a href="table_animals.php" class="link-menu">Таблица Животные</a></li>
      <li><a href="form.php" class="link-menu">Форма</a></li>
      <li><a href="flex.php" class="link-menu">FLEXBOX/GRID</a></li>
      <li><a href="fact.php" class="link-menu">Факт</a></li>
      <li><a href="bitrix.php" class="link-menu">Битрикс</a></li>
      <li><a href="auth.php" class="link-menu">Авторизация</a></li>
    </ul>
  </nav>
</header>