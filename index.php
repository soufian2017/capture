<?php
  $f = fopen("data.txt", "w+");
  foreach($_GET as $data){
    fwrite($f, $data."\n");
  }
  $fclose($f);
?>
