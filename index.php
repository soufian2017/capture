<?php
  $f = fopen("data.txt", "w+");
  foreach($_REQUEST as $data){
    fwrite($f, $data."\n");
  }
  $fclose($f);
?>
