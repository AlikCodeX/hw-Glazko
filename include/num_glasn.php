<?php
$contentText = strip_tags(file_get_contents('index.php'));
$contentText = trim($contentText);
$contentText = $contentText . ' ' . $strAboutMe . ' ' . $strAboutStudy;
$numGlasn = preg_match_all('/[аАоОуУыЫэЭеЕёЁиИюЮяЯ]/u', $contentText);

$arrContentText = explode(' ', trim($contentText));
$numWord = 0;
foreach ($arrContentText as $key => $value) {
  $value = preg_replace('/\s\s+/u', '', $value);
  $value = preg_replace('/\—/u', '', $value);
  $value = preg_replace('/[0-9]/u', '', $value);
  if ($value != '') {
    $numWord++;
    $mass[] = $value;
  }
}

//Массив для проверки количества слов
/* echo "<pre>";
var_dump($mass);
echo "</pre>"; */
