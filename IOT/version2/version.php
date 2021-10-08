<?php
$version = $_POST['version'];

$file_name = "version.txt";

echo "<script>alert('您推送的最高版本为{$version}');</script>";

$version_file = fopen($file_name, "w+");

fwrite($version_file, $version);

fclose($version_file);
?>