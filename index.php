<?php
  include 'functions.php';

?>
<?php //GetTextFileByTextName("homepage_intro_text");?>
<html class="" lang="sv" dir="ltr">

<head>
  <link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
</head>
<body>
  <?php GetHeader(); ?>
  <div id="main">
    <div id="content">
      <h1>LEDUNG-TECH</h1>
      <div class="row">
        <?php
          CreateHomePageCard('/assets/images/homepage.png', 'CV', 'resume.php');
          CreateHomePageCard('/assets/images/homepage.png', 'OM MIG', 'about-me.php');
          CreateHomePageCard('/assets/images/homepage.png', 'ERFARENHET', 'experience.php');
        ?>
      </div>
      <div class="row">
        <?php
          CreateHomePageCard('/assets/images/homepage.png', 'BEHÖRIGHETER', 'credentials.php');
          CreateHomePageCard('/assets/images/homepage.png', 'PORTFOLIO', 'resume.php');
          CreateHomePageCard('/assets/images/homepage.png', 'ADMIN', '');
        ?>
      </div>
    </div>
  </div>
  <?php GetFooter(); ?>
</body>
