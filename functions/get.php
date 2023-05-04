<?php

function getAllProducts()
{
  global $DB_con;
  $stmt = $DB_con->prepare("SELECT * FROM products order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProducts()
{
  global $DB_con;
  $stmt = $DB_con->prepare("SELECT * FROM products where categorie_id = 1 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProducts2()
{
  global $DB_con;
  $stmt = $DB_con->prepare("SELECT * FROM products where categorie_id = 9 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProducts3()
{
  global $DB_con;
  $stmt = $DB_con->prepare("SELECT * FROM products where categorie_id = 2 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategories()
{
  global $DB_con;
  $stmt = $DB_con->prepare("SELECT * FROM categories order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}