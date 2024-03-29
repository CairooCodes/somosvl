<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$lpBanner = getLpBanner();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Empréstimo FGTS - Somos VL</title>
  <?php include "heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
  <meta property="og:title" content="Empréstimo FGTS - Somos VL" />
</head>


<body>
  <?php include "components/navbar_landingpage.php"; ?>
  <?php
  foreach ($lpBanner as $lpBanner) {
  ?>
    <div id="minha-div" class="div-com-imagem">
      <div class="mx-auto max-w-7xl p-12 pt-2 flex flex-col justify-center gap-8 h-full">
        <h1 style="color: white !important;" class="text-white text-2xl md:text-5xl font-sans font-bold">
          ANTECIPE ATÉ <span class="text-color2"><br> 10 PARCELAS</span> DO
          SEU<br>
          SAQUE<br>
          ANIVERSÁRIO FGTS
        </h1>
        <ul class="list-disc">
          <li class="text-color2 text-xl md:text-2xl font-sans font-semibold">
            <span class="text-white">Taxa de juros a partir de 1,99% a.m.*</span>
          </li>
          <li class="text-color2 text-xl md:text-2xl font-sans font-semibold">
            <span class="text-white">Dinheiro rápido mesmo para negativados</span>
          </li>
          <li class="text-color2 text-xl md:text-2xl font-sans font-semibold">
            <span class="text-white">É simples e sem pagamento de parcelas mensais</span>
          </li>
        </ul>
        <button class="md:w-80 bg-color2 p-3 rounded-full text-lg tracking-wide font-semibold cursor-pointer transition ease-in duration-500 text-white">
          <a href="https://wa.me/message/YQ54VQBLS6SXP1">
            Clique aqui para Contratar
          </a>
        </button>
      </div>
    </div>

    <?php
    // Supondo que você tenha o conteúdo do Blob em uma variável chamada $blobContent
    $blobContent = $lpBanner['img'];

    // Codifica o conteúdo do Blob em base64
    $base64Image = base64_encode($blobContent);

    // Cria uma string base64 para uso como background-image
    $backgroundImage = "data:image/jpeg;base64," . $base64Image;

    // Obtém as dimensões da imagem usando a biblioteca GD do PHP
    $imageInfo = getimagesize("data://image/jpeg;base64," . $base64Image);
    $width = $imageInfo[0];
    $height = $imageInfo[1];
    ?>

    <script>
      var div = document.getElementById('minha-div');
      div.style.height = "<?php echo $height; ?>px";
      div.style.backgroundImage = "url('<?php echo $backgroundImage; ?>')";
    </script>

  <?php
  }
  ?>

  <!-- BARRA DE NAVEGAÇÃO -->
  <div>
    <section style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;" class="w-full hidden md:block bg-gradient-to-r from-sky-900 to-fuchsia-900">
      <div class="flex h-20 w-full items-center justify-around max-w-6xl mx-auto">
        <a href="#o_que_é" class="text-white text-md font-semibold">O QUE É</a>
        <a href="#vantagens" class="text-white text-md font-semibold">VANTAGENS</a>
        <a href="https://wa.me/message/YQ54VQBLS6SXP1" class="text-white text-md font-semibold">COMO ADERIR</a>
        <a href="#dúvidas_frequentes" class="text-white text-md font-semibold">DÚVIDAS FREQUENTES</a>
        <button class="bg-color2 p-3 px-8 rounded-full tracking-wide text-md font-semibold cursor-pointer transition ease-in duration-500 text-white">
          <a href="https://wa.me/message/YQ54VQBLS6SXP1">
            Quero Contratar
          </a>
        </button>
      </div>
    </section>
    <section class="pt-20 z-50 bg-white" id="o_que_é">
      <div class="mx-auto px-6 max-w-6xl">
        <div>
          <h4 class="text-4xl font-sans text-fuchsia-900 font-bold">
            O que é Empréstimo com Garantia <br>
            do Saque Aniversário do FGTS?
          </h4>
          <p class="font-sans text-lg text-fuchsia-900 pt-7">
            O Empréstimo com Garantia do Saque Aniversário do FGTS é uma modalidade de crédito que possibilita a você, que optou pelo saque aniversário, antecipar parte do saldo disponível na(s) conta(s) vinculada(s) do FGTS, anualmente, no mês de seu aniversário.
          </p>
          <p class="font-sans text-lg text-fuchsia-900 pt-4">
            Aqui na VL Consultorias, você consegue antecipar até 10 parcelas anuais do seu Saque Aniversário com taxa de juros a partir de 1,99%* a.m.
          </p>
        </div>
        <div class="mx-auto max-w-4xl py-6 md:flex justify-center items-center">
          <div class="grid justify-center">
            <h4 class="text-fuchsia-900 text-2xl md:text-3xl font-sans font-bold">
              Taxa de juros <br> baixas
            </h4>
            <h6 class="text-fuchsia-800 mt-3 text-lg font-sans">
              Em comparação a outras <br> ofertas de crédito!
            </h6>
            <button class="mt-5 bg-color2 p-3 px-8 rounded-full tracking-wide text-md font-semibold cursor-pointer transition ease-in duration-500 text-white">
              <a href="https://wa.me/message/YQ54VQBLS6SXP1">
                Quero Contratar
              </a>
            </button>
          </div>
          <div class="hidden md:block  w-2/3">
            <div class="shadow-lg w-full rounded-lg overflow-hidden mx-14">
              <canvas class="p-10" id="chartBar"></canvas>
            </div>

            <!-- Required chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Chart bar -->
            <script>
              const labelsBarChart = [
                "FGTS (1,6%)",
                "Emprestimo Pessoal (10,23%)",
                "Cheque Pessoal (15,12%)"
              ];
              const dataBarChart = {
                labels: labelsBarChart,
                datasets: [{
                  label: "Juros",
                  backgroundColor: "#A3768B",
                  data: [1.6, 10.23, 15.12],
                }, ],
              };

              const configBarChart = {
                type: "bar",
                data: dataBarChart,
                options: {},
              };

              var chartBar = new Chart(
                document.getElementById("chartBar"),
                configBarChart
              );
            </script>
          </div>
        </div>
      </div>

      <!-- VANTAGENS -->
      <section class="pt-10 bg-color2 " id="vantagens">
        <div class="max-w-6xl px-4 pb-8 mx-auto">
          <p class="uppercase text-4xl text-white font-bold mb-10">VANTAGENS</p>
          <div class="flex flex-nowrap  mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
              <div class="shadow-inner bg-white shadow-md rounded-xl border border-gray-300">
                <p class="text-fuchsia-900 font-bold text-lg text-center m-3">
                  Taxa de juros
                  <br>
                  a partir
                  <br>
                  de 1,69% a.m.*
                </p>
                <p class="ml-2 mr-2 text-center text-fuchsia-900">Antecipa até 5 parcelas do seu saque aniversário com a taxa de juros a partir de 1,69% a.m.</p>
              </div>

              <div class="shadow-inner bg-white shadow-md rounded-xl border border-gray-300">
                <p class="text-fuchsia-900 font-bold text-lg text-center m-3">
                  Não compromete
                  sua renda mensal
                </p>
                <p class="ml-2 mr-2 text-center text-fuchsia-900">O pagamento das parcelas do empréstimo é realizado mediante o débito direto na(s) conta(s) vinculada(s) do FGTS, anualmente, no mês do seu aniversário.</p>
              </div>

              <div class="shadow-inner bg-white shadow-md rounded-xl border border-gray-300">
                <p class="text-fuchsia-900 font-bold text-lg text-center m-3">
                  Dinheiro rápido
                  mesmo para
                  negativados
                </p>
                <p class="ml-2 mr-2 text-center text-fuchsia-900">Aqui na Safra Financeira os clientes negativados podem contratar o Empréstimo com Garantia do Saque Aniversário FGTS.</p>
              </div>

              <div class="shadow-inner bg-white shadow-md rounded-xl border border-gray-300">
                <p class="text-fuchsia-900 font-bold text-lg text-center m-3">
                  Disponível também para quem não tem conta no Safra
                </p>
                <p class="ml-2 mr-2 text-center text-fuchsia-900">Não é necessário ter conta no Safra para contratar o Empréstimo com Garantia do Saque Aniversário FGTS.</p>
              </div>
            </div>
          </div>
        </div>
  </div>
  </div>
  </section>

  <!-- - FAQ DAS DUVIDAS FREQUENTES -->

  <section class="bg-white mt-5 text-fuchsia-900" id="dúvidas_frequentes">
    <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 text-fuchsia-900">
      <p class="mb-6 text-3xl font-extrabold tracking-tight text-center text-fuchsia-900 lg:mb-8 lg:text-3xl">
        Dúvidas Frequentes</p>
      <div class="max-w-screen-md mx-auto">
        <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-fuchsia-900" data-inactive-classes="text-fuchsia-900">
          <h3 id="accordion-flush-heading-1">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
              <span>
                O que é o Saque-Aniversário do FGTS?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
            <div class="py-5 border-b border-gray-200">
              Com a publicação da Lei 13.932 de 2019, o Governo Federal alterou as regras relativas ao saque do FGTS, incluindo a sistemática do saque aniversário como nova opção oferecida ao trabalhador, em alternativa à sistemática de saque por rescisão do contrato de trabalho, que permitirá a retirada de parte do saldo da conta vinculada do FGTS, anualmente, no mês do seu aniversário.
            </div>
          </div>

          <h3 id="accordion-flush-heading-2">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
              <span>
                Quais as vantagens desse empréstimo?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
            <div class="py-5 border-b border-gray-200">
              O Empréstimo com Garantia do Saque Aniversário do FGTS é uma modalidade de crédito que possibilita à você, que optou pelo saque aniversário, antecipar o valor das parcelas que, de outra forma, seriam sacadas anualmente, no mês do seu aniversário.
            </div>
          </div>

          <h3 id="accordion-flush-heading-3">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
              <span>
                Quem pode contratar o Empréstimo com Garantia do Saque-Aniversário FGTS?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
            <div class="py-5 border-b border-gray-200">
              Todos os trabalhadores que possuam saldo disponível em sua(s) conta(s) vinculada(s) do FGTS (contas ativas e inativas), que tenham optado pela modalidade do saque aniversário e autorizado os bancos parceiros a consultarem o saldo disponível.
            </div>
          </div>

          <h3 id="accordion-flush-heading-4">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
              <span>
                Qual o valor do FGTS que será bloqueado na contratação da operação?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
            <div class="py-5 border-b border-gray-200">
              Será bloqueado o valor correspondente ao percentual do(s) saldo(s) da(s) conta(s) vinculada(s) do FGTS, em valor suficiente para, aplicada a alíquota correspondente ao saldo da conta disponível na data da operação e acrescida à parcela adicional, estabelecidas no Anexo à Lei nº 8.036, de 1990, ou em suas alterações posteriores, seja possível a realização do(s) saque(s) aniversário em valor equivalente ao dado em garantia na contratação do empréstimo.
            </div>
          </div>

          <h3 id="accordion-flush-heading-6">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-6" aria-expanded="false" aria-controls="accordion-flush-body-6">
              <span>
                Como eu sei qual valor está disponível para antecipar?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-6" class="hidden" aria-labelledby="accordion-flush-heading-6">
            <div class="py-5 border-b border-gray-200">
              Ao entrar no aplicativo do FGTS, você consegue visualizar o valor disponível para saque em cada ano, para então realizar a antecipação do seu saque aniversário.
            </div>
          </div>

          <h3 id="accordion-flush-heading-7">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-7" aria-expanded="false" aria-controls="accordion-flush-body-7">
              <span>
                Posso alterar a modalidade de saque aniversário para saque rescisão depois da contratação do produto?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-7" class="hidden" aria-labelledby="accordion-flush-heading-7">
            <div class="py-5 border-b border-gray-200">
              Caso tenha sido contratado o Empréstimo com Garantia do Saque Aniversário do FGTS, a alteração da modalidade só pode ocorrer após a liquidação de todas as parcelas.
              <br><br>
              <strong>Importante!:</strong> quem migrar para o saque aniversário e decidir voltar para a sistemática do saque-rescisão poderá solicitar a reversão a qualquer momento. Mas a alteração somente surtirá efeito no 1º dia do 25º mês da solicitação e desde que o Empréstimo com Garantia de Saque Aniversário FGTS esteja quitado.
            </div>
          </div>

          <h3 id="accordion-flush-heading-8">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-8" aria-expanded="false" aria-controls="accordion-flush-body-8">
              <span>
                Existe algum período no qual o cliente não consegue efetivar a contratação?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-8" class="hidden" aria-labelledby="accordion-flush-heading-8">
            <div class="py-5 border-b border-gray-200">
              Algumas movimentações nas contas vinculadas do FGTS podem impedir a conclusão da contratação do seu empréstimo no dia ou por um período determinado. Isso acontece quando existir algum comando de movimentação sendo efetuado na conta do FGTS, seja por algum crédito provisionado pelo empregador, fluxo de saque de outra modalidade em processamento ou qualquer ajuste de saldo pelo FGTS. Quando alguma dessas movimentações ocorrerem, o cliente precisará aguardar a finalização para efetivar a contratação, tendo em vista que o sistema só permite o correto bloqueio da garantia quando o saldo estiver totalmente acessível para efetivação.
            </div>
          </div>

          <h3 id="accordion-flush-heading-10">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-10" aria-expanded="false" aria-controls="accordion-flush-body-10">
              <span>
                Se eu contratar o Empréstimo com Garantia do Saque Aniversário FGTS, terei a possibilidade de contratar outras linhas de crédito?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-10" class="hidden" aria-labelledby="accordion-flush-heading-10">
            <div class="py-5 border-b border-gray-200">
              Sim, o Empréstimo com Garantia do Saque Aniversário FGTS não compromete outras linhas de crédito, como por exemplo, o Empréstimo Consignado.
            </div>
          </div>

          <h3 id="accordion-flush-heading-11">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-11" aria-expanded="false" aria-controls="accordion-flush-body-11">
              <span>
                Como serão pagas as parcelas do Empréstimo com Garantia do Saque Aniversário FGTS?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-11" class="hidden" aria-labelledby="accordion-flush-heading-11">
            <div class="py-5 border-b border-gray-200">
              A amortização do empréstimo ocorrerá através de parcelas anuais utilizando o valor disponível (e bloqueado) pela sistemática do Saque Aniversário, não comprometendo a renda mensal.
            </div>
          </div>

          <h3 id="accordion-flush-heading-12">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-12" aria-expanded="false" aria-controls="accordion-flush-body-12">
              <span>
                Como posso acompanhar minha proposta?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-12" class="hidden" aria-labelledby="accordion-flush-heading-12">
            <div class="py-5 border-b border-gray-200">
              O acompanhamento da proposta pode ser feito através da nossa Central de Atendimento ou via WhatsApp.
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  </div>
  <div>
    <button class="w-80 flex justify-center mx-auto bg-color2 p-3 rounded-lg tracking-wide font-semibold cursor-pointer transition ease-in duration-500 text-white">
      <a href="https://wa.me/message/YQ54VQBLS6SXP1">
        Quero Contratar
      </a>
    </button>
  </div>
  <div class="pt-16 max-w-screen-xl px-4 mx-auto lg:px-6">
    <p class="text-xs text-fuchsia-900 text-justify font-normal">
      * Aprovação sujeita a consuta e análise cadastral, de crédito e demais condições do produto vigentes no momento da contratação. Exija a sua planilha CET (Custo Efetivo Total) previamente a contratação. A planilha tem a finalidade de informar ao consumidor a taxa efetiva total do seu financiamento considerando todos os encargos e despesas incidentes na operação (taxa de juros ao mês e ao ano, tarifas, seguro prestamista, registro, etc). Empréstimo concedido pelo Banco J. Safra S.A.. Parcelas do empréstimo debitadas anualmente direto na(s) conta(s) vinculada(s) do FGTS. Para contratar, é necessário optar pelo saque aniversário no App ou site oficial do FGTS e autorizar o Banco J Safra a consultar o valor disponível.
    </p>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script>
    $('a[href^="#"]').on('click', function(e) {
      e.preventDefault();
      var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

      $('html, body').animate({
        scrollTop: targetOffset - 100
      }, 500);
    });
  </script>
  <style>
    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
      background-color: #5F5F5F;
    }

    ::-webkit-scrollbar {
      width: 8px;
      background-color: #5F5F5F;
    }

    ::-webkit-scrollbar-thumb {
      border-radius: 10px;
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
      background-color: #A3768B;
    }
  </style>
  <?php include "components/footer.php"; ?>
</body>

</html>