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
	<?php include "components/footer.php"; ?>

	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
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