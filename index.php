<?php
$php_folder = "./php/";
$php_extension = ".php";
$resources_folder = "./resources/";
$dev_web = "dev_web";
$info_admin = "infos_administratives";
$langues = "langues";
$activites = "activites_extraprofessionnelles";
?>
<!DOCTYPE html>

<html lang="fr" itemscope itemtype="http://schema.org/Article">
<head>
  <title>CV Stéphane Trebel</title>
  <meta charset="utf-8" data-column="8">
  <!--<link rel="stylesheet" href="./font-awesome-4.2.0/css/font-awesome.min.css"/>-->
  <link rel="stylesheet" href="./css/main.css"/>
  <!--<link rel="icon" type="image/png" href="./resources/favicon.png" />-->
  <meta itemprop="name" content="CV Stéphane Trebel">
  <meta itemprop="description" content="Expert en Applications Web">
  <meta itemprop="image" content="http://stephanetrebel.synology.me/curriculum_vitae/resources/profil.jpg">
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
            include $php_folder . $dev_web . $php_extension;
      ?>

      <section>
        <?php include $php_folder . $langues . $php_extension; ?>
      </section>

      <section>
        <?php include $php_folder . $activites . $php_extension; ?>
      </section>

    </div> <!-- wrapper_cv -->

    <footer>
      Copyright 2015. Tous droits réservés.
      <div>Icons made by
        <a href="http://www.flaticon.com/authors/google" title="Google">Google
        </a> from
        <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com
        </a> is licensed by
        <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0
        </a>
      </div>
    </footer>

    <script src="js/main.js"></script>

  </div> <!-- main_content -->
  <?php include_once("php/analyticstracking.php") ?>
</body>
</html>
