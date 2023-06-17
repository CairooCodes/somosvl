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
</head>


<body>
  <?php include "components/navbar.php"; ?>
  <?php
  foreach ($lpBanner as $lpBanner) {
  ?>
    <div id="minha-div" class="div-com-imagem">
      <div class="mx-auto max-w-7xl p-12 pt-2 flex flex-col justify-center gap-8 h-full">
        <h1 style="color: white !important;" class="text-white text-2xl md:text-5xl font-sans font-bold">
          ANTECIPE ATÉ <span class="text-color2"><br> 5 PARCELAS</span> DO
          SEU<br>
          SAQUE<br>
          ANIVERSÁRIO FGTS
        </h1>
        <ul class="list-disc">
          <li class="text-color2 text-xl md:text-2xl font-sans font-semibold">
            <span class="text-white">Taxa de juros a partir de 1,69% a.m.*</span>
          </li>
          <li class="text-color2 text-xl md:text-2xl font-sans font-semibold">
            <span class="text-white">Dinheiro rápido mesmo para negativados</span>
          </li>
          <li class="text-color2 text-xl md:text-2xl font-sans font-semibold">
            <span class="text-white">É simples e não precisa ter conta no VL</span>
          </li>
        </ul>
        <button class="md:w-80 bg-color2 p-3 rounded-full text-lg tracking-wide font-semibold cursor-pointer transition ease-in duration-500 text-white">
          Clique aqui para Contratar
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
    <section style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;" class="w-full bg-gradient-to-r from-sky-900 to-fuchsia-900">
      <div class="flex h-20 w-full items-center justify-around max-w-6xl mx-auto">
        <a class="text-white text-md font-semibold">O QUE É</a>
        <a class="text-white text-md font-semibold">VANTAGENS</a>
        <a class="text-white text-md font-semibold">COMO ADERIR</a>
        <a class="text-white text-md font-semibold">DÚVIDAS FREQUENTES</a>
        <button class="bg-color2 p-3 px-8 rounded-full tracking-wide text-md font-semibold cursor-pointer transition ease-in duration-500 text-white">
          Quero Contratar
        </button>
      </div>
    </section>
    <section class="pt-20 z-50 bg-white">
      <div class="mx-auto max-w-6xl">
        <div>
          <h4 class="text-4xl font-sans text-fuchsia-900 font-bold">
            O que é Empréstimo com Garantia <br>
            do Saque Aniversário do FGTS?
          </h4>
          <p class="font-sans text-lg text-fuchsia-900 pt-7">
            O Empréstimo com Garantia do Saque Aniversário do FGTS é uma modalidade de crédito que possibilita a você, que optou pelo saque aniversário, antecipar parte do saldo disponível na(s) conta(s) vinculada(s) do FGTS, anualmente, no mês de seu aniversário.
          </p>
          <p class="font-sans text-lg text-fuchsia-900 pt-4">
            Aqui na Somos VL, você consegue antecipar até 5 parcelas anuais do seu Saque Aniversário com taxa de juros a partir de 1,69%* a.m.
          </p>
        </div>
        <div class="mx-auto max-w-4xl py-6 flex justify-center items-center">
          <div>
            <h4 class="text-fuchsia-900 text-2xl md:text-3xl font-sans font-bold">
              Taxa de juros <br> baixas
            </h4>
            <h6 class="text-fuchsia-800 mt-3 text-lg font-sans">
              Em comparação a outras <br> ofertas de crédito!
            </h6>
            <button class="mt-5 bg-color2 p-3 px-8 rounded-full tracking-wide text-md font-semibold cursor-pointer transition ease-in duration-500 text-white">
              Quero Contratar
            </button>
          </div>
          <div class="w-2/3">
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
      <section class="pt-10 bg-color2">
        <div class="max-w-6xl px-4 pb-8 mx-auto lg:pb-16">
          <p class="uppercase text-4xl text-white font-bold mb-10">VANTAGENS</p>
          <div class="flex flex-nowrap ml-32">
            <div class="grid grid-cols-5 gap-5">
              <div class="shadow-inner bg-white shadow-md rounded-xl border border-gray-300">
                <p class="text-purple-800 font-bold text-lg text-center m-3">
                  Taxa de juros
                  <br>
                  a partir
                  <br>
                  de 1,69% a.m.*
                </p>
                <h1 class="ml-2 mr-2 text-center">Antecipa até 5 parcelas do seu saque aniversário com a taxa de juros a partir de 1,69% a.m.</h1>
              </div>

              <div class="shadow-inner bg-white shadow-md rounded-xl border border-gray-300">
                <p class="text-purple-800 font-bold text-lg text-center m-3">
                  Não compromete
                  sua renda mensal
                </p>
                <h1 class="ml-2 mr-2 text-center">O pagamento das parcelas do empréstimo é realizado mediante o débito direto na(s) conta(s) vinculada(s) do FGTS, anualmente, no mês do seu aniversário.</h1>
              </div>

              <div class="shadow-inner bg-white shadow-md rounded-xl border border-gray-300">
                <p class="text-purple-800 font-bold text-lg text-center m-3">
                  Dinheiro rápido
                  mesmo para
                  negativados
                </p>
                <h1 class="ml-2 mr-2 text-center">Aqui na Safra Financeira os clientes negativados podem contratar o Empréstimo com Garantia do Saque Aniversário FGTS.</h1>
              </div>

              <div class="shadow-inner bg-white shadow-md rounded-xl border border-gray-300">
                <p class="text-purple-800 font-bold text-lg text-center m-3">
                  Disponível também para quem não tem conta no Safra
                </p>
                <h1 class="ml-2 mr-2 text-center">Não é necessário ter conta no Safra para contratar o Empréstimo com Garantia do Saque Aniversário FGTS.</h1>
              </div>
            </div>
          </div>
        </div>
  </div>
  </div>
  </section>

  <!-- FORMULARIO DE COMO ADERIR -->
  </section>
  <div class="lg:w-2/3 pt-20 px-4 pb-8 mx-auto lg:pb-16">
    <div>
      <p class="text-fuchsia-900 mt-5 font-bold lg:text-4xl text-xl text-center mb-3">
        Deseja aderir o empréstimo com garantia do Saque Aniversário FGTS?
      </p>
    </div>
    <div class="swiper-slide shadow-inner bg-color2 shadow-md rounded-xl border border-gray-300">
      <div class="max-w-screen-xl px-4 mx-auto mb-3 text-center text-white">
        <p class="text-white mt-5 lg:text-2xl text-xl font-semibold">
          Fale agora com um dos nossos atendentes e veja como é fácil aderir a modalidade.
        </p>
      </div>
      <form action="./admin/controllers/add_lead.php" method="post">
        <div class="lg:flex justify-center m-5">
          <div>
            <input class="lg:w-72 w-full mr-5 mt-2 bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-fuchsia-900 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out" type="text" name="name" id="name" placeholder="Nome">
          </div>
          <div>
            <input class="lg:w-72 w-full  mr-5 mt-2 bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-fuchsia-900 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out" type="email" name="email" id="email" placeholder="WhatsApp">
          </div>
          <input type="hidden" value="2" name="type">
        </div>
      </form>
    </div>
    <div>
      <button type="submit" class="w-80 flex justify-center mt-5 ml-72 bg-color2 p-3 rounded-lg tracking-wide font-semibold cursor-pointer transition ease-in duration-500 text-white">
        Falar com Atendente
      </button>
    </div>
  </div>
  </div>

  <!-- - FAQ DAS DUVIDAS FREQUENTES -->

  <section class="bg-white mt-5 text-fuchsia-900">
    <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 text-fuchsia-900">
      <p class="mb-6 text-3xl font-extrabold tracking-tight text-center text-fuchsia-900 lg:mb-8 lg:text-3xl">
        Dúvidas Frequentes ?</p>
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
              Todos os trabalhadores que possuam saldo disponível em sua(s) conta(s) vinculada(s) do FGTS (contas ativas e inativas), que tenham optado pela modalidade do saque aniversário e autorizado o Banco J. Safra a consultar o saldo disponível.
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

          <h3 id="accordion-flush-heading-5">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
              <span>
                Quantas parcelas do saque aniversário posso antecipar?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
            <div class="py-5 border-b border-gray-200">
              Será possível a antecipação de até 5 parcelas anuais do saque aniversário do FGTS.
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

          <h3 id="accordion-flush-heading-9">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-9" aria-expanded="false" aria-controls="accordion-flush-body-9">
              <span>
                É possível liquidar antecipadamente o empréstimo?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-9" class="hidden" aria-labelledby="accordion-flush-heading-9">
            <div class="py-5 border-b border-gray-200">
              Sim, é possível pedir a liquidação antecipada do contrato pelo canal do WhatsApp 11 2650-9999 ou pela Central de Atendimento no telefone 0300 151 1234. Lembre-se que, se antecipado, o contrato deverá ser liquidado com recursos próprios, não sendo possível utilizar os recursos da conta do FGTS. Após a quitação do empréstimo, o saldo do FGTS será liberado.
              <br><br>
              <strong>Importante!:</strong> Caso a liquidação antecipada seja realizada durante o período de indisponibilidade do sistema do FGTS (20 dias corridos que antecede o primeiro dia útil do mês de aniversário do cliente), o saldo só poderá ser desbloqueado ao final do período determinado. Se houver algum recebimento indevido de parcela de Saque Aniversário para o Banco J. Safra, os valores serão devolvidos automaticamente para os clientes.
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

          <h3 id="accordion-flush-heading-13">
            <button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-fuchsia-900  border-b border-gray-200" data-accordion-target="#accordion-flush-body-13" aria-expanded="false" aria-controls="accordion-flush-body-13">
              <span>
                Quais serviços estou autorizando o Safra a realizar?
              </span>
              <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </h3>
          <div id="accordion-flush-body-13" class="hidden" aria-labelledby="accordion-flush-heading-13">
            <div class="py-5 border-b border-gray-200 text-fuchsia-900">
              O trabalhador pode autorizar o Safra a realizar os seguintes serviços:
              <br>
              • Autorização de consulta ao valor do saque-aniversário disponível para alienação/cessão fiduciária
              <br>
              • Autorização para Instituição Financeira consultar e solicitar bloqueio de parte do saldo de sua conta FGTS;
              <br>
              • Acompanhar a evolução da operação de alienação ou cessão fiduciária contratada com a Instituição Financeira
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <div>
    <a href="emprestimo_fgts.php" class="w-80 flex justify-center mx-auto bg-color2 p-3 rounded-lg tracking-wide font-semibold cursor-pointer transition ease-in duration-500 text-white">
      Quero Contratar
    </a>
  </div>
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