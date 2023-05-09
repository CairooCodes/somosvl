<?php
require "../../db_config.php";

$name = $_POST['name'];
$link = $_POST['link'];
$info = $_POST['info'];

$dom = new DOMDocument();
$dom->loadHTML($info);

$img = null;

if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
  $img = file_get_contents($_FILES['img']['tmp_name']);
}

$new_info = $dom->saveHTML();

$sql = "INSERT INTO products (name, link, img, info) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$img_lob = $img . PDO::PARAM_LOB;
$stmt->execute([$name, $link, $img_lob, $info]);
header('Location: ../dashboard.php');
