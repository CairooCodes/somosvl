<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "config/functions.php";
$URI = new URI();

$url = explode("/", $_SERVER['REQUEST_URI']);
$get_url = $url[4];
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
	<?php include "heads.php"; ?>
</head>

<body>
	<?php include "components/navbar.php"; ?>
	<div class="mx-auto max-w-6xl pt-2">
		<img class="rounded-md" src="<?php echo $URI->base("/admin/uploads/products/$img"); ?>">
		<div class="pt-2">
			<?php echo $info ?>
		</div>
	</div>
	<?php include "components/footer.php"; ?>

</body>

</html>