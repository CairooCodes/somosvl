<?php
function updateProduct($id, $name, $img, $info)
{
  global $DB_con;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $DB_con->prepare("UPDATE products SET name = :name, img=:img, info=:info WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':info', $info);
    $stmt->bindValue(':img', $img_lob, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $DB_con->prepare("UPDATE products SET name = :name, info=:info WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':info', $info);
    $stmt->bindParam(':id', $id);

  }
  $stmt->execute();
}
