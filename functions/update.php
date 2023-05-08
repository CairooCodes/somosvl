<?php
function updateProduct($id, $name, $img, $info)
{
  global $DB_con;
  if ($img) {
    $stmt = $DB_con->prepare("UPDATE products SET name = :name, img=:img, info=:info WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':info', $info);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $DB_con->prepare("UPDATE products SET name = :name, categorie_id = :categorie_id, info=:info WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':info', $info);
    $stmt->bindParam(':id', $id);

  }
  $stmt->execute();
}

function updateCategorie($id, $name)
{
  global $DB_con;
  if ($id) {
    $stmt = $DB_con->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $DB_con->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}