<?php

function getAllProducts()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM products order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAbout()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM about");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBanners()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM banners order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getLpBanner()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM banners where type = 'lp' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}