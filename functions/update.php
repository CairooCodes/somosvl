<?php
function updateProduct($id, $name, $img, $info)
{
  global $pdo;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $pdo->prepare("UPDATE products SET name = :name, img=:img, info=:info WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':info', $info);
    $stmt->bindValue(':img', $img_lob, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE products SET name = :name, info=:info WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':info', $info);
    $stmt->bindParam(':id', $id);

  }
  $stmt->execute();
}

function updateBanner($id, $name, $img)
{
  global $pdo;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $pdo->prepare("UPDATE banners SET name = :name, img=:img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img_lob, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE banners SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}
