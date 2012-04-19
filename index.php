<?php require_once("assets/php/_constants.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <? require_once("assets/php/_meta.php"); ?>
    <title><?= WEBSITE_TITLE ?></title>
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
          <li class="current_page_item"><a href="index.php">Početna</a></li>
          <li><a href="o_nama.php">O nama</a></li>
          <li><a href="proizvodi.php">Proizvodi</a></li>
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
        <h2>Početna</h2>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit 
          voluptatem accusantium doloremque laudantium, totam rem 
          aperiam, eaque ipsa quae ab illo inventore veritatis et 
          quasi architecto beatae vitae dicta sunt explicabo.
        </p>
        <p style="text-align: center;">
          <img src="assets/img/orman1.200p.png" atl="DEA" />
        </p>
        <p>
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit 
          aut fugit, sed quia consequuntur magni dolores eos qui 
          ratione voluptatem sequi nesciunt. Neque porro quisquam 
          est, qui dolorem ipsum quia dolor sit amet, consectetur, 
          adipisci velit, sed quia non numquam eius modi tempora 
          incidunt ut labore et dolore magnam aliquam quaerat 
          voluptatem.
        </p>
      </div>
      <div class="grid_4" id="banner_box">
        <div id="scrolling_box">
          <ul id="scroller">
            <? require_once("assets/php/_news.php"); ?>
          </ul>
        </div>
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
