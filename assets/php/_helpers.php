<?php
  function gen_gallery($path, $title) {
    $gallery_html = '';
    $imgs = (glob("{$path}/*.jpg"));
    foreach($imgs as $img) {
      $gallery_html .= "<a class=\"colorbox\" href=\"{$img}\" title=\"{$title}\"><img class=\"thumbnail\" src=\"{$img}\" alt=\"{$title}\" /></a>";
    }
    return $gallery_html;
  }
?>
