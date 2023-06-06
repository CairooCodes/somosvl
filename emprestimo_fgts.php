<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";

require "./functions/get.php";

$abouts = getAbout();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Quem Somos - Somos VL</title>
  <?php include "heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>


<body>
  <?php include "components/navbar.php"; ?>
  <div>
    <div class="mx-auto max-w-6xl pt-2 about">
      - banners com tipos    tiago

      - O que é Empréstimo com Garantia  tiago
      do Saque Aniversário do FGTS?
 
      - vantagens tiago
      
      - É fáci so com botao no whats alex

      - Faq alex
    </div>
    <?php include "components/footer.php"; ?>
</body>

</html>