<?php
$php_folder = "./php/";
$php_extension = ".php";
$resources_folder = "./resources/";
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

<html lang="fr" itemscope itemtype="http://schema.org/Article">
<head>
  <title>CV Stéphane Trebel</title>
  <meta charset="utf-8" data-column="8">
  <!--<link rel="stylesheet" href="./font-awesome-4.2.0/css/font-awesome.min.css"/>-->
  <link rel="stylesheet" href="./css/main.css"/>
  <!--<link rel="icon" type="image/png" href="./resources/favicon.png" />-->
  <meta itemprop="name" content="CV Stéphane Trebel">
  <meta itemprop="description" content="Chef de Projets ERP / Développeur Web">
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
    <div class="tabs">
      <div class=<?php echo "'tabs_header ". (($cv == $cdp_amoa) ? "active'" : "inactive'"); ?>>
        <a href="<?php echo "?cv=" . $cdp_amoa ?>">Chef de projets ERP</a>
        <a
          class="download_icon"
          href="<?php echo $resources_folder . "CV_Stephane_Trebel_CdP_ERP.pdf" ?>"
        >
          <?php echo file_get_contents($resources_folder . "download.svg"); ?>
        </a>
      </div>

      <div class=<?php echo "'tabs_header " . (($cv == $dev_web) ? "active'" : "inactive'"); ?>>
        <a href="<?php echo "?cv=" . $dev_web ?>">Développeur Web Front/Back</a>
        <a
          class="download_icon"
          href="<?php echo $resources_folder . "CV_Stephane_Trebel_Dev_Web.pdf" ?>"
        >
          <?php echo file_get_contents($resources_folder . "download.svg"); ?>
        </a>
      </div>
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
