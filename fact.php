<?php
session_start();
$_SESSION['lastPage'] = 'fact.php';
include_once 'include/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/form.css">
  <title>Факт</title>
</head>

<body style="background-color:<?php timeTheme()?>">
  <?php include_once 'include/header.php'; ?>
  <main>
    <h1>Факт</h1>
  </main>
</body>

</html>