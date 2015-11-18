<?php
  $file = fopen($_SERVER['DOCUMENT_ROOT']."/data/counters/".$filename, "r");
  $count = intval(fgets($file));
  fclose($file);

  $views_counter = $count;

  $count++;

  $file = fopen($_SERVER['DOCUMENT_ROOT']."/data/counters/".$filename, "w");
  fwrite($file, $count);
  fclose($file);
?>