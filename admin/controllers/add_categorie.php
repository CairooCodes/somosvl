<?php
require "../../db_config.php";
$name = $_POST['name'];
$categorie_id = $_POST['categorie_id'];
$sql = "INSERT INTO categories (name) VALUES (?)";
$stmt = $DB_con->prepare($sql);
$stmt->execute([$name]);
header('Location: ../categorias.php');