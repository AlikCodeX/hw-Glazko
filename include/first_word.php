<?php $strAboutMe = 'Работаю 3 года системным администратором, отучился и имею дипломы на среднее специальное "Техническое обслуживание средств вычислительной техники и компьютерных сетей" и высшее "Программная инженерия" образование. Интересуюсь различными технологиями, в свободное время люблю кататься на скейте и рисовать.';
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
