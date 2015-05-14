<?php
$php_folder = "./php/";
$php_extension = ".php";
$cv = filter_input(INPUT_GET , "cv" , FILTER_SANITIZE_STRING);
$cdp_amoa = "cdp_amoa";
$dev_web = "dev_web";
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
        <h1>Informations administratives</h1>
        <ul>
          <li>Trébel Stéphane</li>
          <li>15 Le Cormier</li>
          <li>56350 Saint-Vincent-Sur-Oust</li>
          <li>&nbsp;</li>
          <li>Mobile : 06 81 62 69 40</li>
          <li>Mèl : <a href="mailto:stephane.trebel@gmail.com">stephane.trebel@gmail.com<a></li>
          <li>33 ans, marié, 3 enfants.</li>
        </ul>
      </div>
      <div class="profil ib">
        <img src="./resources/profil.jpg" alt="Photo de Profil">
      </div>
    </section>
    <div class="tabs">
      <a
        class=<?php echo "'tabs_header ". (($cv == $cdp_amoa) ? "active'" : "'"); ?>
        href=<?php echo "?cv=" . $cdp_amoa ?>>
        Chef de projets AMOA
      </a>
      <a
        class=<?php echo "'tabs_header " . (($cv == $dev_web) ? "active'" : "'"); ?>
        href=<?php echo "?cv=" . $dev_web ?>>
        Développeur Web Front/Back
      </a>
    </div>

    <div class="wrapper_cv">
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
        <h1>Langues</h1>
        <ul>
          <li>Anglais : Bilingue.</li>
        </ul>
      </section>


      <section>
        <h1>Activités Extraprofessionnelles</h1>
        <ul>
          <li>Administration des sites internet <a href="http://www.stephanetrebel.com"><em>Stephane Trebel</em></a> et <a href="http://www.espritpaleo.com"><em>Esprit Paleo</em></a></li>
          <li>Photographie (et administration d’une <a href="http://www.stephanetrebel.com/galerie">galerie en ligne</a>)</li>
          <li>Pratique de la Guitare</li>
        </ul>
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
