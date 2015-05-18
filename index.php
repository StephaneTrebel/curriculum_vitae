<?php
$php_folder = "./php/";
$php_extension = ".php";
$cv = filter_input(INPUT_GET , "cv" , FILTER_SANITIZE_STRING);
$cdp_amoa = "cdp_amoa";
$dev_web = "dev_web";
$info_admin = "infos_administratives";
$langues = "langues";
$activites = "activites_extraprofessionnelles";
if (!isset($cv) || empty($cv)) {
  $cv = $dev_web;
}
?>
<!DOCTYPE html>

<html>
<head>
  <title>CV Stéphane Trebel</title>
  <meta charset="utf-8" data-column="8">
  <!--<link rel="stylesheet" href="./font-awesome-4.2.0/css/font-awesome.min.css"/>-->
  <link rel="stylesheet" href="./css/main.css"/>
  <!--<link rel="icon" type="image/png" href="./resources/favicon.png" />-->
</head>
<body>
  <div class="main_content">
    <header class="hidden">
        Curriculum Vitae
    </header>
    <section class="top">
      <div class="infos ib">
        <?php include $php_folder . $info_admin . $php_extension; ?>
      </div>
      <div class="profil ib">
        <img src="./resources/profil.jpg" alt="Photo de Profil">
      </div>
    </section>

    <div class="tabs">
      <a
        class=<?php echo "'tabs_header ". (($cv == $cdp_amoa) ? "active'" : "inactive'"); ?>
        href=<?php echo "?cv=" . $cdp_amoa ?>>
        Chef de projets ERP
      </a>
      <a
        class=<?php echo "'tabs_header " . (($cv == $dev_web) ? "active'" : "inactive'"); ?>
        href=<?php echo "?cv=" . $dev_web ?>>
        Développeur Web Front/Back
      </a>
    </div>

    <div class="tabs_wrapper">
      <?php
        switch ($cv) {
          case $cdp_amoa:
            include $php_folder . $cdp_amoa . $php_extension;
            break;
          case $dev_web:
            include $php_folder . $dev_web . $php_extension;
            break;
          default:
            echo "La page demandée n'est pas accessible";
        }
      ?>

      <section>
        <?php include $php_folder . $langues . $php_extension; ?>
      </section>

      <section>
        <?php include $php_folder . $activites . $php_extension; ?>
      </section>

    </div> <!-- wrapper_cv -->

    <footer>
      Copyright 2015. Tous droits réservés
    </footer>

    <script src="js/main.js"></script>

  </div> <!-- main_content -->
  <?php include_once("php/analyticstracking.php") ?>
</body>
</html>
