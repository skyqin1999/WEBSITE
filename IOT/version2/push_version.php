<?php
$name = $_POST['name'];
$version = $_POST['version'];

$file_name = $name."-version.txt";

echo "<script>alert('即将推送此版本{$version}到{$name}');</script>";
$version_file = fopen($file_name, "w+");

fwrite($version_file, $version);

fclose($version_file);
?>