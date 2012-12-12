<?php require_once("assets/php/_constants.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <? require_once("assets/php/_meta.php"); ?>
    <title>Proizvodi <?= WEBSITE_TITLE ?></title>
    <? require_once("assets/php/_stylesheet.php"); ?>
    <? require_once("assets/php/_javascript.php"); ?>
  </head>
  <body>
    <? require_once("assets/php/_google_analytics.php"); ?>
    <div class="container_12" id="page">
      <div class="grid_4">
        <? require_once("assets/php/_logo.php"); ?>
      </div>
      <div class="grid_8" id="menu">
        <ul>
          <li><a href="index.php">Početna</a></li>
          <li><a href="o_nama.php">O nama</a></li>
          <li class="current_page_item"><a href="proizvodi.php">Proizvodi</a></li>
          <li><a href="reference.php">Reference</a></li>
          <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12" id="wrapper">
        <? require_once("assets/php/_slider.php"); ?>
      </div>
      <div class="clear"></div>
      <div class="grid_8" id="content_box">
        <h2>Proizvodi</h2>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit 
          voluptatem accusantium doloremque laudantium, totam rem 
          aperiam, eaque ipsa quae ab illo inventore veritatis et 
          quasi architecto beatae vitae dicta sunt explicabo.
        </p>
      </div>
      <div class="grid_4" id="banner_box">
        <? require_once("assets/php/_proizvodi_side_menu.php"); ?>
      </div>
      <div class="clear"></div>
      <div class="grid_8">
        <p>
          <? require_once("assets/php/_footer.php"); ?>
        </p>
      </div>
      <div class="grid_4">
        <p>
          Poslednja izmena: <?= LAST_CHANGE ?>
        </p>
      </div>
    </div>
  </body>
</html>