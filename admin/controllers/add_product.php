<?php
require "../../db_config.php";

$name = $_POST['name'];
$price = $_POST['price'];
$categorie_id = $_POST['categorie_id'];
$stars = $_POST['stars'];
$link = $_POST['link'];
$description = $_POST['description'];

$dom = new DOMDocument();
$dom->loadHTML($description);

$img = null;

if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
  $img = file_get_contents($_FILES['img']['tmp_name']);
}

$new_description = $dom->saveHTML();

$sql = "INSERT INTO products (name, price, img, categorie_id, stars, link,description) VALUES (?,?,?,?,?,?,?)";
$stmt = $DB_con->prepare($sql);
$img_lob = $img . PDO::PARAM_LOB;
$stmt->execute([$name, $price, $img_lob, $categorie_id, $stars, $link, $description]);
header('Location: ../dashboard.php');
