<?php
  include 'functions.php';
?>
<html class="" lang="sv" dir="ltr">

<head>
  <link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
</head>
<body>
  <?php GetHeader(); ?>
  <div id="content">
    <h1>Arbetserfarenheter</h1>
    <div class="row experience-row">
      <div class="date-container">2021-2022</div>
      <h2>Signalmekaniker - Försvarsmakten</h2>
      <h3></h3>
      <?php GetSQLTableFromDB('myworkexperiences'); ?>
    </div>
  </div>
  <?php GetFooter(); ?>
</body>
