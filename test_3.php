<?php include 'parsecsv.lib.php';

$csv = new parseCSV('test_file.csv');

echo "<pre>";
print_r($csv->data);
echo "</pre>";




?>
