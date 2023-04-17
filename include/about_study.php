<?php
$strAboutStudy = 'Все супер! Атмосфера стимулирует к обучению, радует, что есть практика прямо во время обучения, это позволяет лучше закрепить и разобрать тему урока.';

$arrTextAboutStudy = explode(' ', trim($strAboutStudy));
foreach ($arrTextAboutStudy as $key => $value) {
  if ($key % 2 == 0) {
    $arrTextAboutStudyMod[] = '<span style="color:#ef8c37">' . $value . '</span>';
  } else {
    $arrTextAboutStudyMod[] = '<span style="color:#dbd525">' . $value . '</span>';
  }
}
echo implode(' ', $arrTextAboutStudyMod);
