<?php
  require 'Page.php';
  $title = $_POST['title'];
  $year = $_POST['year'];
  $copyright = $_POST['copyright'];
  $content = $_POST['content'];
  $page = new Page($title, $year, $copyright);
  $page->addContent($content);
  echo $page->get();
?>