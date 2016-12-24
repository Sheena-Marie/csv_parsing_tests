<?php

$testFile = 'test_file.csv';


if ($handle = fopen($testFile, 'r')) {
  echo $content = fread($handle, filesize($testFile));
  fclose($handle);
} else {
  echo "It's not working";
}

?>
