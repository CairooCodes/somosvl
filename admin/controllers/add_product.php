<?php
require "../../db_config.php";

$name = $_POST['name'];
$categorie_id = $_POST['categorie_id'];
$link = $_POST['link'];
$info = $_POST['info'];

$dom = new DOMDocument();
$dom->loadHTML($info);


$new_info = $dom->saveHTML();

$sql = "INSERT INTO products (name, link, info) VALUES (?,?,?,?,?)";
$stmt = $DB_con->prepare($sql);
$stmt->execute([$name, $link, $info]);
header('Location: ../dashboard.php');
