<section id="servicos" class="swiper swiper_products products max-w-screen-xl mx-auto md:pt-10 p-4">
  <h1 class="lg:text-4xl text-3xl text-center mb-4"><span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-color2 to-color2">Serviços</span></h1>
  <div class="swiper-wrapper">
    <?php $stmt = $DB_con->prepare("SELECT * FROM products order by id desc");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
    ?>
      <div class="swiper-slide">
        <div class="<?php echo $bg; ?> max-w-lg p-6 mx-auto rounded-md shadow_csc">
          <div class="rounded-2xl">
            <h3 class="mb-4 text-xl font-black py-2"><?php echo $name; ?></h3>
          </div>
          <div>
            <img class="rounded-md md:h-52 h-32" src="./admin/uploads/products/<?php echo $img; ?>">
          </div>
          <div class="product_info">
            <?php echo $info ?>
          </div>
          <div class="flex justify-center">
            <a href="<?php echo $URI->base('/servico/' . slugify($name)); ?>" class="text-white bg-color2 focus:ring-4 rounded-md font-bold text-lg px-5 py-2 text-center">Saiba mais</a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>