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
      <div class="items-center">
        <div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
          <h2 class="mb-4 lg:text-xl text-justify">
            <?php foreach ($abouts as $about) {
              echo $about['maintext'];
            } ?>
          </h2>
        </div>
      </div>
    </div>
    <?php include "components/footer.php"; ?>
</body>

</html>