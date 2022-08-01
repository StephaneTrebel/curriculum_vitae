<?php
$php_folder = "./php/";
$php_extension = ".php";
$resources_folder = "./resources/";
$work_history = "work_history";
$info_admin = "infos_administratives";
$langues = "langues";
$activites = "activites_extraprofessionnelles";
?>
<!DOCTYPE html>

<html lang="fr" itemscope itemtype="http://schema.org/Article">
<head>
  <title>CV Stéphane Trebel</title>
  <meta charset="utf-8" data-column="8">
  <link rel="stylesheet" href="./css/main.css"/>
  <meta itemprop="name" content="CV Stéphane Trebel">
  <meta itemprop="description" content="Expert en applications Web">
  <meta itemprop="image" content="https://resume-stephanetrebel.herokuapp.com/resources/profil.jpg">
</head>
<body>
  <header>
  <div class="top_bar"></div>
    <section class="top">
      <div class="infos ib">
        <?php include $php_folder . $info_admin . $php_extension; ?>
      </div>
      <div class="profil ib">
        <img itemprop="image" src="./resources/profil.jpg" alt="Photo de Profil">
      </div>
    </section>
  </header>

  <div class="main_content">
    <div class="tabs_wrapper">
      <?php
            include $php_folder . $work_history . $php_extension;
      ?>

      <section>
        <?php include $php_folder . $langues . $php_extension; ?>
      </section>

      <section>
        <?php include $php_folder . $activites . $php_extension; ?>
      </section>

    </div> <!-- wrapper_cv -->

    <footer>
      Copyright 2022. Tous droits réservés.
    </footer>

  </div> <!-- main_content -->
</body>
</html>
