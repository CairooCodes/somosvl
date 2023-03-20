<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "config/functions.php";
$URI = new URI();

$url = explode("/", $_SERVER['REQUEST_URI']);
$get_url = $url[3];
$get_url_2 = "";

$stmt = $DB_con->prepare("SELECT * FROM products");
$stmt->execute();
if ($stmt->rowCount() > 0) {
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
		$string1 = remove_symbols_accents(utf8_decode($get_url));
		$string2 = remove_symbols_accents(utf8_decode($name));
		if ($string1 == $string2) {
			$get_url_2 = $name;
		}
	}
}

$stmt = $DB_con->prepare("SELECT * FROM products where name='$get_url_2'");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	extract($row);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title><?php echo $name ?> Somos VL - Consultoria e Negócios</title>
	<?php include "heads.php"; ?>
</head>

<body>
	<?php include "components/navbar.php"; ?>
	<div class="mx-auto max-w-6xl pt-2">
		<img class="rounded-md" src="<?php echo $URI->base("/admin/uploads/products/$img"); ?>">
		<div class="pt-2">
			<?php echo $info ?>
			<!-- FAQ SAQUE ANIVERSÁRIO FGTS -->
			<?php
			if ($name == 'Saque-aniversário FGTS') {
			?>
				<h3 id="accordion-flush-heading-11">
					<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-11" aria-expanded="false" aria-controls="accordion-flush-body-11">
						<span>
							Quem pode adiantar o saque-aniversário?
						</span>
						<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
				</h3>
			<?php } ?>

			<?php
			if ($name == 'Saque-aniversário FGTS') {
			?>
				<h3 id="accordion-flush-heading-11">
					<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-11" aria-expanded="false" aria-controls="accordion-flush-body-11">
						<span>
							Quais são as vantagens da Antecipação Saque-Aniversário FGTS?
						</span>
						<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
				</h3>
				<div id="accordion-flush-body-12" class="hidden" aria-labelledby="accordion-flush-heading-12">
					<div class="py-5 border-b border-gray-200">
						As vantagens da Antecipação Saque-Aniversário FGTS incluem a possibilidade de obter recursos adicionais para investimentos ou despesas pessoais, sem precisar esperar o período de saque-aniversário. Além disso, o empréstimo com garantia no FGTS é oferecido com juros mais baixos do que os de outros tipos de empréstimo pessoal, sem comprometer nada do seu orçamento.
					</div>
				</div>
			<?php } ?>

			<?php
			if ($name == 'Saque-aniversário FGTS') {
			?>
				<h3 id="accordion-flush-heading-11">
					<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-11" aria-expanded="false" aria-controls="accordion-flush-body-11">
						<span>
							Em quanto tempo o dinheiro cai na conta?
						</span>
						<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
				</h3>
				<div id="accordion-flush-body-14" class="hidden" aria-labelledby="accordion-flush-heading-14">
					<div class="py-5 border-b border-gray-200">
						Com ate 1 dia útil, porém, na maioria dos casos cai com 2 horas
					</div>
				</div>
			<?php } ?>

			<?php
			if ($name == 'Saque-aniversário FGTS') {
			?>
				<h3 id="accordion-flush-heading-11">
					<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-11" aria-expanded="false" aria-controls="accordion-flush-body-11">
						<span>
							Em caso de falecimento, doenças graves ou aposentadoria, o cliente pode resgatar o saldo total do FGTS?
						</span>
						<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
				</h3>
				<div id="accordion-flush-body-15" class="hidden" aria-labelledby="accordion-flush-heading-15">
					<div class="py-5 border-b border-gray-200">
						Se após a contratação do empréstimo com garantia no FGTS você mudar de ideia, pode solicitar o cancelamento dentro do prazo de 7 dias corridos. Para isso, basta entrar em contato com a nossa Central de Atendimento, por meio de um dos nossos canais de comunicação. Infelizmente, não é possível solicitar o cancelamento após esse prazo de 7 dias ter sido ultrapassado.

					</div>
				</div>
			<?php } ?>

			<?php
			if ($name == 'Saque-aniversário FGTS') {
			?>
				<h3 id="accordion-flush-heading-11">
					<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-11" aria-expanded="false" aria-controls="accordion-flush-body-11">
						<span>
							É possível liquidar o contrato, se eu quiser desbloquear o meu saldo do FGTS?
						</span>
						<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
				</h3>
				<div id="accordion-flush-body-16" class="hidden" aria-labelledby="accordion-flush-heading-16">
					<div class="py-5 border-b border-gray-200">
						Sim, é possível liquidar o contrato e desbloquear o saldo do FGTS a qualquer momento, desde que sejam pagos as parcelas adiantadas direto com o banco contratante
					</div>
				</div>
			<?php } ?>

			<!-- FAQ EMPRESTIMO CONSIGINADO -->
			<?php
			if ($name == 'Empréstimo Consignado') {
			?>
				<h3 id="accordion-flush-heading-5">
					<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
						<span>Qual é o valor máximo da parcela do Empréstimo Consignado?
						</span>
						<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
				</h3>
				<div id="accordion-flush-body-6" class="hidden" aria-labelledby="accordion-flush-heading-6">
					<div class="py-5 border-b border-gray-200">
						O valor máximo da parcela do Empréstimo Consignado depende da renda mensal do solicitante e da instituição financeira que oferece o empréstimo.
					</div>
				</div>
			<?php } ?>

			<?php
			if ($name == 'Empréstimo Consignado') {
			?>
				<h3 id="accordion-flush-heading-6">
					<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-6" aria-expanded="false" aria-controls="accordion-flush-body-5">
						<span>Quem pode contratar o empréstimo consignado?

						</span>
						<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
				</h3>
				<div id="accordion-flush-body-6" class="hidden" aria-labelledby="accordion-flush-heading-6">
					<div class="py-5 border-b border-gray-200">
						Aposentados, pensionistas do INSS e servidores públicos podem contratar o Empréstimo Consignado. É necessário apresentar os documentos pessoais e comprovante de renda para a análise de crédito.

					</div>
				</div>
			<?php } ?>

			<?php
			if ($name == 'Empréstimo Consignado') {
			?>
				<?php
				if ($name == 'Empréstimo Consignado') {
				?>
					<h3 id="accordion-flush-heading-7">
						<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-7" aria-expanded="false" aria-controls="accordion-flush-body-7">
							<span>
								Qual a taxa de juros do Empréstimo Consignado?

							</span>
							<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h3>
					<div id="accordion-flush-body-7" class="hidden" aria-labelledby="accordion-flush-heading-7">
						<div class="py-5 border-b border-gray-200">
							As taxas de juros do Empréstimo Consignado são fixas e variam de acordo com a instituição financeira que oferece o empréstimo.

						</div>
					<?php } ?>
					</div>
				<?php } ?>

				<?php
				if ($name == 'Empréstimo Consignado') {
				?>
					<h3 id="accordion-flush-heading-8">
						<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-8" aria-expanded="false" aria-controls="accordion-flush-body-8">
							<span>O que é a portabilidade de Crédito?

							</span>
							<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h3>
					<div id="accordion-flush-body-8" class="hidden" aria-labelledby="accordion-flush-heading-8">
						<div class="py-5 border-b border-gray-200">
							A portabilidade de crédito é a possibilidade de transferir o empréstimo de uma instituição financeira para outra, buscando melhores condições de pagamento e taxas de juros.
						</div>
					</div>
				<?php } ?>

				<?php
				if ($name == 'Empréstimo Consignado') {
				?>
					<h3 id="accordion-flush-heading-9">
						<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-9" aria-expanded="false" aria-controls="accordion-flush-body-9">
							<span>Em quanto tempo recebo o valor em minha conta?
							</span>
							<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h3>
					<div id="accordion-flush-body-9" class="hidden" aria-labelledby="accordion-flush-heading-9">
						<div class="py-5 border-b border-gray-200">
							O tempo de recebimento do valor em sua conta depende da instituição financeira e do processo de análise de crédito. Em geral, o dinheiro é liberado em até 48 horas após a aprovação do empréstimo.
						</div>
					</div>
				<?php } ?>

				<?php
				if ($name == 'Empréstimo Consignado') {
				?>
					<h3 id="accordion-flush-heading-10">
						<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-10" aria-expanded="false" aria-controls="accordion-flush-body-10">
							<span>Recebi uma solicitação para devolução do valor creditado ou pagamento de um boleto. O que devo fazer?
							</span>
							<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h3>
					<div id="accordion-flush-body-10" class="hidden" aria-labelledby="accordion-flush-heading-10">
						<div class="py-5 border-b border-gray-200">
							Em hipótese alguma o banco entrará em contato solicitando a devolução do valor liberado ou o pagamento de boleto em nome de terceiros. Caso receba este tipo de solicitação, não realize a devolução ou o pagamento do boleto e entre em contato conosco para confirmar se as informações são verdadeiras através de nossa Central de Atendimento.
						</div>
					</div>
				<?php } ?>
				<!-- FAQ CARTÃO CONSIGNADO -->
				<?php
				if ($name == 'Cartão consignado') {
				?>
					<h3 id="accordion-flush-heading-1">
						<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800 border-b border-gray-200" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
							<span>Quais as taxas do cartão de crédito consignado?
							</span>
							<svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h3>
					<div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
						<div class="py-5 border-b border-gray-200">
							<p class="mb-2 text-gray-500">As taxas do cartão consignado variam de acordo com a instituição financeira que oferece o serviço, mas geralmente são menores do que as cobradas nos cartões de crédito convencionais.
							</p>
						</div>
					</div>
				<?php } ?>

				<?php
				if ($name == 'Cartão consignado') {
				?>
					<h3 id="accordion-flush-heading-2">
						<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
							<span> Quem pode contratar o cartão de crédito consignado?
							</span>
							<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h3>
					<div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
						<div class="py-5 border-b border-gray-200">
							Aposentados e pensionistas do INSS e servidores públicos podem contratar o cartão de crédito consignado. É necessário apresentar os documentos pessoais e comprovante de renda para a análise de crédito.

						</div>
					</div>
				<?php } ?>

				<?php
				if ($name == 'Cartão consignado') {
				?>
					<h3 id="accordion-flush-heading-3">
						<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
							<span>Onde posso usar o cartão consignado?
							</span>
							<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h3>
					<div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
						<div class="py-5 border-b border-gray-200">
							O cartão consignado pode ser usado em estabelecimentos conveniados ou em estabelecimentos que aceitem cartões de crédito em geral.

						</div>
					</div>
				<?php } ?>
				<?php
				if ($name == 'Cartão consignado') {
				?>
					<h3 id="accordion-flush-heading-4">
						<button type="button" class="flex items-center justify-between w-full py-5 font-bold text-left text-gray-800  border-b border-gray-200" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
							<span>Vocês cobram algum valor para a liberação do cartão?
							</span>
							<svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</h3>
					<div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
						<div class="py-5 border-b border-gray-200">
							Não há cobrança para liberação do cartão consignado.
						</div>
					</div>
				<?php } ?>
		</div>
		<?php include "components/footer.php"; ?>

</body>

</html>