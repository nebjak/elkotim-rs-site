<?php require_once("assets/php/_constants.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <? require_once("assets/php/_meta.php"); ?>
    <title>Kontakt <?= WEBSITE_TITLE ?></title>
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
          <li><a href="proizvodi.php">Proizvodi</a></li>
          <li><a href="reference.php">Reference</a></li>
          <li class="current_page_item"><a href="kontakt.php">Kontakt</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12" id="wrapper">
        <? require_once("assets/php/_slider.php"); ?>
      </div>
      <div class="clear"></div>
      <div class="grid_8" id="content_box">
        <h2>Početna</h2>
        <div class="inline">
          <p>
            <img src="assets/img/mapa.png" alt="Mapa" />
          </p>
        </div>
        <div class="inline">
          <h3>Elko Tim d.o.o.</h3>
          <table>
            <tr>
              <td>Adresa:</td>
              <td>Žabari bb</td>
            </tr>
            <tr>
              <td>Pošta:</td>
              <td>14203 Žabari - Valjevo</td>
            </tr>
            <tr>
              <td>Matični broj:</td>
              <td>17437852</td>
            </tr>
            <tr>
              <td>PIB:</td>
              <td>101492990</td>
            </tr>
            <tr>
              <td>Delatnost:</td>
              <td>2790 - Proizvodnja ostale električne opreme</td>
            </tr>
            <tr>
              <td>Telefon:</td>
              <td>+381 14 276599</td>
            </tr>
            <tr>
              <td>Faks:</td>
              <td>+381 14 276189</td>
            </tr>
            <tr>
              <td>E-Mail:</td>
              <td>office@elkotim.rs</td>
            </tr>
            <tr>
              <td>WWW:</td>
              <td>
                www.elkotim.rs<br>
                www.razvodni-ormani.rs<br>
                www.metalne-police.rs<br>
              </td>
            </tr>
            <tr>
              <td>APR:</td>
              <td><a href="http://j.mp/HYtJm1" target="_blank">Podaci</a></td>
            </tr>
            <tr>
              <td>NBS:</td>
              <td><a href="http://j.mp/HYu6Nm" target="_blank">Podaci</a></td>
            </tr>
          </table>
        </div>
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
