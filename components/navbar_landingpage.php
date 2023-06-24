<?php
$stmt = $pdo->prepare("SELECT * FROM navbars");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  extract($row);
}

?>
<header class="w-full shadow">
  <nav class="border-gray-200 py-2.5 bg-white">
    <div class="flex flex-wrap items-center justify-between max-w-6xl px-4 mx-auto">
      <a href="<?php echo $URI->base("/home"); ?>">
        <img src="<?php echo $URI->base("/assets/img/$logo"); ?>" class="logo" alt="<?php echo $title; ?>" />
      </a>
      <div class="items-center justify-center hidden w-full lg:flex lg:w-auto lg:order-1">
        <div class="nav_icons lg:hidden px-4 flex">
          <?php if ($icon1 != '') { ?>
            <a href="<?php echo $link_icon1 ?>">
              <img src="<?php echo $URI->base("/admin/uploads/icons/$icon1"); ?>" alt="<?php echo $icon1 ?>" />
            </a>
          <?php } ?>
          <?php if ($icon2 != '') { ?>
            <a href="<?php echo $link_icon2 ?>">
              <img src="<?php echo $URI->base("/admin/uploads/icons/$icon2"); ?>" alt="<?php echo $icon2 ?>" />
            </a>
          <?php } ?>
          <?php if ($icon3 != '') { ?>
            <a href="<?php echo $link_icon3 ?>">
              <img src="<?php echo $URI->base("/admin/uploads/icons/$icon3"); ?>" alt="<?php echo $icon3 ?>" />
            </a>
          <?php } ?>
          <?php if ($icon4 != '') { ?>
            <a href="<?php echo $link_icon4 ?>">
              <img src="<?php echo $URI->base("/admin/uploads/icons/$icon4"); ?>" alt="<?php echo $icon4 ?>" />
            </a>
          <?php } ?>
          <?php if ($icon5 != '') { ?>
            <a href="<?php echo $link_icon5 ?>">
              <img src="<?php echo $URI->base("/admin/uploads/icons/$icon5"); ?>" class="" alt="<?php echo $icon5 ?>" />
            </a>
          <?php } ?>
        </div>
      </div>
      <div class="flex items-center lg:order-2">
        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
          <li>
            <a href="<?php echo $URI->base("/home"); ?>" class="block py-2 pl-3 pr-4 text-gray-800 hidden md:block rounded lg:p-0" aria-current="page">HOME</a>
          </li>
          <li>
            <a href="#servicos" class="block py-2 pl-3 pr-4 text-gray-800 hidden md:block rounded lg:p-0" aria-current="page">SERVIÇOS</a>
          </li>
          <li>
            <a href="<?php echo $URI->base("/quem-somos"); ?>" class="block py-2 pl-3 pr-4 text-gray-800 hidden md:block rounded lg:p-0" aria-current="page">QUEM SOMOS</a>
          </li>
          <li>
            <a href="https://wa.me/558008884004" class="block py-2 pl-3 pr-4 text-gray-800 hidden md:block rounded lg:p-0" aria-current="page">CONTATO</a>
          </li>
        </ul>
        <?php if ($btn_name != null) { ?>
          <div class="hidden mt-2 mr-4 sm:inline-block">
            <a href="<?php echo $btn_link; ?>" class="text-color2 bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800"><?php echo $btn_name; ?></a>
          </div>
        <?php } ?>
        <div class="nav_icons px-4 flex space-x-2">
          <?php if ($icon1 != '') {
            if ($icon1_type == 1) { ?>
              <a class="hidden lg:block" href="<?php echo $icon1_link ?>">
                <img src="<?php echo $URI->base("/admin/uploads/icons/$icon1"); ?>" class="" alt="<?php echo $icon1 ?>" />
              </a>
            <?php
            }
            if ($icon1_type == 2) { ?>
              <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg hidden lg:block" href="<?php echo $icon1_link ?>">
                <?php echo $icon1 ?>
              </a>
          <?php
            }
          }
          ?>

          <?php if ($icon2 != '') {
            if ($icon2_type == 1) { ?>
              <a class="hidden lg:block" href="<?php echo $icon2_link ?>">
                <img src="<?php echo $URI->base("/admin/uploads/icons/$icon2"); ?>" class="" alt="<?php echo $icon2 ?>" />
              </a>
            <?php
            }
            if ($icon2_type == 2) { ?>
              <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg hidden lg:block" href="<?php echo $icon2_link ?>">
                <?php echo $icon2 ?>
              </a>
          <?php
            }
          }
          ?>

          <?php if ($icon3 != '') {
            if ($icon3_type == 1) { ?>
              <a class="hidden lg:block" href="<?php echo $icon3_link ?>">
                <img src="<?php echo $URI->base("/admin/uploads/icons/$icon3"); ?>" class="" alt="<?php echo $icon3 ?>" />
              </a>
            <?php
            }
            if ($icon3_type == 2) { ?>
              <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg hidden lg:block" href="<?php echo $icon3_link ?>">
                <?php echo $icon3 ?>
              </a>
          <?php
            }
          }

          ?>
        </div>
        <span id="theme_toggler">
          <a class="text-color2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            </svg>
          </a>
        </span>
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-color2 rounded-lg lg:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
    <div class="items-center justify-center hidden w-full lg:w-auto lg:order-1" id="mobile-menu-2">
      <div class="nav_icons lg:hidden px-4 space-x-2 flex justify-center">
        <?php if ($icon1 != '') {
          if ($icon1_type == 1) { ?>
            <a href="<?php echo $icon1_link ?>">
              <img src="<?php echo $URI->base("/admin/uploads/icons/$icon1"); ?>" class="" alt="<?php echo $icon1 ?>" />
            </a>
          <?php
          }
          if ($icon1_type == 2) { ?>
            <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg" href="<?php echo $icon1_link ?>">
              <?php echo $icon1 ?>
            </a>
        <?php
          }
        }
        ?>

        <?php if ($icon2 != '') {
          if ($icon2_type == 1) { ?>
            <a href="<?php echo $icon2_link ?>">
              <img src="<?php echo $URI->base("/admin/uploads/icons/$icon2"); ?>" class="" alt="<?php echo $icon2 ?>" />
            </a>
          <?php
          }
          if ($icon2_type == 2) { ?>
            <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg" href="<?php echo $icon2_link ?>">
              <?php echo $icon2 ?>
            </a>
        <?php
          }
        }
        ?>

        <?php if ($icon3 != '') {
          if ($icon3_type == 1) { ?>
            <a href="<?php echo $icon3_link ?>">
              <img src="<?php echo $URI->base("/admin/uploads/icons/$icon3"); ?>" class="" alt="<?php echo $icon3 ?>" />
            </a>
          <?php
          }
          if ($icon3_type == 2) { ?>
            <a class="bg-color1 p-1.5 rounded-full w-10 h-10 text-center text-white text-lg" href="<?php echo $icon3_link ?>">
              <?php echo $icon3 ?>
            </a>
        <?php
          }
        }

        ?>
      </div>
      <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
        <li>
          <a href="home" class="block py-2 pl-3 pr-4 text-color2 rounded lg:p-0" aria-current="page">HOME</a>
        </li>
        <li>
          <a href="#servicos" class="block py-2 pl-3 pr-4 text-color2 rounded lg:p-0" aria-current="page">SERVIÇOS</a>
        </li>
        <li>
          <a href="quem-somos" class="block py-2 pl-3 pr-4 text-color2 rounded lg:p-0" aria-current="page">QUEM SOMOS</a>
        </li>
        <li>
          <a href="https://wa.me/558008884004" class="block py-2 pl-3 pr-4 text-color2 rounded lg:p-0" aria-current="page">CONTATO</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

</div>