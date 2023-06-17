<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";
$banners = getBanners();
// $products = getProducts();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Somos VL - Consultoria e Negócios</title>
	<?php include "heads.php"; ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="./assets/css/swiper.css">
</head>


<body>
	<?php include "components/navbar.php"; ?>
	<?php include "components/banners.php"; ?>
	<?php include "components/products.php"; ?>
	<?php include "components/about.php"; ?>
	<div>
		<div class="lg:w-2/3 pt-20 px-4 pb-8 mx-auto lg:pb-16">
			<div class="swiper-slide shadow-inner bg-color2 shadow-md rounded-xl border border-gray-300">
				<div class="max-w-screen-xl px-4 mx-auto mb-3 text-center">
					<h1 class="mt-5 font-semibold lg:text-3xl text-xl">Nós ligamos para você</h1>
					<p>Preencha o formulário abaixo e tenha atendimento especializado</p>
				</div>
				<form action="./admin/controllers/add_lead.php" method="post">
					<div class="lg:flex justify-center m-5">
						<div>
							<input class="lg:w-72 w-full mr-5 mt-2 bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-gray-800 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out" type="text" name="name" id="name" placeholder="Nome">
						</div>
						<div>
							<input class="lg:w-72 w-full  mr-5 mt-2 bg-gray-50 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus-ring-2 focus:ring-blue-500 focus:ring-opacity-20 rounded-md px-3 py-3 text-sm text-gray-800 placeholder-gray-600 focus:outline-none transition duration-400 ease-in-out" type="whatsapp" name="whatsapp" id="whatsapp" placeholder="WhatsApp">
						</div>
						<input type="hidden" value="1" name="type">
					</div>
					<div>
						<button type="submit" class="w-80 flex justify-center m-5 ml-72 bg-white hover:bg-color1 p-3 rounded-lg tracking-wide font-semibold cursor-pointer transition ease-in duration-500 text-black">
							Enviar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include "components/footer.php"; ?>
	<?php include "components/modal_form_contratar.php"; ?>

	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
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
	<script>
		var swiper = new Swiper(".swiper_banners", {
			loop: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
	<script>
		var swiper = new Swiper(".swiper_products", {
			loop: true,
			breakpoints: {
				300: {
					slidesPerView: 1.3,
					spaceBetween: 20,
				},
				640: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
			},
		});
	</script>
</body>

</html>