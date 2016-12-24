<?php
include 'parsecsv.lib.php';
?>

<?php

$csv = new parseCSV('test_file.csv');
print_r($csv->data);



?>
