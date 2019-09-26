<?php

function simpleFileSize($file) {
  $size_types = array(
    "B", "kB", "Mb", "Gb"
  );
  $size_index = 0;

  $file_size = filesize($file);

  while($file_size > 1024) {
    $file_size = (int) ($file_size / 1024);
    $size_index++;
  }

  return('('. $file_size . ' ' . $size_types[$size_index] . ')');
}
