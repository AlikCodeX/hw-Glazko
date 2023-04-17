<?
$dateBirth = '10.11.1994';
$today = date('d.m.Y');
$arrDateBirth = explode('.', trim($dateBirth));
$arrDateToday = explode('.', trim($today));
$diff = date_diff(date_create($dateBirth), date_create($today));
$diffPrint = $diff->format('%a');
