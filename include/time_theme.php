<?php
//Замена background-color из класса в зависимости от времени сервера, 
//если время в диапазоне с 22.00 до 10.00, то тема должна быть темной
//По умолчанию в OSP время на сервера Московское
//Для отладки было решено выставлять сторонюю временную зону, например:
//date_default_timezone_set('America/Toronto');
$timeData = date_parse(date('H:i:s')); //формируем ассоциативный массив с помощью функции date_parse внося в него только часы, минуты и секунды
$secInHour = $timeData['hour'] * 3600; // вычисляем количество секунд из текущего часа
$secInMinute = $timeData['minute'] * 60; // вычисляем количество секунд из текущих минут
$sec = $timeData['second']; // инициализируем переменную с текущими секундами
$sec = $secInHour + $secInMinute + $sec; // сумма текущих секунд
if ($sec >= 36000 && $sec <= 79200) { // 36000 секунд это 10 часов ровно, а 79200 это 22 часа
  $themes = 'day-mode'; // класс дневной темы
} else {
  $themes = 'night-mode'; // класс ночной темы
}
