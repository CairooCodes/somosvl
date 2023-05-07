<?php
require "../db_config.php";
require "../functions/get.php";
$categories = getCategories();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Miracel Digital - Adicionar Produto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />
</head>

<body>
  <h1>Adicionar Produto</h1>
  <form action="./controllers/add_product.php" method="post" enctype="multipart/form-data">
    <label for="nome">Nome:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="Preço">Preço:</label>
    <br>
    <label for="categorie">Categoria do Produto:</label>
    <select name="categorie_id">
      <?php foreach ($categories as $categorie) { ?>
        <option value="<?php echo $categorie['id']; ?>"><?php echo $categorie['name']; ?></option>
      <?php } ?>
    </select>
    <a href="categorias.php">categorias</a>
    <input type="text" name="price" id="price" required><br>
    <input type="file" id="img" name="img">
    <input type="submit" value="Cadastrar">
  </form>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
  <script src="../assets/js/app.js"></script>
</body>

</html>