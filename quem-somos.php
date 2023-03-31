<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
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
        <div class="lg:p-10 p-2">
          <div class="flex justify-center">
            <img class="w-1/2" src="<?php echo $URI->base("/assets/img/logo.png"); ?>" alt="Somos VL" />
          </div>
        </div>
        <div class="lg:pt-4 lg:p-0 lg:p-10 p-5">
          <h2 class="mb-4 lg:text-xl text-justify">
            A VL Consultoria é uma empresa estabelecida desde 2010 que se dedica a oferecer excelência no atendimento aos seus clientes e encontrar soluções personalizadas para atender às suas necessidades. A cada ano, a empresa tem crescido em número de clientes e consolidado sua marca em todo o Brasil, transmitindo confiança e respeito a seus clientes e instituições financeiras que representa.

            Somos especializados em soluções de crédito e serviços financeiros para aposentados e pensionistas do INSS, Governos e prefeituras, além de profissionais do setor público e privado por meio da Antecipação do FGTS. Temos uma equipe altamente qualificada e experiente no mercado financeiro nacional.

            Nossa missão é trazer mais facilidade e realização de sonhos aos nossos clientes através dos nossos serviços. Temos como visão tornar os serviços financeiros acessíveis a todos os brasileiros. Valorizamos a integridade, o profissionalismo, a transparência e a responsabilidade em nossas atividades diárias.
          </h2>
        </div>
      </div>
    </div>
    <?php include "components/footer.php"; ?>
</body>

</html>