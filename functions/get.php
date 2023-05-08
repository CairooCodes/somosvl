<?php

function getAllProducts()
{
  global $DB_con;
  $stmt = $DB_con->prepare("SELECT * FROM products order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}