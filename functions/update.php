<?php
function updateProduct($id, $name, $categorie_id, $img, $description)
{
  global $DB_con;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $DB_con->prepare("UPDATE products SET name = :name, categorie_id = :categorie_id, img=:img, description=:description WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':description', $description);
    $stmt->bindValue(':img', $img_lob, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $DB_con->prepare("UPDATE products SET name = :name, categorie_id = :categorie_id, description=:description WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':description', $description);
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